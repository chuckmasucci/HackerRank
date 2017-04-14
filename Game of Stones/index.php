<?php
function playGame($input_arr)
{
    // Get the first value from the array since it is the length of the array (per the instructions)
    $count = intval(array_shift($input_arr));

    // Loop through the input array ($input_arr) to determine who wins each game
    for ($i = 0; $i < $count; $i++) {
        // We determine who the winner is based on the modulo of 7.
        // The Second player will ALWAYS win if 7 is the hand dealt to First player.
        if ($input_arr[$i] % 7 < 2) {
            echo "Second\n";
        } else {
            echo "First\n";
        }
    }
}

// STDIN as defined by HackerRank
$_fp = fopen("php://stdin", "r");
$input_arr = [];

while ($input = fgets($_fp)) {
    array_push($input_arr, $input);
}

playgame($input_arr);

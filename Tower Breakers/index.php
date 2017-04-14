<?php
function playgame($input_arr, $count)
{
    // Loop through input array's length ($count)
    for ($i = 0; $i < $count; $i++) {
        // Get the number of towers ($n)
        $n = $input_arr[$i][0];

        // Get the height of the towers ($m)
        $m = $input_arr[$i][1];

        // Determine if the number of towers are odd/even based on the modulo 2 of ($n)
        // Determine if the height of towers are odd/even based on the modulo 2 of ($m)
        $n_oddeven = ($n % 2 == 0) ? true : false;
        $m_oddeven = ($m % 2 == 0) ? true : false;

        // Outcome:
        // If the height of the towers is 1, Player 2 will in
        // If both number ($n) and height ($m) of towers are even, then Player 2 will win
        // If both number ($n) and height ($m) of towers are odd, then Player 1 will win
        // If number ($n) is odd and height ($m) is even, Player 1 will win
        // If number ($n) is even and height ($m) is odd, Player 2 will win
        if ($m == 1) {
            echo "2\n";
        } elseif ($n_oddeven && $m_oddeven) {
            echo "2\n";
        } elseif (!$n_oddeven && !$m_oddeven) {
            echo "1\n";
        } elseif (!$n_oddeven && $m_oddeven) {
            echo "1\n";
        } elseif ($n_oddeven && !$m_oddeven) {
            echo "2\n";
        }
    }
}

// STDIN as defined by HackerRank
$_fp = fopen("php://stdin", "r");
$input_arr = [];
while ($input = fgets($_fp)) {
    $arr = explode(" ", $input);
    array_push($input_arr, $arr);
}
$count = intval(array_shift($input_arr)[0]);

playgame($input_arr, $count);

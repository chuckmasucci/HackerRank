<?php
function encrypt($input)
{
    // Get the string lengh of the inputted string
    $str_len = strlen($input);

    // Get the square root of the string length to help determine the grid size
    $sqrt = sqrt($str_len);

    // Ceil the square root to get the width, and floor it to get the height
    $width = ceil($sqrt);
    $height = floor($sqrt);

    // Prefill the array with an empty string to allow later modification
    $encrypted_arr = array_fill(0, $width, '');

    // Loop through the string to create the final, encrypted array
    for ($i = 0; $i < $str_len; $i++) {
        // Get the modulo of ($i) to use as the indices for the array
        $mod_ram = $i % $width;

        // We use the the modulo variable ($mod_ram) index to fill the encrypted array
        // Each letter is placed into the array based on the grid ($width/$height)
        $encrypted_arr[$mod_ram] = $encrypted_arr[$mod_ram] . $input[$i];
    }

    // Implode the array to a string with a space delimeter per the challenge instructions
    echo implode(' ', $encrypted_arr);
}

// STDIN as defined by HackerRank
$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $s);

encrypt($s);

<?php

function repairSOS($input)
{
    // Get the string length
    $str_length = strlen($input);

    // Determine amount of "SOS" words by divinding the string length by 3
    $words_num = $str_length / 3;

    // Initialize the wrong letters variable
    $wrong_letters = 0;

    // Loop through the string
    for ($i = 0; $i < $str_length; $i++) {
        // Check to see the modulo value in order to determine if a letter is in the correct position
        // 0 = S; 1 = 0; 2 = S;
        if ($i % 3 == 0 && $input[$i] != "S") {
            $wrong_letters++;
        } elseif ($i % 3 == 1 && $input[$i] != "O") {
            $wrong_letters++;
        } elseif ($i % 3 == 2 && $input[$i] != "S") {
            $wrong_letters++;
        }
    }

    // Print amount of wrong letters ($wrong_letters) found in the original string
    echo $wrong_letters;
}

// STDIN as defined by HackerRank
$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $S);

repairSOS($S);

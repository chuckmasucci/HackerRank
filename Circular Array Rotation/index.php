<?php
function rotation($n, $k, $q, $a, $m0)
{
    // Check to see if the rotation amount ($k) is less than the size of the array ($n)
    if ($k < $n) {
        $rotations = $k;
    } else {
        $rotations = $k % $n;
    }

    // Rotate the array by splicing based on the negative rotation amount and merge into final array ($inputArray)
    $splicedArray = array_splice($a, -$rotations);
    $inputArray = array_merge($splicedArray, $a);

    // Loop through queries ($q) to print the output as defined by the integer in ($m0)
    for ($i = 0; $i < $q; $i++) {
        // Clean up the rotated array and print
        echo trim($inputArray[$m0[$i]]), "\n";
    }
}

// STDIN as defined by HackerRank
$handle = fopen("php://stdin", "r");
fscanf($handle, "%d %d %d", $n, $k, $q);
$a_temp = fgets($handle);
$a = explode(" ", $a_temp);
array_walk($a, 'intval');
for ($a0 = 0; $a0 < $q; $a0++) {
    fscanf($handle, "%d", $m);
    $m0[] = $m;
}

rotation($n, $k, $q, $a, $m0);

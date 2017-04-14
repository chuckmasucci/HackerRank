<?php
function insertionSort($arr)
{
    // Pop the last element in the array
    // This element will be the sorted element
    $e = array_pop($arr);
    $arr_len = count($arr);

    // Reverse loop through the array ($arr_len) so we compare the index values in reverse order
    for ($i = $arr_len; $i >= 0; $i--) {
        if ($i > 0) {
            // Get the index value
            $num = $arr[$i-1];
        } else {
            $num = 1;
        }

        if ($num > $e) {
            // Call replace function to shift the current index ($num) to it's new place in the sort and print per instructions
            echo replace($i, $num, $arr) . "\n";
        } else {
            // Call replace function to shift the index and place the original number ($e) in it's correct place in the sort and print per instructions
            echo replace($i, $e, $arr) . "\n";
            break;
        }
    }
}

function replace($i, $rep_val, &$arr)
{
    // Create a new array with an index based on the caller's loop index ($i). This is used to place the number in the proper sort order in the array
    $rep = array(($i) => $rep_val);
    // Replace the value in the array ($arr) with the newly created array ($rep)
    $arr = array_replace($arr, $rep);

    // Implode array to a string with a space delimeter for printing
    return implode(" ", $arr);
}

// STDIN as defined by HackerRank
$fp = fopen("php://stdin", "r");
fscanf($fp, "%d", $m);
$ar = array();
$s = fgets($fp);
$ar = explode(" ", $s);
for ($i=0;$i < count($ar);$ar[$i++]+=0);

insertionSort($ar);

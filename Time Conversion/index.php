<?php
function convert($time_arr)
{
    // Get the hours, minutes, and seconds and AM/PM from the array
    $hours = intval($time_arr[0]);
    $minutes = intval($time_arr[1]);
    $seconds = intval(substr($time_arr[2], 0, 2));
    $ampm = substr($time_arr[2], 2, 2);

    if ($ampm == "AM") {
        // If the time is AM AND hours equals 12, subtract 12 hours
        if ($hours == 12) {
            $hours -= 12;
        }
    } elseif ($ampm == "PM") {
        // If the time is PM AND hours is less than 12, add 12 hours
        if ($hours < 12) {
            $hours += 12;
        }
    }

    // Pad $hours with a 0 for proper 24-hour syntax
    if ($hours < 10) {
        $hours = "0" . $hours;
    }

    // Print result
    echo $hours . ":" . $minutes . ":" . $seconds;
}

// STDIN as defined by HackerRank
$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $time);

$time_arr = explode(":", $time);
array_walk($time_arr, 'intval');

convert($time_arr);

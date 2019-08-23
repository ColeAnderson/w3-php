<?php 
    $t = date("H");
// if the current time (HOUR) is less than 20:
    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
?>
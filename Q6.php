<?php

 $numbers = [30,20,10];


if ($numbers[0] > $numbers[1]) {
    if ($numbers[0] > $numbers[2]) {
        $max = $numbers[0];
        echo $max;
    } else {
        $max = $numbers[2];
        echo $max;
    }
} elseif ($numbers[1] > $numbers[2]) {
    $max = $numbers[1];
    echo $max;
} else {
    $max = $numbers[2];
    echo $max;
}

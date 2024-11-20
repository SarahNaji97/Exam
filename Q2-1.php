<?php
$arr = [];

for ($x = 0; $x <= 8; $x++) {

    $arr[$x] = " ";
}
$str1 = implode("", $arr);
$str = $str1;

$first = 4;
$last = 4;

for ($y = 1; $y <= 5; $y++) {
    if ($first % 2 != 0) {
        for ($i = 0; $i <= 8; $i++) {
            if ($i == $first || $i == $last) {
                $str[$i] = "*";
            }
            if (($i > $first && $i < $last) && ($i % 2 != 0)) {
                $str[$i] = "*";
            }
        }
    } else {
        for ($i = 0; $i <= 8; $i++) {
            if ($i == $first || $i == $last) {
                $str[$i] = "*";
            }
            if (($i > $first && $i < $last) && ($i % 2 == 0)) {
                $str[$i] = "*";
            }
        }
    }
    echo "<pre>";
    echo  $str;
    echo "<pre>";

    if ($y == 5) {
        $first1 = 1;
        $last1 = 7;
        $str = $str1;
        for ($z = 1; $z <= 4; $z++) {
            if ($first1 % 2 != 0) {
                for ($i = 0; $i <= 8; $i++) {
                    if ($i == $first1 || $i == $last1) {
                        $str[$i] = "*";
                    }
                    if (($i > $first1 && $i < $last1) && ($i % 2 != 0)) {
                        $str[$i] = "*";
                    }
                }
            } else {
                for ($i = 0; $i <= 8; $i++) {
                    if ($i == $first1 || $i == $last1) {
                        $str[$i] = "*";
                    }
                    if (($i > $first1 && $i < $last1) && ($i % 2 == 0)) {
                        $str[$i] = "*";
                    }
                }
            }
            echo "<pre>";
            echo  $str;
            echo "<pre>";
            $first1 = $first1 + 1;
            $last1 = $last1 - 1;
            $str = $str1;
        }
    }



























    $first = $first - 1;
    $last = $last + 1;
    $str = $str1;
}

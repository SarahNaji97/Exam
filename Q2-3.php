<?php
$sum = [];
$sum[0] = "*";
$z = 1;
echo $sum[0];
echo "<br>";
for ($i = 1; $i < 3; $i++) {
    for ($j = $z; $j <= $z + 1; $j++) {
        $sum[$j] = "*";
    }
    $z = $j;
    foreach ($sum as $item) {
        echo $item;
    }
    echo "<br>";
    if ($j == 5) {

        array_pop($sum);
        array_pop($sum);
        foreach ($sum as $item) {
            echo $item;
        }
        echo "<br>";
        echo $sum[0];
    }
}

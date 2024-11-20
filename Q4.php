<?php 

$array = [2,4,3,1,6,7,5,8,0,9];
$size = count($array);
$sum =0;
for($i=0;$i<=9;$i++){
    $sum = $sum + $array[$i];
}
$avg =$sum / $size;
echo $avg;
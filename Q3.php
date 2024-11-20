<?php
$array = [2,4,3,1,6,7,5,8,0,9];
for($i=0 ;$i<=9;$i++){
    for($j=$i+1 ;$j<=9 ;$j++){
        if($array[$j]>$array[$i]){
            $max = $array[$j];
            $array[$j]=$array[$i];
            $array[$i] = $max;
        }
    }
}

echo "<pre> ";
print_r($array);
echo "</pre>";




?>
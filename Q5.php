<?php 
$array = [2,0,7,39,14,78,33,1,123,22];
$size = count($array);
$evenNumber = [];
foreach($array as $number){
    if($number %2 == 0){
        array_push($evenNumber , $number);
    }
}
echo "<pre>";
print_r($evenNumber);
echo "<pre>";


// Delete 
for($i = 0 ;$i < $size ; $i++){
    if($array[$i] %2 ==0){
        unset($array[$i]);
    }
}
echo "<pre>";
print_r($array);
echo "<pre>";
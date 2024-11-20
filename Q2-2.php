<?php
$sum = "";
for ($i = 1; $i <= 5; $i++) {
  $sum = $sum . "*";
  echo $sum;
  echo "<br>";
  if ($i == 5) {
    echo $sum;
    echo "<br>";

    for ($j = 4; $j >= 1; $j--) {
      $sum[$j] = " ";
      echo $sum;
      echo "<br>";
    }
  }
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $color1 ="#FADE90";
    $color2= "#A76E37";

    for ($i = 1; $i <= 8; $i++) {
        for ($j = 1; $j <= 4; $j++) {
    ?>
        <div  style="background-color:<?php echo $color1?> ; width:70px; height:70px; display:inline-block;"></div>
        <div  style="background-color: <?php echo $color2?>; width:70px; height:70px; display:inline-block;"></div>
   


    <?php
       }
       echo "<br>" ;
       $temp = $color1;
       $color1 =$color2;
      
       $color2 = $temp;
    }


    ?>
</body>

</html>
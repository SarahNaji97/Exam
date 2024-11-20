<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body style="background-color: <?php if (isset($_COOKIE["color"])) echo $_COOKIE["color"]; ?>;">
    <form action="" method="get">
        <h4> pleces select the color of the page :</h4>
        <select name="color" id="">
            <option value="red">أحمر</option>
            <option value="yellow">أصفر</option>
            <option value="green">أخضر</option>
            <option value="blue">أزرق</option>
        </select>
        <br>
        <br>
        <input type="submit" name="submit" value="Enter" id="">
    </form>
</body>

</html>
<?php
if (isset($_GET["submit"])) {
    $color = $_GET["color"];
    $colCookie = setcookie("color", $color, time() + 60);
}


?>
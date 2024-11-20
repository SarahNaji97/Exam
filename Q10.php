<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Number: <input type="number" name="number" id="">

        <input type="submit" name="submit">
    </form>
</body>

</html>
<?php
if (isset($_GET["submit"])) {
    $number = $_GET["number"];
    $prime = 1;
    if ($number == 1) {
        $prime = 0;
    }
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0)
            $prime = 0;
    }
    if ($prime) {
        echo "the number is prime";
    } else {
        echo "the number is  not prime";
    }
}

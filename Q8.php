<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Month: <input type="text" name="month" id="">
        <input type="submit" name="submit">
    </form>
</body>

</html>
<?php
if (isset($_GET["submit"])) {
    $month = $_GET["month"];
    //Month: <input type="number"
    // if ($month > 1 && $month <= 12) {
    //     $preMonth = $month - 1;
    //     echo "the previous month of " . $month . " is " . $preMonth;
    // } elseif ($month == 1) {
    //     $preMonth = 12;
    //     echo "the previous month of " . $month . " is " . $preMonth;
    // } elseif ($month < 1 || $month > 12) {
    //     echo "plese Enter the valid month!";
    // }



    // حل اخر
    // نغير المدخل الى نص
    //Month: <input type="text"
    $months = [
        "يناير",
        "فبراير",
        "مارس",
        "أبريل",
        "مايو",
        "يونيو",
        "يوليو",
        "أغسطس",
        "سبتمبر",
        "أكتوبر",
        "نوفمبر",
        "ديسمبر"
    ];
    for ($i = 0; $i < 12; $i++) {
        if ($month == "يناير") {
            $preMonth = "ديسمبر";
            break;
        } elseif ($month == $months[$i]) {
            $preMonth = $months[$i - 1];
        }
    }
    echo "the previous month of " . $month . " is " . $preMonth;
}

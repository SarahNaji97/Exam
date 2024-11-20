<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Day: <input type="number" name="day" id="">
        Month: <input type="number" name="month" id="">
        $year: <input type="number" name="year" id="">
        <input type="submit" name="submit">
    </form>
</body>

</html>
<?php
if (isset($_GET["submit"])) {
    $day = $_GET["day"];
    $month = $_GET["month"];
    $year = $_GET["year"];
    function isLeap($year)
    {
        if ($year % 4 == 0) {
            if ($year % 100 == 0) {
                if ($year % 400 == 0) {
                    return 1;
                } else {
                    return 0;
                }
            } else {
                return 1;
            }
        } else {
            return 0;
        }
    }
    if ($day != 31 && $month != 12) {
        if ($day == 30 && in_array($month, [1, 3, 5, 7, 8, 10, 12]) || (($day >= 1 && $day <= 29) && $month!=2)) {
            $day = $day + 1;
        } elseif ($day == 31 && $month != 12) {
            $day = 1;
            $month = $month + 1;
        } elseif ($day == 30 && in_array($month, [4, 6, 9, 11])) {
            $day = 1;
            $month = $month + 1;
        } elseif ($month == 2) {
            if (isLeap($year) && $day == 28) {
                $day = 29;
            } elseif ((!isLeap($year) && $day == 28 )|| (isLeap($year) && $day == 29)) {
                $day =1;
                $month = $month + 1;
            } else {
                $day = $day + 1;
            }
        }
    } else {
        $day = 1;
        $month = 1;
        $year = $year + 1;
    }
    echo $day . "/" . $month . "/" . $year;
}

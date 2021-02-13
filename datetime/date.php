<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">

    <meta http-equiv="refresh" <title>Document</title>
</head>

<body>
    <?php

include("/filepath.file.php");////file on trmk include krnn puluwn
require("");//
include_once("");//ek file ek ekm ek park vitri enclude krnn puluwn
require_once("");//

    //current date 
    echo date('d'); //
    echo date('3'); //
    echo date('M'); //
    echo date('y'); //
    echo date('Y'); //
    echo date('Y-M-d'); //
    echo date('Y/m/d'); //
    echo date('d-M-y'); //26-jan-2021
    echo date('l'); //day name ek
    ?>

    <?php
    //current time
    echo date('H'); //21:24 format 
    echo date('h'); // 09:24 format
    echo date('i'); // mimits out put
    echo date('s'); //seconds  out put
    echo date('a'); //
    echo date('A');

    ?>

    <?php
    //TIME ZONE
    echo date_default_timezone_get(); //21:24 format 
    echo date_default_timezone_set("Asia/colombo"); //2
    echo date("H : i : sA"); //
    echo date("h : i : sa"); //



    echo date("Y-M-d h:i:sA"); //

    ?>

</body>

</html>
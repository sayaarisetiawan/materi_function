<?php
echo date ("l");
echo"<br>";
echo time();
echo"<br>";

echo date (
    "l, d-M-Y",
    time() + 60 * 60 * 24 * 100); 
    // seratus hari setelah hari ini
    echo"<br>";
echo date (
    "l, d-M-Y",
    time() + 60 * 60 * 24 * 1000);
    // seribu hari setelah hari ini
    echo"<br>";
echo date (
    "l, d-M-Y",
    time() + 60 * 60 * 24 * -500); 
    // limaratus hari sebelum hari ini
    echo"<br>";

echo date ("l, d-M-Y " , mktime(0,0,0, 03 , 31-10, 2000));
echo"<br>";

$date = strtotime('21-03-2000'); 
$newDate = date('l,d-m-Y', strtotime("+30 year", $date)); 
echo 'Ultah saya di 2030 : ' , $newDate;
?>
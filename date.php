<?php
// echo date ("l");
// echo time();

// echo date (
//     "l, d-M-Y",~
//     time() + 
//     60 * 60 * 2400); 
//     // seratus hari setelah hari ini

// echo date (
//     "l, d-M-Y",
//     time() + 
//     60 * 60 * 24000);
//     // seribu hari setelah hari ini

// echo date (
//     "l, d-M-Y",
//     time() + 
//     60 * 60 * -12000); 
//     // limaratus hari sebelum hari ini

echo date ("l, d-M-Y " , mktime(0,0,0, 03 , 31-10, 2000));
?>
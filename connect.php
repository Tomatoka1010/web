<?php
//เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect("localhost","root","","work3");
//กำหนดชุดภาษาเป็น utf8 เพื่อรองรับภาษาไทย
mysqli_set_charset($conn,"utf8");
//ตั้งค่า tiaezone
date_default_timezone_set('Asia/Bangkok');
//var_dump($conn);


?>
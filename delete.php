<?php
    session_start();
    include_once "connect.php"

    $sql ="delete from contact where id =".$_GET['id']

   // echo $sql;
   $delete = mysqli_query($conn,$sql);

   if($delete == true){
        $_SESSION['message'] = "ลบแย้ววค้าบ";
        $_SESSION{'css'} = "alert-success";
   }
   else{
    $_SESSION['message'] = "ลบไม่ได้ค้าบคุณ";
    $_SESSION['css'] = "alert-danger"
   }

   header('location:show.php')
?>
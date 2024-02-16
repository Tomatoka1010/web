<?php
session_start(); //เปิดใช้งานตัวแปรใช้งาน session (ต้องอยู่ก่อนการแสดงผลทุกอย่าง Hmtl output)
	include_once "connect.php";

?>

<?php
	//เอาค่าจาก $_POST มาใส่ไว้ในตัวแปรธรรดา เพื่อพิมพ์ง่าย
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$femail = $_POST['femail'];
	$ftel = $_POST['ftel'];
	$message = $_POST['message'];
    $id = $_POST['id'];
	//เตรียมคำสั่ง SQL เพิ่มข้อมูลในฐานข้อมูล
	$sql = "update contact 
            set fname = '$fname',
                lname = '$lname',
                femail = '$femail',
                ftel = '$ftel',
                message = '$message'
			where id = $id ";
//สั่งให้ฐานข้อมูลทำงานตามคำสั่ง SQL ถ้าเป็นคำสั่ง select จะได้ resouce_set
//ถ้า insert , updata , delete จะได้ true/false
	$process = mysqli_query($conn,$sql);
//วิธีดู Error
//echo mysql_errno($conn)
if($process == true){
	$_SESSION['message'] = "เพิ่มข้อมูลเรียบร้อย";
	$_SESSION['css'] = 'alert-success';
}else{
	$_SESSION['message'] = "เพิ่มข้อมูลไม่ได้";
	$_SESSION['css'] = 'alert-danger';
}
//ย้ายหน้าจอไปยังหน้า show
header('location:show.php');
?>
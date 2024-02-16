<?php
    session_start();
    include_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

    <?php
        $sql = "select * from contact where id =".$_GET['id'];
        $process = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($process);
    ?>

    <h1 class="text-center">ฟอร์ม แก้ไข</h1>
    <form action="update.php" class="container" method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">

        <div class="form-group row">
          <label for="fname" class="col-3">ชื่อ</label>
          <input name="fname" type="text" class="form-control col-9" value="<?=$row['fname']?>">
        </div>

        <!-- input ทุกตัวต้องอยู่ใน form -->
        <!-- input ทุกตัวต้องตั้งชื่อ name="ชื่อที่กำหนด" -->

        <div class="form-group row">
          <label for="lname" class="col-3">นามสกุล</label>
          <input name="lname" type="text" class="form-control col-9" value="<?=$row['lname']?>">
        </div>

        <div class="form-group row">
          <label for="femail" class="col-3">อี.เมล</label>
          <input name="femail" type="email" class="form-control col-9" value="<?=$row['femail']?>">
        </div>

        <div class="form-group row">
          <label for="ftel" class="col-3">เบอร์โทร</label>
          <input name="ftel" type="text" class="form-control col-9" value="<?=$row['ftel']?>">
        </div>

        <div class="form-group row">
          <label for="message" class="col-3">ข้อความติดต่อ</label>
          <textarea name="message" type="text" class="form-control"><?=$row['message']?></textarea>
        </div>

        <div class="form-group row">
            <button type="submit" class="btn btn-primary ml-auto">Submit</button>
        </div>
    </form>
    <!-- body code goes here -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
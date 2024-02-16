<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <div>
  	  <header class="container">
  	    <div class="row">
  	      <div class="logo col-sm-2 col-2 col-xl-1 col-md-2 col-lg-1"><img src="images/logo.png" class="img-fluid" alt="Placeholder image"></div>
  	      <div class="col-xl-4 col-sm-10 col-10 col-lg-4">
  	        <div class="webname-th">บริษัท ชลธาร ทรานสปอร์ต</div>
  	        <div class="webname-en">CHONLATRAN TRANSPORT CO.,LTD.</div></div>
  	      <div class="offset-xl-0 col-xl-7 col-lg-7">
  	        <nav class="menu">
				<a href="#">เกี่ยวกับเรา</a>
				<a href="#">ผลิตภัณฑ์</a>
			  	<a href="#">กลุ่มลูกค้า</a>
				<a href="#">ติดต่อเรา</a>
			  </nav>
  	        <div class="phone">Tel : 038 - 548198 Fax : 038-288548</div>
  	      </div>
        </div>
  	  </header>
    <main class="container">
        <div class="row">
          <div class="col-md-12 banner"><img src="images/banner.jpg" class="img-fluid" alt="Placeholder image"><img src="images/boxshadow.png" class="img-fluid" alt="Placeholder image"></div>
        </div>
        <div class="row">
          <div class="col-sm-6 p-5">
            <h2>เกี่ยวกับเรา</h2>
            <p>บริษัท ชลธาร ทรานสปอร์ต จำกัด ตัวแทนจำหน่าย สินค้า P&G ยี่ห้อ แพนทีน รีจอยส์
              เฮดแอนด์โชเดอร์ แครอลเฮร์บัลเสเชนต์ โอเล่ย์ ยิลเลตต์ แฟ้บ ดูราเชลล์ ดาวส์นี่ วิสเปอร์
              เชฟการ์ด ออรัล บี ดูแล 27 จังหวัด โคราช ชัยภูมิ มหาสารคาบ บุรีรัมย์ สระแก้ว
              ปราจีนบุรี นครนายก สระบุรี อยุธยา ปทุมธานี สุพรรณบุรี อ่างทอง  , ขอนแก่น กาฬสินธุ์
              สกลนคร นครพนม บึงกาฬ อุดรธานี หนองคาย หนองบัวลำภู เลย , สมุทรปราการ
              ฉะเชิงเทรา ชลบุรี ระยอง จันทบุรี ตราด</p>
            <a href="#" class="btn btn-sky">More</a></div>
          <div class="col-sm-6 p-5"><img src="images/one.jpg" alt="Placeholder image" class="img-fluid x1"></div>
        </div>
      <div class="row">
			  <div class="col-xl-12 p-5 product">
				<h2>ผลิตภัณฑ์</h2>
				<div>
			  <img src="images/rejoice.jpg" width="98" height="99" alt=""/><img src="images/pantene.jpg" width="98" height="99" alt=""/><img src="images/olay.jpg" width="98" height="99" alt=""/><img src="images/herbal.jpg" width="98" height="99" alt=""/><img src="images/duracell.jpg" width="98" height="99" alt=""/><img src="images/gillette.jpg" width="98" height="99" alt=""/><img src="images/oral_b.jpg" width="98" height="99" alt=""/><img src="images/whiper.jpg" width="98" height="99" alt=""/><img src="images/head_shoulders.jpg" width="98" height="99" alt=""/><img src="images/downy.jpg" width="98" height="99" alt=""/><img src="images/ambipur.jpg" width="98" height="99" alt=""/><img src="images/olaymen.jpg" width="98" height="99" alt=""/><img src="images/safeguard.jpg" width="98" height="99" alt=""/></div><a href="#" class="btn btn-sky m-4">More</a></div>
</div>
      <div class="row">
		  <h2 class="col-xl-12">ติดต่อเรา</h2>
		  <?php
		  	if(isset($_SESSION['message'])){
		  ?>
		  <div class="con-12 alert alert-success <?=$_SESSION['css']?> ">
			  <?=$_SESSION['message']?>
		  </div>
		  <?php
				unset($_SESSION['message']);
				unset($_SESSION['css']);	
			}
		  ?>
          <div class="col-xl-6"><img src="images/map.jpg" width="445" height="445" alt=""/></div>
          <div class="col-xl-6">
            
<!-- action คือ ไฟล์ปลายทางที่จะส่งข้อมูลไป method คือ รูปแบบการส่ง get = ส่งผ่าน URL,post ส่งแบบเบื้องหลัง -->
			<form action="save.php" class="container" method="post">

              <div class="form-group row">
                <label for="fname" class="col-3">ชื่อ</label>
                <input name="fname" type="text" class="form-control col-9" >
              </div>

			  <!-- input ทุกตัวต้องอยู่ใน form -->
			  <!-- input ทุกตัวต้องตั้งชื่อ name="ชื่อที่กำหนด" -->

              <div class="form-group row">
                <label for="lname" class="col-3">นามสกุล</label>
                <input name="lname" type="text" class="form-control col-9" >
              </div>

              <div class="form-group row">
                <label for="femail" class="col-3">อี.เมล</label>
                <input name="femail" type="email" class="form-control col-9" >
              </div>

              <div class="form-group row">
                <label for="ftel" class="col-3">เบอร์โทร</label>
                <input name="ftel" type="text" class="form-control col-9" >
              </div>

              <div class="form-group row">
                <label for="message" class="col-3">ข้อความติดต่อ</label>
                <textarea name="message" type="text" class="form-control"></textarea>
			  </div>

			  <div class="form-group row">
			  <button type="submit" class="btn btn-primary ml-auto">Submit</button>
			  </div>

			  </form>
          </div>
        </div>
  	  </main>
<footer class="container"></footer>
  	</div>
  	<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>
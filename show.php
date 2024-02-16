<?php
	session_start();
  include_once("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>show</title>
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
        <h2>รายการข้อความติดต่อ</h2>

        <form action="show.php" method="post">
        <div class="input-group">
            <label for="keyword">ค้นหา</label>
            <input type="search" name="keyword" id="keyword" class="form-control">

        <div class="input-group-append"></div>
            <button type="submit" class="bth bth-primary">search</button>
        </div>
        </form>
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
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
                <th class="text-center">รหัส</th>
                <th class="text-center">ชื่อ</th>
                <th class="text-center">สกุล</th>
                <th class="text-center">อี.เมล</th>
                <th class="text-center">เบอร์โทร</th>
                <th class="text-center">ข้อความ</th>
                <th class="text-center">เครื่องมือ</th>
            </tr>
        </thead>
        <tbody>
    
<?php
    if(isset($_POST['keyword']))
    {
        $sql = "select *
                 from contact
                 where fname LIKE'%".$_POST['keyword']."%'
                 or lname LIKE'%".$_POST['keyword']."%'
                 or femail LIKE'%".$_POST['keyword']."%'
                 or ftel LIKE'%".$_POST['keyword']."%'
                 or message LIKE'%".$_POST['keyword']."%'
                 ";
    }
    else{
    //ดึงข้อมูล
      $sql = "select * from contact order by id desc";
    }
    //ประมวลผล
    $process = mysqli_query($conn,$sql);
    //อ่านข้อมูล
    $rows = mysqli_fetch_all($process,MYSQLI_ASSOC);
    foreach($rows as $r)
    {
?>   
<!--               เขียน HTML ตรงนี้-->
                    <tr>
                        <td class="text-center">
                          <?=$r['id']?>
                        </td>
                        <td><?=$r['fname']?></td>
                        <td><?=$r['lname']?></td>
                        <td><?=$r['femail']?></td>
                        <td><?=$r['ftel']?></td>
                        <td><?=$r['message']?></td>
                        <td>
                            <a href="delete.php?id=<?=$r['id']?>">ลบ</a>
                            <a href="edit.php?id=<?=$r['id']?>">แก้ไข</a>
                        </td>
                    </tr>
                    

<?php
    }
?>
        </tbody>
      </table>
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
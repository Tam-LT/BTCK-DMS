<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
	</style>
	<div class="container">
	  <div class="row">
	  	<nav class="navbar navbar-expand-lg navbar-light" style="height: 30px; background-color: #e7ebf0;padding-left: 0px;">
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-bottom: 0">
		        <li class="nav-item">
		          <a class="nav-link" href="quanly.php">Trang chủ</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="quanlysinhvien.php">Quản lý sinh viên</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="quanlydiennuoc.php">Quản lý điện nước</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="quanlyphong.php">Quản lý phòng</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="thongke.php">Thống kê</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="dangnhap.php">Đăng xuất</a>
		        </li>
		      </ul>
		      <?php
		      	if(isset($_SESSION['user'])){
		      	$mql =  $_SESSION['user'];
		      	echo"<img src='./image/user.png' style='border-radius: 50%; width: 25px; height: 25px; margin-right: 10px;'/>";
		      	include('connectionstring.php');
		      	$cm = "select * from quanly where maql = '".$mql."'";
		      	$qr = mysqli_query($kn, $cm);
		      	if($dong = mysqli_fetch_array($qr)){
		      		echo $dong['hotenql'];
		      	}
		      }
		      ?>
		  </div>
		</nav>		
  	   </div>
	</div>
</body>
</html>
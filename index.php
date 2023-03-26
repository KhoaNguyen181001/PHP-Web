<?php
//ini_set('display_startup_errors',1);
//ini_set('display_errors',1);
//error_reporting(-1);
session_start();
if($_SESSION["uid"])
{
    header("location:profile.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ĐỒ GIA DỤNG KHOA SANG SỰ</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
   
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
     integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 
     crossorigin="anonymous">
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="container-fluid"> 
        <div class="navbar navbar-header"> 
            <a href="index.php" class="navbar-brand"> ĐỒ GIA DỤNG KHOA SANG SỰ</a>
        </div>
        <ul class="nav navbar-nav">
            <li> <a href="index.php"><i class="fas fa-home"></i>Trang chủ</a></li>
    </ul>

        <ul class="nav navbar-nav navbar-right">
            </li>
            <li> <a href="loginform.php"><i class="fas fa-sign-in-alt"></i>Đăng nhập</a></li>    
            <li> <a href="customer_registration.php"><i class="fas fa-user-plus"></i>Đăng ký</a></li>
        </ul>
    </div>
</div>

<!-- side-->
<p><br/></p>
<p><br/></p>
<p><br/></p>


<div class="container-fluid"> 
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
         <div id="get_category">
         </div>   
            
        </div>
        <div class="col-md-8">
        <div class="row">
            <div class="col-md-12" id="product_img"> 
            </div>
        </div>
            <div class="panel panel-info">
            <div class="panel-heading">Sản phẩm</div>
            <div class="panel-body">
            <div id="get_product">
            </div>             
            </div>
            
        </div>
</div>  
     
</body>
</html>
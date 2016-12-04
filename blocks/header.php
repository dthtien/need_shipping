<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Need-Shipping Ship tìm người, Người tìm ship</title>

    <meta name="title" content="Need-Shipping Ship tìm người, Người tìm ship">
    <meta name="description" content="Need-Shipping cộng đồng ship tìm người - người tìm ship">
    <meta name="keywords" content="tìm shipper, cần shipper, cần ship, vận chuyển nhanh, vận chuyển">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <meta name="google-site-verification" content="DT93bXLXI0Z780b1OTJ0lpChQRka5556aGwP7R7i2xM">

    <meta property="og:site_name" content="#">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:description" content="Need-Shipping cộng đồng ship tìm người - người tìm ship">
    <meta property="og:image" content="https://s-media-cache-ak0.pinimg.com/originals/51/4c/38/514c38b74491280b2647fdb230e8d08b.jpg"><!--Để hình logo-->
    <meta property="og:image:width" content="192">
    <meta property="og:image:height" content="192">
    <!-- Favicons -->
    <link rel="icon" href="./images/logo.png"><!--để icon-->
    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
       <style>
      .s5h-header .dropdown-menu {
        left: auto;
        right: 0;
      }

      .s5h-header .dropdown-menu li {
        width: 100%;
      }

      .s5h-header .dropdown-menu li a {
        height: 60px;
        line-height: 60px;
      }
    </style>
</head>
<body>

<div class="s5h-header">
    <div class="container">
        <a class="s5h-logo" href="index.php" title=""><img src="./images/Logo.png" alt=""></a>
        <span class="s5h-menuicon"><i class="fa fa-bars"></i></span>
        <ul class="s5h-menu">  <!--F24738-->
            <li><a class="active" href="index.php" title="TRANG CHỦ">TRANG CHỦ</a> </li>
            <li>
                <a href="taodonhang.php" style="color: #F24738; font-size: 18px;" title="Tạo Đơn Hàng">
                  <i class="fa fa-list w3-margin-right"></i>
                  TẠO ĐƠN HÀNG
                </a> 
            </li>
            <li>
                <a href="donhang.php" style="color: #F24738; font-size: 18px;" title="Giao Hàng Ngay">
                  <i class="fa fa-truck w3-margin-right"></i>
                  GIAO HÀNG NGAY 
                </a> 
            </li>
            <?php
            if(isset($_COOKIE['login']))
            {
            echo '
            <li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$_COOKIE['login'].'<span class="caret"></span></a>
            	<ul class="dropdown-menu">
            		<li><a href="nguoidung.php">Thông Tin</a></li>
                    <li><a href="dieukhoan.php">Chính Sách</a></li>
                    <li><a href="#contact" class="link-contact">CONTACT</a></li>
                    <li><a href="xuly.php">Đăng Xuất</a></li>
            	</ul>
            </li>
            ';
        }
        ?>
        </ul>
    </div>
</div>


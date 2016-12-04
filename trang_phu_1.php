<!DOCTYPE html>
<html>
<head>
<title>Xem Đơn Hàng</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="css/css_1.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome_1.min.css">
<link rel="stylesheet" type="text/css" href="css/w3_1.css">
<link rel="stylesheet" type="text/css" href="css/w3-theme-blue-grey_1.css">
<link rel="stylesheet" type="text/css" href="css/log_1.css">
<link rel="icon" href="./images/Logo.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/toastr.min.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/web.js"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
</head>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="index.html" class="w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Need Shipper</a></li>
  <li class="w3-hide-small"><a href="dangnhap.html" class="w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a></li>
  <li class="w3-hide-small"><a href="dangnhap.html" class="w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a></li>
  <li class="w3-hide-small w3-dropdown-hover">
    <a href="#" class="w3-padding-large w3-hover-white" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></a>
    <div class="w3-dropdown-content w3-white w3-card-4">
      <a href="#">Một số đơn hàng gần bạn</a>
      <a href="#">Bạn đã hoàn thành đơn hàng chưa</a>
      <a href="#">Chọn các đơn hàng khác gần bạn</a>
    </div>
  </li>
 <!-- <li class="taodonhang"><img src="images\tdh.PNG" style="height:50px;width:100px"></li>-->
 </ul>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:51px">
  <ul class="w3-navbar w3-left-align w3-large w3-theme">
    <li><a class="w3-padding-large" href="trang_phu_1.html">Trang chủ</a></li>
    <li><a class="w3-padding-large" href="dangnhap.html">Tin nhắn</a></li>
    <li><a class="w3-padding-large" href="dangnhap.html">Thông báo</a></li>
    <li><a class="w3-padding-large" href="#">My Profile</a></li>
  </ul>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="images\shipper.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Shipper</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> HCM,VietNam</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card-2 w3-round">
        <div class="w3-accordion w3-white">
          <button onclick="myFunction('Demo1')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Quản lý đơn</button>
          <div id="Demo1" class="w3-accordion-content w3-container">
            <p>Some text..</p>
            <p>Some text..</p>
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Quản lý mẫu</button>
          <div id="Demo2" class="w3-accordion-content w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Đơn chờ ship</button>
          <div id="Demo3" class="w3-accordion-content w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="#" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="#" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="#" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="#" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="#" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="#" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>
      </div>
      <br>
      
      <!-- Interests -->
    <!--  <div class="w3-card-2 w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>-->
      
      <!-- Alert Box -->
      <div class="w3-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-hover-text-grey w3-closebtn">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity"><b>Tra cứu thông tin</b></h6>
              <br><p contenteditable="true" class="w3-border w3-padding">Search here...</p>
              <br><button type="button" class="w3-btn w3-theme"><i class="fa fa-search-plus"></i>  Tìm kiếm</button>
            </div>
          </div>
        </div>
      </div>
      <!--center-->
      <div><br></div>
      <!-- vidu-->
      <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images\hh.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Tên sản phẩm:.</p>
        <p>địa chỉ:.</p>
        <p>Giá tiền:.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images\hh.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Tên sản phẩm:.</p>
        <p>địa chỉ:.</p>
        <p>Giá tiền:.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="images\hh.jpg" alt="Norway"  style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Tên sản phẩm:.</p>
        <p>địa chỉ:.</p>
        <p>Giá tiền:.</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images\hh.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Tên sản phẩm:.</p>
        <p>địa chỉ:.</p>
        <p>Giá tiền:.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images\hh.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Tên sản phẩm:.</p>
        <p>địa chỉ:.</p>
        <p>Giá tiền:.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="images\hh.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
       <p>Tên sản phẩm:.</p>
        <p>địa chỉ:.</p>
        <p>Giá tiền:.</p>
      </div>
    </div>
  </div>
  <!-- third Photo Grid-->

        <p>Giá tiền:.</p>
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images\hh.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Tên sản phẩm:.</p>
        <p>địa chỉ:.</p>
        <p>Giá tiền:.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images\hh.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Tên sản phẩm:.</p>
        <p>địa chỉ:.</p>
        <p>Giá tiền:.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="images\hh.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
       <p>Tên sản phẩm:.</p>
        <p>địa chỉ:.</p>
        <p>Giá tiền:.</p>
      </div>
    </div>
    </div>
    
  <!--thanh chon tràg-->
  
   <div class="w3-center w3-padding-32">
    <ul class="w3-pagination">
      <li><a class="w3-black" href="#">1</a></li>
      <li><a class="w3-hover-black" href="#">2</a></li>
      <li><a class="w3-hover-black" href="#">3</a></li>
      <li><a class="w3-hover-black" href="#">4</a></li>
      <li><a class="w3-hover-black" href="#">»</a></li>
    </ul>
  </div>
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
    	<div><!-- co the chen quang cao--></div>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<div class="s5h-footer">
    <div class="container">
        <h3 class="s5h-ft-title">CONTACT</h3>
        <ul class="s5h-ft-ctac">
            
            <li><a href="mailto:tiendt2311@gmail.com"> <i class="glyphicon glyphicon-envelope"></i> Bùi Linh Thương</a>
            </li>
            <li>
                <a href="https://www.facebook.com/linhthuong.bui"><i class="fa fa-facebook  "></i> fb</a>
            </li>
        </ul>
        <p class="s5h-ft-add">Lớp HTTT2014, Trường Đại học Công Nghệ Thông Tin, Đại học quốc gia thành phố Hồ Chí Minh</p>
        <div class="row s5h-ft-form">
            <form id="contact" novalidate>
                <div class="col-xs-4">
                    <input type="text" class="form-control" name="name" placeholder="Tên">
                </div>
                <div class="col-xs-4">
                    <input type="text" class="form-control" name="phone" placeholder="Điện thoại">
                </div>
                <div class="col-xs-4">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col-xs-12">
                    <textarea rows="4" class="form-control" name="content" placeholder="Nội dung"></textarea>
                </div>
                <div class="col-xs-12 text-center">
                    <button class="btn btn-danger s5h-ft-btn" type="submit">Send</button>
                </div>
            </form>            
        </div>
    </div>
</div>
<script src="js/jquery.validate.js"></script>
</body>
</html>


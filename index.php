<?php require 'blocks/header.php' ?>
<div class="s5h-banner">
    <div class="container">
        <div class="row">
            <div id="intro" class="col-sm-6 col-xs-12  col-sm-push-6">
                <div class="s5h-bntitle"><p style="font-size: 50px;"><big>Trang vận chuyển </big></p><p> Của cộng đồng Ship tìm người- người tìm ship<br>Giúp bạn tìm shipper và đơn hàng dễ dàng, nhanh chóng.</p>
                </div>
                <?php
                if(!isset($_COOKIE['login']))
                {
                    echo '
                    <div class="s5h-bninfo"></div>
                    <div class="s5h-bntitle"> <p>Đăng nhập để đăng hoặc tìm đơn hàng</p></div>
                    <ul class="s5h-bndown-ul">
                        <li class="s5h-bndown-ship"><a href="dangnhap.php" style=" color: #fff; font-size: 18px; " title="Đăng Nhập">
                         <i class="fa fa-sign-in w3-margin-right"></i>
                         ĐĂNG NHẬP
                     </a></li>
                     <li class="s5h-bndown-ship"><a href="dangky.php" style=" color: #fff; font-size: 18px; " title="Đăng ký nếu bạn chưa có tài khoản">
                         <i class="fa fa-edit w3-margin-right"></i>
                         ĐĂNG KÝ
                     </a></li>
                 </ul>
             </div>
             ';
            }
            else
            {
            echo '
            <div class="s5h-bninfo"></div>
            <div class="s5h-bntitle"> <p>Bạn có thể đăng hoặc tìm đơn hàng</p></div>
            <ul class="s5h-bndown-ul">
                <li class="s5h-bndown-ship"><a href="donhang.php" title="Chuyển hàng ngay">

                 <i class="fa fa-truck w3-margin-right"></i>
                 CHUYỂN HÀNG NGAY
             </a></li>
             <li class="s5h-bndown-ship"><a href="taodonhang.php" title="Tạo Đơn hàng">

                 <i class="fa fa-list w3-margin-right"></i>
                 TẠO ĐƠN HÀNG
             </a></li>
         </ul>
     </div>';
 }
 ?>
 <div class="col-sm-6 col-xs-12 col-sm-pull-6">
    <div class="s5h-bnimg slideInUp wow" data-wow-duration="3s" data-wow-delay="1s" style="visibility: visible; animation-duration: 3s; animation-delay: 1s; animation-name: slideInUp;"><img src="./images/shipper1.png" alt="">
    </div>
</div>
</div>
</div>
</div>
<section id="hiw">
    <div class="container">
        <div class="s5h-why5ship" style="background-color: #FFFEF2">
            <div class="col-lg-12 text-center">
                <h2 class="s5h-why5s-title">Vì sao nên dùng Need-Shipping.com?</h2>
            </div>
        </div>
    </div>
</section>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
</ol>
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
    <div class="item active">
        <div class="s5h-why5s-item">
           <div class="s5h-why5s-icon flipInX wow" data-wow-duration="2s" data-wow-delay="0" style="visibility: visible; animation-duration: 3s; animation-name: flipInX;">
            <span>
              <i class="fa fa-shopping-cart"></i>
          </span>
      </div> 
      <h4>NHẬN NHANH - CHUYỂN NHANH</h4>
      <div class="s5h-why5s-info ">
        Trang web phát triển từ cộng đồng ship- shop lớn nhất Việt Nam giúp bạn tìm shipper và đơn hàng dễ dàng, nhanh chóng.
    </div>
    <div class="s5h-why5s-icon flipInX wow" data-wow-duration="1s" data-wow-delay="0" style="visibility: visible; animation-duration: 3s; animation-name: flipInX;">
        <span><i class="fa fa-map-pin"></i></span>
    </div> 
    <h4>TIỆN ĐƯỜNG</h4>
    <div class="s5h-why5s-info">
        Tự động phát hiện vị trí và đề xuất tất cả các đơn hàng trên cung đường bạn đi ship.
    </div>
</div>
</div>
<div class="item s5h-why5s-item">
    <div class="s5h-why5s-icon flipInX wow" data-wow-duration="1s" data-wow-delay="0" style="visibility: visible; animation-duration: 3s; animation-name: flipInX;">
        <span><i class="fa fa-credit-card-alt"></i></span>
    </div> 
    <h4>CHI PHÍ</h4>
    <div class="s5h-why5s-info">
        Thanh toán ngay sau khi trao hàng.
    </div>
    <div class="s5h-why5s-icon flipInX wow" data-wow-duration="1s" data-wow-delay="0" style="visibility: visible; animation-duration: 3s; animation-name: flipInX;">
        <span><i class="fa fa-american-sign-language-interpreting"></i></span>
    </div> 
    <h4>AN TOÀN</h4>
    <div class="s5h-why5s-info">
        Biết shipper của bạn là ai và đơn hàng bạn nhận như thế nào.
    </div>
</div>
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>
<?php require 'blocks/footer.php'; ?>
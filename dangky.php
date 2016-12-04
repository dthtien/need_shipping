<?php 
ob_start();
if(isset($_COOKIE['login']))
{
    setcookie('login',"",time()-3600,"/"); 
}
?>
<?php require 'blocks/header.php'; ?>
  <div class="s5h-userform">
    <div class="s5h-uformbox">
        <div class="s5h-uform">
            <form class="s5h-uform-login" id="f-register" method="post" action="    " novalidate="novalidate">                
                <!--<input name="__RequestVerificationToken" type="hidden" value="gv4g00BlKJDjxtTmEbf3GSIMUZw4L8Ug4Q7mHtC2mFmSzxIxgQB8WP4lFcNU9S648mjB7uyhOwqspDE8pCf1LfdT9KkJbkdvSNqy42J2YFc1">
                <input type="hidden" id="Provider" name="Provider" value="fship">
                <input type="hidden" name="UserName" value="">-->
                <h3 class="s5h-uform-title">Đăng ký</h3>
                <p style="text-align: center; color: red; margin-bottom: 10px; margin-top: 10px; ">
                    <?php
                    if(isset($_COOKIE['tbdangky']))
                    {
                        echo $_COOKIE['tbdangky'];
                        setcookie("tbdangky","",-1,"/");
                    } 
                    ?> 
                </p>
                <div class="form-group has-feedback">
                    <input type="text" name="Email" class="form-control" placeholder="Email" value="<?php  if(isset($_COOKIE["email"])){echo $_COOKIE["email"];
                    setcookie("email","",-1,"/");} ?>">
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="Password" id="Password" class="form-control" placeholder="Mật khẩu" 
                    value="<?php  if(isset($_COOKIE["password"])){echo $_COOKIE["password"];
                    setcookie("password","",-1,"/");} ?>">
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="ConfirmPassword" id="ConfirmPassword" class="form-control" placeholder="Nhập lại mật khẩu">
                </div>
                <div class="form-group has-feedback">
                    <input type="text" name="FullName" class="form-control" id="FullName" value="" placeholder="Họ tên"
                    value="<?php  if(isset($_COOKIE["name"])){echo $_COOKIE["name"];
                    setcookie("fullName","",-1,"/");} ?>">
                </div>
                <div class="form-group has-feedback">
                    <input type="text" name="Phone" id="Phone" class="form-control" placeholder="Số điện thoại"
                    value="<?php  if(isset($_COOKIE["phone"])){echo $_COOKIE["phone"];
                    setcookie("phone","",-1,"/");} ?>"> 
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="add_autocomplete" name="AddressDetail" placeholder="Nhập địa chỉ của b"
                   value="<?php  if(isset($_COOKIE["AddressDetail"])){echo $_COOKIE["AddressDetail"];
                   setcookie("AddressDetail","",-1,"/");} ?>" >
                </div>
                <div id="LicenseMoto">
                    <!--<input type="text" name="LicenseMoto" id="LicenseMoto" class="form-control" placeholder="Biển số xe">-->
                    <!--<span class="glyphicon s5h-gly-moto form-control-feedback"></span>-->
                </div>
               <!-- <div class="form-group has-feedback shipper-field">
                    <input type="text" name="ReferralCodeUsed" id="ReferralCodeUsed" class="form-control" placeholder="Mã giới thiệu">
                    <span class="glyphicon s5h-gly-moto form-control-feedback"></span>
                </div>-->
                <br>
                <div class="form-group" style="margin-top:1px">
                    <h6 class="s5h-uform-title" style="margin-bottom: 10px; margin-top:1px">Bạn là: </h6>
                    <div class="register-radio">
                        <input type="radio" name="TypeAcc" value="Shop" onclick="">
                        <label class="radio-shop" for="IsShop">Shop</label>
                    </div>
                    <div class="register-radio">
                        <input type="radio" name="TypeAcc" value="Ship" onclick="">
                        <label class="radio-ship" for="IsShipper">Shipper</label>
                    </div>
                   <!-- <select class="form-control" name="loai">
                      <option value="shop">Shop</option>
                      <option value="shipper">Shipper</option>
                  </select>-->
              </div>
              <button type="submit" class="btn btn-default s5h-uform-btn" name="btndk">Đăng ký</button>
          </form>
      </div>
      <div class="s5h-uform-reg">
        <div class="s5h-uform-regbox">
            <h3 class="s5h-uform-regtit">Đăng nhập</h3>
            <p>Bạn đã có tài khoản ?</p>
            <p class="s5h-uform-regbtn">
                <a class="btn" href="dangnhap.php">Đăng nhập ngay</a>
            </p>
        </div>
    </div>
</div>
</div>
<!-- <script type="text/javascript">
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    var placeSearch, autocomplete;

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** type {!HTMLInputElement} */
            (document.getElementById('add_autocomplete')),
            { types: ['geocode'] });

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        codeAddress();
        autocomplete.addListener('place_changed', fillInAddress);
    }

    // [START region_fillform]
    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace().geometry.location;
        $("#xpoint").val(place.lat());
        $("#ypoint").val(place.lng());
    }

    function codeAddress() {
        var address = document.getElementById("add_autocomplete").value;
        if (address) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var place = results[0].geometry.location;
                    $("#xpoint").val(place.lat());
                    $("#ypoint").val(place.lng());
                } else {
                    console.info("Geocode was not successful for the following reason: " + status);
                }
            });
        }
    }
</script> -->
<?php
if (isset($_POST["btndk"])) 
{
    include 'data_access_helper.php';
    $db=new DataAccessHelper;
    $db->connect();
    $t=new DataAccessHelper;
    $t->connect();
// lấy dữ liệu từ browser
    $Email=$_POST["Email"];
    $Password=$_POST["Password"];
    $ConfirmPassword=$_POST["ConfirmPassword"];
    $FullName=$_POST["FullName"];
    $Phone=$_POST["Phone"];
    $AddressDetail=$_POST["AddressDetail"];
    $TypeAcc=$_POST["TypeAcc"];

        if(($Email=="")||$Password==""||$ConfirmPassword==""||$FullName==""||$Phone==""||$AddressDetail==""||$TypeAcc=="") {
        setcookie("tbdangky","Vui lòng điền đầy đủ thông tin.",time()+(2*60),"/");
        header('Location:'.'/need_shipping/dangky.php');
        exit();
    }
    // check confirm 
    if ($Password!=$ConfirmPassword) {
        setcookie("tbdangky","Xác nhận mật khẩu sai",time()+(2*60),"/");
        setcookie("email",$Email,time()+(2*60),"/");
        setcookie("password",$Password,time()+(2*60),"/");
        setcookie("name",$FullName,time()+(2*60),"/");
        setcookie("phone",$Phone,time()+(2*60),"/");
        setcookie("AddressDetail",$AddressDetail,time()+(2*60),"/");
        header('Location:'.'/need_shipping/dangky.php');
        exit();
    }
    //Kiểm tra email
    // if (mysql_num_rows(mysql_query("SELECT email FROM tbluser WHERE email='$Email'")) > 0){
     $product=$t->executeQuery("select * from tbluser where email= '$Email'");
     if(mysqli_num_rows($product)>0)
     {
        setcookie("tbdangky","Email đã có người dùng. Vui lòng chọn Email khác",time()+(2*60),"/");
        setcookie("email",$Email,time()+(2*60),"/");
        setcookie("password",$Password,time()+(2*60),"/");
        setcookie("name",$FullName,time()+(2*60),"/");
        setcookie("phone",$Phone,time()+(2*60),"/");
        setcookie("AddressDetail",$AddressDetail,time()+(2*60),"/");
        header('Location:'.'/need_shipping/dangky.php');
        exit();
    }

    //Kiểm tra email có đúng định dạng hay không
    //^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$
    // if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $Email))
    //if (!eregi("\A[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})\z/i", $Email))
    // {
    //     setcookie("tbdangky","Email này không hợp lệ vui lòng chọn Email khác",time()+(2*60),"/");
    //     setcookie("email",$Email,time()+(2*60),"/");
    //     setcookie("password",$Password,time()+(2*60),"/");
    //     setcookie("name",$FullName,time()+(2*60),"/");
    //     setcookie("phone",$Phone,time()+(2*60),"/");
    //     setcookie("AddressDetail",$AddressDetail,time()+(2*60),"/");
    //     header('Location:'.'/need_shipping/dangky.php');
    //     exit();
    // }

    //Kiểm tra dạng nhập của tên
    // if (!preg_match("/^[a-zA-Z ]*$/", $FullName))
    // {
    //     setcookie("tbdangky","Tên không hợp lệ không hợp lệ.",time()+(2*60),"/");
    //     setcookie("email",$Email,time()+(2*60),"/");
    //     setcookie("password",$Password,time()+(2*60),"/");
    //     setcookie("name",$FullName,time()+(2*60),"/");
    //     setcookie("phone",$Phone,time()+(2*60),"/");
    //     setcookie("AddressDetail",$AddressDetail,time()+(2*60),"/");
    //     header('Location:'.'/need_shipping/dangky.php');
    //     exit();
    // }

    //Kiểm tra pass
    if(strlen($Password)<6)
    {
        setcookie("tbdangky","Mật khẩu phải lớn hơn hoặc bằng 6 ký tự.",time()+(2*60),"/");
        setcookie("email",$Email,time()+(2*60),"/");
        setcookie("password",$Password,time()+(2*60),"/");
        setcookie("name",$FullName,time()+(2*60),"/");
        setcookie("phone",$Phone,time()+(2*60),"/");
        setcookie("AddressDetail",$AddressDetail,time()+(2*60),"/");
        header('Location:'.'/need_shipping/dangky.php');
        exit();
    }
    //Kiểm tra dạng nhập vào của điện thoại
    if (!preg_match("/^\+?(84|0)(1\d{9}|9\d{8})$/",$Phone))
    {
        setcookie("tbdangky","Số điện thoại không hợp lệ.",time()+(2*60),"/");
        setcookie("email",$Email,time()+(2*60),"/");
        setcookie("password",$Password,time()+(2*60),"/");
        setcookie("name",$FullName,time()+(2*60),"/");
        setcookie("phone",$Phone,time()+(2*60),"/");
        setcookie("AddressDetail",$AddressDetail,time()+(2*60),"/");
        header('Location:'.'/need_shipping/dangky.php');
        exit();
    }
// thêm vào database
    $db->executeNonQuery("INSERT INTO tbluser(email,password,hoten,sdt,diachi,loai) VALUES ('$Email','$Password','$FullName','$Phone','$AddressDetail','$TypeAcc')");
    $t->close();
    $db->close();
    setcookie("login", $Email, time() + (24*60), "/");
    header('Location:'.'/need_shipping/index.php');
}
?>
<?php ob_flush(); ?>
<!-- Js -->
<?php require 'blocks/footer.php' ?>

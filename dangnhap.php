<?php
ob_start();
require 'data_access_helper.php';
$db=new DataAccessHelper;
$db->connect(); 
//$r=$_SERVER['HTTP_REFERER'];
?>
<?php if(isset($_COOKIE['login']))
{
    setcookie('login',"",time()-3600,"/"); 
}
?>
<?php require 'blocks/header.php' ?>
<div class="s5h-userform">
    <div class="s5h-uformbox">
        <div class="s5h-uform">

            <form class="s5h-uform-login" style="display: block;" id="login-form" method="post" action="" novalidate="novalidate">
                <input name="__RequestVerificationToken" type="hidden" value="dI9-reFYfDs9aMcl_LEwuazjqAwvEBrvjez9qr_84N7GaM0PdD4bq2ibR0AUI4wmY-YKkLGNI6I_06wDvS2BELkqCY6mIFWeq6mcTSSQaeU1">
                <input type="hidden" name="provider" id="provider" value="5ship">
                <input type="hidden" id="returnUrl">
                <h3 class="s5h-uform-title">Đăng nhập</h3>
                <p style="color:red; margin-bottom: 25px">
                    <?php
                    if(isset($_COOKIE['thongbao']))
                    {
                        echo $_COOKIE['thongbao'];
                    }
                    ?>
                </p>
                <div class="form-group has-feedback">
                    <input type="text" name="Email" class="form-control" placeholder="Tài khoản" value="<?php if (isset($_POST["Email"])){ echo $_POST["Email"];} ?>">
                    <span class="glyphicon s5h-gly-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="Password" class="form-control" placeholder="Mật khẩu" value="<?php if (isset($_POST["Password"])){ echo $_POST["Password"];} ?>">
                    <label id="password-error" class="error" for="Password"></label>
                    <span class="glyphicon s5h-gly-pass form-control-feedback"></span>
                </div>
                <!-- <p class="s5h-uform-forgetpass">
                    <a href="javascript:;" title="">Quên mật khẩu?</a>
                </p> -->
                <p style="color: red; margin-top:25px; margin-bottom: 25px">
                    <?php setcookie('thongbao',"",time()-3600,"/");
                    if(isset($_POST["btnDangNhap"]))
                    {
                    $email=$_POST["Email"];
                    $password=$_POST["Password"];
                    //Kiểm tra đăng nhập
                    $product=$db->executeQuery("select * from tbluser where email= '$email' and password='$password'"); // ' or ''='
                    $row=mysqli_fetch_assoc($product);
                      if(mysqli_num_rows($product)>0)
                      {
                            setcookie("login", $email, time() + (24*60), "/"); // 86400 = 1 day
                            setcookie('thongbao',"",time()-3600,"/");
                            header('Location:'.'/need_shipping/index.php');
                             # code...
                        }
                        else
                        {
                            echo "Sai Email hoặc Password";
                        }
                    }
                    $db->close();
                    ?>
                </p>
                <button type="submit" class="btn btn-default s5h-uform-btn s5h-uform-btn-login" name="btnDangNhap">
                    Đăng nhập
                </button>
                <button type="button" class="btn btn-default s5h-uform-btn-load" disabled="disabled">
                    <i class="fa fa-spinner"></i>bạn vui lòng chờ...
                </button>
            </form>
             <!--    <form class="s5h-uform-fpass" style="display: none;" id="forget-form" method="post" novalidate="novalidate">
                    <input name="__RequestVerificationToken" type="hidden" value="BnWbw5Ap83cEscqIspmnMLZKSw2_ygfdFxLBjHiRBCNiWE7buXee-V8dz5Gm0Qx-VmfFj3WRS9pFVAG2PXInKeQwz5BJaZLLk3bCUAju0aI1">
                    <h3 class="s5h-uform-title">Quên mật khẩu</h3>
                    <div class="form-group has-feedback">
                        <input type="text" name="email" class="form-control" placeholder="Email của bạn">
                        <span class="glyphicon s5h-gly-code form-control-feedback"></span>
                    </div>
                    <p class="s5h-uform-sendag">
                        <a href="javascript:;" title="">Quay lại đăng nhập</a>
                    </p>
                    <button type="submit" class="btn btn-default s5h-uform-btn s5h-uform-btn-forget">Lấy lại mật khẩu</button>
                    <button type="button" class="btn btn-default s5h-uform-btn-load-forget" disabled="disabled">
                        <i class="fa fa-spinner"></i>bạn vui lòng chờ...
                    </button>
                </form> -->
            </div>

            <div class="s5h-uform-reg">
                <div class="s5h-uform-regbox">
                    <h3 class="s5h-uform-regtit">Đăng ký</h3>
                    <p>Tạo ngay tài khoản tại NeedShipping để trở thành một phần của cộng đồng vận chuyển lớn nhất Việt Nam </p>
                    <p class="s5h-uform-regbtn">
                        <a class="btn" href="dangky.php" title="Đăng ký ngay">Đăng ký ngay</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php ob_flush(); ?>
    <?php require 'blocks/footer.php' ?>
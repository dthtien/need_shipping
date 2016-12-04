
<?php 
ob_start();
if(!isset($_COOKIE['login']) || $_COOKIE['login']=="")
{
    header('Location:'.'/need_shipping/dangnhap.php');
    $tb="Bạn phải đăng nhập trước";
    setcookie("thongbao",$tb, time()+2*60,"/");
}
?>
<?php require 'blocks/header.php'; ?>
<?php
require 'data_access_helper.php';
$t=new DataAccessHelper;
$t->connect(); 
$user=$_COOKIE['login'];
$product=$t->executeQuery("select * from tbluser where email = '$user' ");
$row=mysqli_fetch_assoc($product);
?>
<div class="s5h-userform">
    <div class="s5h-uformbox">
        <div class="s5h-uform">
            <form action="" method="post">
                <p style="color: red;text-align: center; margin: 25px 25px">
                    <?php
                    if(isset($_COOKIE['thongbaotaodh']))
                    {
                        echo $_COOKIE['thongbaotaodh'];
                        setcookie("thongbaotaodh","",-1,"/");
                    } 
                    ?>  
                    </p>  
                <div class="form-group has-feedback">
                    <h4 class="s5h-uform-title">Thông tin shop</h4>
                    <input type="text" class="form-control" name="ShopAddress" id="add_autocomplete" autocomplete="off" value="<?php echo $row["diachi"];  ?>">
                </div>
                <div class="form-group has-feedback">
                    <input type="text" name="ShopPhone" id="Phone" class="form-control" value="<?php echo $row["sdt"];  ?>">
                </div>
                <div>
                    <h5 class="s5h-uform-title">Thông tin người nhận</h5>
                    <input type="text" class="form-control" name="RecAddress" id="add_autocomplete" autocomplete="off" value="" placeholder="Số nhà,Đường,Quận,TP(tỉnh)">
                    <br>
                </div>
                <div class="form-group has-feedback">
                   <input type="text" name="RecPhone" id="Phone" class="form-control" placeholder="Số điện thoại">
               </div>
               <div class="form-group has-feedback">
                   <input type="text" class="form-control" name="Note" id="add_autocomplete" autocomplete="off" value="" placeholder="Ghi chú">
               </div>
               <div class="form-group has-feedback">
                   <h6 class="s5h-uform-title">Thông tin hàng hóa</h6>
                   <input type="text" class="form-control" name="NameGoods" id="add_autocomplete" autocomplete="off" value="" placeholder="Tên mặt hàng">
               </div>
               <div class="form-group has-feedback">
                <input type="Number" class="form-control" name="Number" placeholder="Cân nặng của gói hàng">
            </div>
            <div class="form-group has-feedback">
                <input type="Number" class="form-control" name="Deposit" placeholder="Tiền cọc">
            </div>
            <div class="form-group has-feedback ">
                <input type="Number" class="form-control" name="ShipMoney" placeholder="Phí ship">
            </div>

            <button name="btnDang" type="submit" class="btn btn-info btn-lg" style="padding-left: 12px;padding-right: 12px;width: 360px;height: 58px;background-color: #D93030;">Đăng</button>
            <p>&nbsp;</p>

        </form>
    </div>
    <?php
    if (isset($_POST["btnDang"])) 
    {
                # code...
// lấy dữ liệu từ browser
        $ShopAddress=$_POST["ShopAddress"];
        $ShopPhone=$_POST["ShopPhone"];
        $RecAddress=$_POST["RecAddress"];
        $RecPhone=$_POST["RecPhone"];
        $Note=$_POST["Note"];
        $NameGoods=$_POST["NameGoods"];
        $Number=$_POST["Number"];
        $Deposit=$_POST["Deposit"];
        $ShipMoney=$_POST["ShipMoney"];
//Kiểm tra dữ liệu nhập
        if($_POST["RecAddress"]==""||$_POST["RecPhone"]==""||$_POST["Note"]==""||$_POST["NameGoods"]==""||$_POST["Number"]==""||$_POST["Deposit"]==""||$_POST["ShipMoney"]=="")
        {
        setcookie("thongbaotaodh","Vui lòng điền đầy đủ thông tin",time()+2*60,"/");
        setcookie("RecAddress",$RecAddress,time()+(2*60),"/");
        setcookie("RecPhone",$RecPhone,time()+(2*60),"/");
        setcookie("Note",$Note,time()+(2*60),"/");
        setcookie("Number",$Number,time()+(2*60),"/");
        setcookie("Deposit",$Deposit,time()+(2*60),"/");
        setcookie("ShipMoney",$ShipMoney,time()+(2*60),"/");
        header('Location:'.'/need_shipping/Taodonhang.php');
        exit();
        }
         if (!preg_match("/^\+?(84|0)(1\d{9}|9\d{8})$/",$RecPhone))
        {
        setcookie("thongbaotaodh","Số điện thoại không hợp lệ.",time()+(2*60),"/");
        setcookie("RecAddress",$RecAddress,time()+(2*60),"/");
        setcookie("RecPhone",$RecPhone,time()+(2*60),"/");
        setcookie("Note",$Note,time()+(2*60),"/");
        setcookie("Number",$Number,time()+(2*60),"/");
        setcookie("Deposit",$Deposit,time()+(2*60),"/");
        setcookie("ShipMoney",$ShipMoney,time()+(2*60),"/");
        header('Location:'.'/need_shipping/Taodonhang.php');
        exit();
         }
         else
// thêm vào database
        {
        $db=new DataAccessHelper;
        $db->connect();
        $db->executeNonQuery("insert into tblbaidang (diachishop,sdtshop,diachinguoinhan,sdtnguoinhan,ghichu,tenmathang,cannang,tienung,phiship) values('$ShopAddress','$ShopPhone','$RecAddress','$RecPhone','$Note','$NameGoods',$Number,$Deposit,$ShipMoney)");
        $db->close();
        $tbtaodonhang="Đã đăng thành công";
        setcookie("thongbaotaodh",$tbtaodonhang, time()+2*60,"/");
        header('Location:'.'/need_shipping/Taodonhang.php');
    }
    }
    ?>
</div>
</div>
<?php ob_flush(); ?>
<!-- Js -->
<?php  require 'blocks/footer.php' ?>

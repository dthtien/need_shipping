<?php 
require 'data_access_helper.php'; 
?>
<?php 
//Kiểm tra đăng nhập
if(!isset($_COOKIE['login']) || $_COOKIE['login']=="")
{
	$tb="Bạn phải đăng nhập trước";
	setcookie("thongbao",$tb, time()+2*60,"/");
	header('Location:'.'/need_shipping/dangnhap.php');
}
?>
<?php
$db=new DataAccessHelper;
$db->connect(); 
?>
<?php require'blocks/header.php' ?>
<style type="text/css">
	.trang
	{
		background-color: #F24738; 
		border: none; 
		text-align: center; 
		color: white; 
		padding: 10px; 
		font-size: 12px;
	}
	.trang.hover
	{
		background-color: white;
		color: #F24738;
	}
</style>
<!--Nội dung-->
<div class="main-container">
	<div class="container">
		<div class="row">
			<!--<div style="text-align: center;">-->
			<div class="term-content">
				<h3 style="background-color: #F24738; border: none; text-align: center; color: white; padding: 10px; font-size: 12px;" role="tab" id="ui-id-1" >
					DANH SÁCH ĐƠN HÀNG
				</h3>
				<div id="accordion" class="" role="tablist">
					<?php
					//phân trang
					if(isset($_GET['page']))
					{
						$page=$_GET['page'];
					}
					else {
					$page =0;
					}
					$db=new DataAccessHelper;
					$db->connect(); 
					$product=$db->executeQuery("select * from tblbaidang "); 
					$r=mysqli_num_rows($product); //số tin hiện có
					$st=$r/5;// st số trang
					$offset=$page*5;// offset vi trí tiếp theo để lấy tin
					$res=$db->executeQuery("select * from tblbaidang  order by id DESC limit ".$offset.",5 ");
					if($r>0)
					{
						while($row=mysqli_fetch_assoc($res))
						{
							$data= new DataAccessHelper;
							$data->connect();
							$cot=mysqli_fetch_assoc($data->executeQuery("select * from tbluser where id=".$row["id_shop"]." "));
							?>
							<div class="text-background feed" style=" margin-top: 25px; margin-bottom: 10px;">
								<h3>
								<?php  
								$id=$cot["id"];
								$ten=$cot["hoten"];
								echo "<div id='infinite-posts'><a style='text-decoration: none; color:#F24738' href='thongtin.php?id={$id}'>".$ten."</a></div>";
									?>
									</h3>
									<br>
								<p style="font-size: 14px; word-wrap: break-word;">
									Địa chỉ lấy hàng: <?php echo $row["diachishop"]."<br>" ?> 
									Số điện thoại lấy hàng: <?php echo $row["sdtshop"]."<br>"?>
									Địa chỉ nhận hàng: <?php echo $row["diachinguoinhan"]."<br>"?>
									Số điện thoại nhận hàng: <?php echo $row["sdtnguoinhan"]."<br>"?>
									Tên mặt hàng:  <?php echo $row["tenmathang"]."<br>"?>
									Khối lượng (kg): <?php echo $row["cannang"]."<br>"?>
									Tiền ứng: <?php echo $row["tienung"]."<br>"?>
									Phí Ship: <?php echo $row["phiship"]."<br>"?>
								</p>
							</div>
							<?php
						}
						$db->close();
					} 
					?>
					<!-- <div class="feeds-buttons">
					<a class="linkmore btn btn-sm btn-pink" id="a" style="cursor: pointer;">Xem thêm</a>
				</div> -->
			</div>


			<?php
			if($offset<$r-4)
			{
				echo "<div id='infinite-posts styl='text-align: center'>";
				$p=$page+1;
				if($page>0)
				{
					$pre=$page-1;
					echo "<a style='text-decoration: none; color:white; background-color: #F24738' id='view-more' class='btn btn-default' href='donhang.php?page={$pre}'>Prev</a>";
				}
				echo "<a style='text-decoration: none; color:white; background-color: #F24738' id='view-more' class='btn btn-default' href='donhang.php?page={$p}'>Next</a>";
				echo "</div>";
			}
			?>

		</div>
	</div>
	</div> 
</div>
<!--footer-->
<?php require 'blocks/footer.php' ?>
<!-- <script type="text/javascript">
	$(function() {
		$('#view-more').click(function(e) {
			e.preventDefault();
				nextUrl = $(this).attr('href'); // donhang.php?page=x
				$.ajax({
					url: nextUrl,
					success: function(result){
						postHtml = $(result).find('#accordion').html();
						$('#accordion').append(postHtml);
					}
				});
			});
	});
</script> -->

						<?php
						ob_start(); 
						require 'blocks/header.php'; ?>
						<?php
						require 'data_access_helper.php';
						$db=new DataAccessHelper;
						$db->connect(); 
						//$r=$_SERVER['HTTP_REFERER'];
						if(!isset($_COOKIE['login']) || $_COOKIE['login']=="")
						{
							$tb="Bạn phải đăng nhập trước";
							setcookie("thongbao",$tb, time()+2*60,"/");
							header('Location:'.'/need_shipping/dangnhap.php');
						}
						?>
						<?php
						$user=$_COOKIE['login'];
						$product=$db->executeQuery("select * from tbluser where email = '$user'  ");
						$row=mysqli_fetch_assoc($product);
						?>
						<style type="text/css">
							#btn
							{
								padding-left: 12px;
								padding-right: 12px;
								width: 360px;
								height: 58px;
								background-color: #D93030;
							}
						</style>
						<?php require 'blocks/header.php'; ?>
						<div  class="s5h-userform">
						<div class="s5h-uformbox">
							<div class="s5h-uform">
								<form action="" method="post">
									<h3 style="text-align: center;" class="s5h-uform-title">Đổi Mật Khẩu</h3>
									<p style="color: red"><i>
										<?php 
										if(isset($_COOKIE['doimk'])) 
										{ 
											echo $_COOKIE['doimk']; 
											setcookie('doimk',"",-1,"/");

										} 
										?>
									</i></p>
									<div class="form-group has-feedback">
										<p class="s5h-uform-title">Email:</p>
										<input type="text" class="form-control" style=""  name="email" value="<?php echo $row["email"]; ?>" readonly>
									</div>
									<div class="form-group has-feedback">
										<p class="s5h-uform-title">Mật khẩu mới:</p>
										<input type="password" class="form-control"  name="newPass" value="" >
									</div>
									<div class="form-group has-feedback">
										<p class="s5h-uform-title">Nhập lại mật khẩu: </p>
										<input type="text" class="form-control" name="corfnewpass" value="">
									</div>
									<button id="btn" name="btncapnhat" type="submit" class="btn btn-info btn-lg">Cập nhật</button>
								</form>
							</div>
						</div>
					</div>
					<?php
					if(isset($_POST["btncapnhat"]))
					{
						$newPass=$_POST["newPass"];
						$corfnewpass=$_POST["corfnewpass"];
						$login=$_COOKIE["login"];

						//Kiểm tra xác nhận mật khẩu
						if($newPass!=$corfnewpass)
						{
							setcookie("doimk","Cập nhật mật khẩu sai.",time()+(2*60),"/");
							header('Location:'.'/need_shipping/doimatkhau.php');
							exit();
						}

						//Kiểm tra nhập đầy đủ thông tin
						if($newPass==""||$corfnewpass=="")
						{
							setcookie("doimk","Mật khẩu không được để trống.",time()+(2*60),"/");
							header('Location:'.'/need_shipping/doimatkhau.php');
							exit();
						}
						// $uppercase = preg_match('@[A-Z]@', $newPass);
						// $lowercase = preg_match('@[a-z]@', $newPass);
						// $number    = preg_match('@[0-9]@', $newPass);
						// if(!$uppercase || !$lowercase || !$number || strlen($newPass) < 6) {
						//  setcookie("doimk","Mật khẩu không được để ký tự đặc biệt và phải lớn hơn 6 ký tự.",time()+(2*60),"/");
						//  header('Location:'.'/need_shipping/doimatkhau.php');
						// exit();
						// }

						//Kiểm tra mật khẩu
						 if(strlen($Password)<6)
   						 {
   						 	setcookie("doimk","Mật khẩu không được để ký tự đặc biệt và phải lớn hơn 6 ký tự.",time()+(2*60),"/");
						    header('Location:'.'/need_shipping/doimatkhau.php');
						    exit();
   						 }
						$temp=new DataAccessHelper;
						$temp->connect();
						$data=$temp->executeQuery("select id from tbluser where email= '$login'");
						$row=mysqli_fetch_assoc($data);
						$temp->close();
						$id=$row["id"];
						$ud=new DataAccessHelper;
						$ud->connect();
						$ud->executeNonQuery("update tbluser set password='$newPass' where id=$id ");
						$ud->close();
						$db->close();
						setcookie('doimk','Đổi mật khẩu thành công', time()+(2*60),"/");
						header('Location:'.'/need_shipping/doimatkhau.php');
						exit();
					} 
					?>
					<?php require 'blocks/footer.php'; ?>
					<?php ob_flush(); ?>
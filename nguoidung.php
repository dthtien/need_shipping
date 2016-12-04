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
						<script>
							function hien()
							{
								if(document.getElementById("btn").style.display=='none')
								{
									document.getElementById("btn").style.display='';
									document.getElementById("show").readOnly=false;
									document.getElementById("show1").readOnly=false;
									document.getElementById("show2").readOnly=false;
									document.getElementById("show3").readOnly=false;
									// document.getElementById("show").style.display==none;
								}
							}
							</script>
							<?php require 'blocks/header.php'; ?>
							<div id="frmtt" class="s5h-userform">
								<div class="s5h-uformbox">
									<div class="s5h-uform">
										<?php
										$user=$_COOKIE['login'];
										$product=$db->executeQuery("select * from tbluser where email = '$user'  ");
										$row=mysqli_fetch_assoc($product);
										?>
										<form action="" method="post">
										<!-- php -->
										<p style="color: red"><i>
										<?php 
										if(isset($_COOKIE['loi'])) 
										{ 
											echo $_COOKIE['loi']; 
											setcookie('loi',"",-1,"/");

										} 
										?>
											</i></p>
											<div class="form-group has-feedback">
												<p class="s5h-uform-title">Họ tên:</p>
													<input type="text" id="show" class="form-control" style="" title="Click để chỉnh sửa thông tin" onclick="hien()" name="Name" value="<?php echo $row["hoten"]; ?>" readonly>
												</div>
												<div class="form-group has-feedback">
													<p class="s5h-uform-title">Số Điện Thoại:</p>
														<input type="text" id="show1" title="Click để chỉnh sửa thông tin" class="form-control" onclick="hien()" name="Phone" value="<?php echo $row["sdt"]; ?>" readonly>
													</div>
													<div class="form-group has-feedback">
														<p class="s5h-uform-title">Email: </p>
															<input type="text" class="form-control" title="Click để chỉnh sửa thông tin" id="show2" onclick="hien()"  name="Email" value="<?php echo $row["email"]; ?>" readonly>
														</div>
														<div class="form-group has-feedback">
															<p class="s5h-uform-title">Địa chỉ: </p>
																<input type="text" class="form-control" title="Click để chỉnh sửa thông tin" id="show3" onclick="hien()"  name="Address" value="<?php echo $row["diachi"]; ?>" readonly>
															</div>
															<div class="form-group has-feedback">
															<p class="s5h-uform-title">Bạn là: </p>
																<input type="text" class="form-control" title="Click để chỉnh sửa thông tin" id="show3" onclick="hien()"  name="Address" value="<?php echo $row["loai"]; ?>" readonly>
															</div>
															<p class="s5h-uform-forgetpass">
                    										<a href="doimatkhau.php" title="">Đổi mật khẩu?</a>
                											</p>
															<button id="btn" name="btnluu" style="display: none;" type="submit" class="btn btn-info btn-lg">Lưu</button>
														</form>
													</div>
												</div>
											</div>
											<?php 
											 if(isset($_POST["btnluu"]))
											 {
											 	$name = $_POST["Name"];
												$phone = $_POST["Phone"];
												$email = $_POST["Email"];
												$addr = $_POST["Address"];
    											$id=$row["id"];
											 	if($_POST["Name"]==""||$_POST["Phone"]==""||$_POST["Email"]==""||$_POST["Address"]=="")
											 	{
											 		setcookie('loi','Vui lòng điền đầy đủ thông tin', time()+(2*60),"/");
    												header('Location:'.'/need_shipping/nguoidung.php');
    												exit();
											 	}
											 	// if (!preg_match("/^[a-zA-Z ]*$/", $_POST["Name"]))
											 	// {
											 	// 	setcookie('loi','Tên không hợp lệ', time()+2*60,"/");
    									// 			header('Location:'.'/need_shipping/nguoidung.php');
    									// 			exit();
											 	// }
											 	if (!preg_match("/^\+?(84|0)(1\d{9}|9\d{8})$/",$_POST["Phone"]))
    											{
    												setcookie('loi','Số điện thoại không đúng', time()+(2*60),"/");
    												header('Location:'.'/need_shipping/nguoidung.php');
    												exit();
    											}
    											$t=new DataAccessHelper;
    											$t->connect();
    											$product=$t->executeQuery("select * from tbluser where email= '$email'");
    											if($email!=$_COOKIE['login'])
    											{
     											if(mysqli_num_rows($product)>0)
     												{
        												setcookie("loi","Email đã có người dùng. Vui lòng chọn Email khác",time()+(2*60),"/");
        												header('Location:'.'/need_shipping/nguoidung.php');
        											}
        										$t->close();
    											}
    											$ud=new DataAccessHelper;
        										$ud->connect();
        										$ud->executeNonQuery("update tbluser set hoten='$name', sdt='$phone', email='$email',diachi='$addr' where id=$id ");
        										$ud->close();
        										$db->close();
        										setcookie("login", $email, time() + (24*60), "/");
        										setcookie('loi','Đổi thành công', time()+(2*60),"/");
    											header('Location:'.'/need_shipping/nguoidung.php');
    											exit();
											 }
											 ?>
											<?php require 'blocks/footer.php'; ?>
											<?php ob_flush(); ?>
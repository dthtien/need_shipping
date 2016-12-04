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
							<?php
							if(isset($_GET['id']))
							{
							$id=$_GET['id'];
							}
							  ?>
							<?php require 'blocks/header.php'; ?>
							<div id="frmtt" class="s5h-userform">
								<div class="s5h-uformbox">
									<div class="s5h-uform">
										<?php
										$product=$db->executeQuery("select * from tbluser where id = '$id'  ");
										$row=mysqli_fetch_assoc($product);
										?>
										<form action="" method="post">
										<!-- php -->
										<p style="color: red"><i>
										
											</i></p>
											<div class="form-group has-feedback">
												<p class="s5h-uform-title">Họ tên: </p>
													<input type="text" id="show" class="form-control" style="" title="Click để chỉnh sửa thông tin"  name="Name" value="<?php echo $row["hoten"]; ?>" readonly>
												</div>
												<div class="form-group has-feedback">
													<p class="s5h-uform-title">Số Điện Thoại: </p>
														<input type="text" id="show1" title="Click để chỉnh sửa thông tin" class="form-control"  name="Phone" value="<?php echo $row["sdt"]; ?>" readonly>
													</div>
													<div class="form-group has-feedback">
														<p class="s5h-uform-title">Email: </p>
															<input type="text" class="form-control" title="Click để chỉnh sửa thông tin" id="show2"   name="Email" value="<?php echo $row["email"]; ?>" readonly>
														</div>
														<div class="form-group has-feedback">
															<p class="s5h-uform-title">Địa chỉ: </p>
																<input type="text" class="form-control" title="Click để chỉnh sửa thông tin" id="show3"   name="Address" value="<?php echo $row["diachi"]; ?>" readonly>
															</div>
															<div class="form-group has-feedback">
															<p class="s5h-uform-title"> Là : </p>
																<input type="text" class="form-control" title="Click để chỉnh sửa thông tin" id="show3"   name="Address" value="<?php echo $row["loai"]; ?>" readonly>
															</div>
															<div class="form-group has-feedback">
															<?php
															$cot=mysqli_fetch_assoc($db->executeQuery("SELECT COUNT(id) FROM tblbaidang WHERE id_shop= '$id' "));
															 ?>
															<p class="s5h-uform-title"> Số bài đăng: </p>
																<input type="text" class="form-control" title="Click để chỉnh sửa thông tin" id="show3"   name="Address" value="<?php echo $cot["COUNT(id)"]; ?>" readonly>
															</div>
														</form>
													</div>
												</div>
											</div>
											<?php require 'blocks/footer.php'; ?>
											<?php ob_flush(); ?>
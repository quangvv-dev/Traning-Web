<?php include 'dbconnect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gentelella Alela! | </title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

	<!-- Custom Thêm Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<?php include 'menu.php' ?>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Sửa nhân viên <small>sub title</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#">Settings 1</a>
												</li>
												<li><a href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">

									<form class="form-horizontal form-label-left" novalidate action="../api/api.php/sua_users?id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
									<?php 
										$id=$_GET['id'];
										$sql="select * from users where id='$id'";
										$result = mysqli_query($con,$sql);
										while ($row = mysqli_fetch_array($result)) { 
											?>
										
										<!-- div get image_name in db -->
										<div class="hidden"><input type="text" value="<?php echo $row['image'];?>" name="anh"></div>
										<div class="hidden"><input type="text" value="<?php echo $row['gender'];?>" name="gt"></div>

										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Họ tên <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="name" type="text" required="required" value="<?php echo $row['name'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="email" type="email" required="required" value="<?php echo $row['email'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Email cá nhân <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="email_personal" type="email" required="required"  value="<?php echo $row['email_personal'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Pasword <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="password" type="password" required="required" value="<?php echo $row['password'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">remember_token <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="remember_token" type="password" required="required" value="<?php echo $row['remember_token'];?>">
											</div>
										</div>
										
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="image" type="file" >
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Giới tính <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<label class="radio-inline">
													<input name="gender" type="radio" value="0" <?php if($row['gender']==0) echo "checked"; ?>>Nam
												</label>
												<label class="radio-inline">
													<input name="gender" type="radio" value="1" <?php if($row['gender']==1) echo "checked"; ?>>Nữ
												</label>
												<label class="radio-inline">
													<input name="gender" type="radio" value="2" <?php if($row['gender']==2) echo "checked"; ?>>Không xác định
												</label>
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày sinh <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="date_of_birth" type="date" required="required" value="<?php echo $row['date_of_birth'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">CMT <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="identify_id" type="number" required="required" value="<?php echo $row['identify_id'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">SDT <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="phone_number" type="number" required="required" value="<?php echo $row['phone_number'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ hiện tại <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="current_address" type="text" required="required" value="<?php echo $row['current_address'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ thường trú <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="permanent_address" type="text" required="required" value="<?php echo $row['permanent_address'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Trường học <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="graduate_from" type="text" required="required" value="<?php echo $row['graduate_from'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Lương <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="salary" type="number" required="required" value="<?php echo $row['salary'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">STK <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="bank_account_number" type="text" required="required" value="<?php echo $row['bank_account_number'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Sở thích 
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="hobby" type="text"  value="<?php echo $row['hobby'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" >GT gia đình 
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="family_description" type="text"  value="<?php echo $row['family_description'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" >Kỹ năng 
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="language_skills" type="text"  value="<?php echo $row['language_skills'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" >Ngày nghỉ còn lại <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="leave_days" type="text" required="required" value="<?php echo $row['leave_days'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" >role_id <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="role_id" type="text" required="required" value="<?php echo $row['role_id'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" >team_id <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="team_id" type="text" required="required" value="<?php echo $row['team_id'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" >Tình trạng <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input  class="form-control col-md-7 col-xs-12" name="status" type="text" required="required" value="<?php echo $row['status'] ?>">
											</div>
										</div>
										<?php } ?>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-6 col-md-offset-3">
												<button type="submit" class="btn btn-primary">Cancel</button>
												<button id="send" type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>

	<!-- jQuery -->
	<script src="../vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="../vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="../vendors/nprogress/nprogress.js"></script>
	<!-- validator -->
	<script src="../vendors/validator/validator.js"></script>

	<!-- Custom Thêm Scripts -->
	<script src="../build/js/custom.min.js"></script>

</body>
</html>
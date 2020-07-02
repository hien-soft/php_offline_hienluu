<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	require_once "html/head.php";
	?>
</head>
<body>
<?php
		if(isset($_POST['submit'])){
			$uername = $_POST['username'];
			$password = $_POST['password'];
			if($uername == "admin" && $password == "password"){
				header('Location: admin.php');
				exit;
			}
			if($uername == "member" && $password == "123456"){
				header('Location: member.php');
				exit;
				}	
			$msg = "Bạn không có quyền truy cập";
		}
	?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					<!-- Account Login -->
					Thông Tin Đăng Nhập
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Tên đăng nhập">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Mật Khẩu">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn type="submit" name="submit">
							<!-- Login -->
							Đăng nhập
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<?php
	require_once "html/script.php";
	?>
</body>
</html>
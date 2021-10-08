<?php
	ob_start();
	ob_clean();
	session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
<title>Task</title>
</head>

<body>
	
	
				<form class="login-wrapper" action="#" method="post">
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" class="form-control" name="email" placeholder="" required="">
				</div>
			</br>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" placeholder="" required="">
					</div>
					<button type="submit" name="btn_login" class="btn submit mt-4">Login</button>
					<p class="text-center mt-5">
						<a href="register.php"> Don't have an Account?Register Now</a>
					</p>
				</form>
				<?php
					include("connection.php");
					if(isset($_POST['btn_login']))
					{
						$email = mysqli_real_escape_string($con, $_POST['email']);
						$password = mysqli_real_escape_string($con, $_POST['password']);

						$sql = mysqli_query($con, "SELECT * FROM `register` WHERE email = '$email' AND password = '$password'") or die(mysqli_error($con));
						$row = mysqli_fetch_array($sql);

						if($row)
						{
							$_SESSION['usd_email'] = $row['email'];
							header("location:home.php?logged_in");
						}
						else
						{
							echo '<h4 style="color:red; text-align:center;">Invalid Email and Password</h4>';
						}
					}
				?>
			</div>
		</div>
	</section>
	</body>

</html>
	
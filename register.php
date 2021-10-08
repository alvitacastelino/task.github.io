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
	
				<form class="login-wrapper" action="reg_val.php" method="post">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" class="form-control" name="name" placeholder="" required="">
					</div>
				</br>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" placeholder="" required="">
					</div>
						</br>
					<div class="form-group">
						<label>Phone</label>
						<input type="phone" class="form-control" name="phone" placeholder="" required="">
					</div>
						</br>
					<div class="form-group">
						<label class="mb-2">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="" required="">
					</div>
						</br>
					
					<button type="submit" name="btn_register" class="btn submit mt-4">Register</button>
					
				
					</p>
				</form>
			</div>
		</div>
	</section>
	

	
</body>

</html>
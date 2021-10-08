<?php
	include("connection.php");

	if(isset($_POST['btn_register']))
	{
		$name = mysqli_real_escape_string($con, $_POST['name']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$phone = mysqli_real_escape_string($con, $_POST['phone']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$query = mysqli_query($con, "INSERT INTO `register`(`name`, `email`, `phone`, `password`) VALUES ('$name', '$email', '$phone', '$password')") or die(mysqli_error($con));
		if($query)
		{
			header("location:index.php?ins_success&&data=User");
		}
	}
?>
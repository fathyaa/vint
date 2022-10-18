<?php 
include 'connection.php';

	if(isset($_POST['register'])){

		$name = $_POST['name'];
		$username = strtolower($_POST['username']);
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmpass = $_POST['confirmpass'];
		$post = "no";

		$check_email = mysqli_query($conn, "SELECT * from users WHERE user_email = '$email'");
		$result_email = mysqli_num_rows($check_email);

		if ($result_email>0){
			echo "<script> alert('Email is used.'); </script>";
			echo "<script> location = 'landing-page.php'; </script>";
			exit;
		}

		$check_username = mysqli_query($conn, "SELECT * from users WHERE user_name = '$username'");
		$result_username = mysqli_num_rows($check_username);

		if ($result_username>0){
			echo "<script> alert('Username is used.'); </script>";
			echo "<script> location ='landing-page.php'; </script>";
			exit;
		}

		if ($password !== $confirmpass ){
			echo "<script> alert('The password is not same. Please try again.'); </script>";
			echo "<script> location = 'landing-page.php'; </script>";
			exit;
		}

		$password = password_hash($password, PASSWORD_DEFAULT);

		$query = "INSERT INTO users VALUES ('','$name','$username','$email', '$password', 'default-pp.png', 'n/a', 'n/a', 'NOW()', '$post')";

		$result = mysqli_query($conn, $query);

		if ($result==true){
			echo "<script> alert('Welcome there!'); </script>";
			echo "<script> location = 'home-user.php'; </script>";
		} else{
			echo "<script> alert('Registration failed.'); </script>";
			echo "<script> location ='landing-page.php'; </script>";
		}

	}
 ?>
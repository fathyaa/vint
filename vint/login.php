<?php
session_start();
include 'connection.php';

	if (isset($_POST['login'])){

	  $username = $_POST['username'];
	  $password = $_POST['password'];

	  $query = "SELECT * FROM users WHERE user_name = '$username'";

	  $result = mysqli_query($conn, $query);

	  if(mysqli_num_rows($result) === 1){

	  	$row = mysqli_fetch_assoc($result);

	  	// if (password_verify($password, $row['user_pass'])){ 
		   if ($password === $row['user_pass']){ //langsung login pakai akun dari database. jika registrasi dulu, buka tag kode line 18 dan tutup line 19.
	  		$_SESSION["login"] = true;
	  		$_SESSION["user_name"] = $username;
	  		$user = $_SESSION["user_name"];
	  		echo "<script> alert('Log in succeed. Welcome $user!'); </script>";
	   		echo "<script> location = 'home-user.php'; </script>";
		    exit;
	  	}

	  } else {
	    echo "<script> alert('Log in failed. Please try again.'); </script>";
	    echo "<script> location = 'landing-page.php'; </script>";
	  }
	}

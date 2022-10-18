<?php 
session_start();
include 'navbar.php';

if(isset($_GET['product_id'])){
	
$product_id = $_GET['product_id'];
$sql  = mysqli_query($conn, "SELECT * from products where product_id='$product_id'");
$key  = mysqli_fetch_array($sql);

$userid = $key['user_id'];
$username = $key['user_name'];

$query = "INSERT INTO cart VALUES '', '$product_id', '$userid', '$username'";
$result = mysqli_query($conn, $query);

if ($result==true){
	echo "<script> alert('Added to cart.'); </script>";
    echo "<script>window.open('cart.php?u_id=$user_id' , '_self')</script>";
}
}

 ?>
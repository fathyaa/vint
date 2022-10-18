<?php   
include 'connection.php';

if(isset($_SESSION['user_name'])){

  $user = $_SESSION['user_name'];  

  $get_user = mysqli_query($conn, "SELECT * from users WHERE user_name = '$user'");
  $row = mysqli_fetch_array($get_user);

      $user_id = $row['user_id'];
      $user_fullname = $row['user_fullname'];
      $user_name = $row['user_name'];
      $user_email = $row['user_email'];
      $user_pass = $row['user_pass'];
      $user_photo = $row['user_photo'];
      $user_bio = $row['user_bio'];
      $user_region = $row['user_region'];
      $user_reg_date = $row['user_reg_date'];

      // $user_posts = mysqli_query($conn, "SELECT * from products WHERE user_id = '$user_id'");
      // $post = mysqli_num_rows($user_posts);  
}
?>
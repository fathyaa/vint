<?php session_start();
include 'navbar.php';
?>

 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Edit Profile
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="landing-page.php">
          <b>VINT</b> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ml-4">
            <a class="btn btn-primary btn-fab btn-round" href='cart.php?<?php echo "u_id=$user_id" ?>'>
             <i class="material-icons">shopping_cart</i>
            </a>
          </li>
          <li class="nav-item ml-4">
            <a class="btn btn-primary btn-fab btn-round" href='receipt.php?<?php echo "u_id=$user_id" ?>'>
             <i class="material-icons">text_snippet</i>
            </a>
          </li>
          <li class="dropdown nav-item ml-4">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">account_circle</i> <?= $user_name ?>
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href='profile-page.php?<?php echo "u_id=$user_id" ?>' class="dropdown-item">
                <i class="material-icons">person</i> Profile
              </a>
              <a href='selling.php?<?php echo "u_id=$user_id" ?>' class="dropdown-item">
                <i class="material-icons">storefront</i> Selling
              </a>
              <a href="logout.php" class="dropdown-item">
                <i class="material-icons">remove_circle_outline</i> Log out
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Edit Profile</h4>
              </div>
              <div class="card-body">
                <form method="post" action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <i class="material-icons">attach_file</i>
                    <label for="profilephoto">Input new profile photo</label>
                    <input type="file" class="form-control" id="profilephoto" name="profilephoto">
                    <button type="submit" class="btn btn-primary btn-sm" name="savephoto">Save Photo</button>
                  </div>
                </form>

                <?php 
                  if (isset($_POST['savephoto'])){

                    $target_dir    = "users/";
                    $file_name     = basename($_FILES["profilephoto"]["name"]);
                    $target_file   = $target_dir . $file_name;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    if (move_uploaded_file($_FILES["profilephoto"]["tmp_name"],$target_file)){

                    $sql = "UPDATE users SET user_photo = '$target_file' WHERE user_id = '$user_id'";
                    $result = mysqli_query($conn, $sql);

                    if ($result==true) {
                      echo "<script> alert('Photo profile updated.'); </script>";
                      echo "<script>window.open('profile-page.php?u_id=$user_id' , '_self')</script>";
                    } else {
                      echo "<script> alert('Edit failed.'); </script>";
                    }

                  } else {
                      echo "<script> alert('Photo was not added to folder.'); </script";
                  }
                  }
                ?>

                <form method="post" action="">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user_fullname ?>">
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $user_name ?>">
                  </div>
                  <div class="form-group">
                    <label for="region">Region</label>
                    <input type="text" class="form-control" id="region" name="region" value="<?= $user_region ?>">
                  </div>
                  <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea class="form-control" id="bio" rows="3" name="bio"><?= $user_bio ?></textarea>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="profile-page.php?<?php echo "u_id=$user_id" ?>">Close</a></button>
                <button type="submit" class="btn btn-primary" name="saveprofile">Save changes</button>
              </div>
               </form>

               <?php 
                if(isset($_POST['saveprofile'])){

                  $name = $_POST['name'];
                  $username = $_POST['username'];
                  $region = $_POST['region'];
                  $bio = $_POST['bio'];

                  $sql = "UPDATE users SET user_fullname='$name', user_name='$username', user_region='$region', user_bio='$bio' where user_id='$user_id'";

                  $result = mysqli_query($conn, $sql);

                  if ($result==true){
                    echo "<script> alert('Profile updated.'); </script>";
                    echo "<script>window.open('profile-page.php?u_id=$user_id' , '_self')</script>";
                  }
                }
              ?>

          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li>
              <a href="https://www.creative-tim.com/">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/presentation">
                About Us
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/blog">
                Blog
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license">
                Licenses
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
</body>

</html>
<?php session_start();
include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Profile
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

<body class="profile-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="home-user.php">
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
          <li class="nav-item">
            <form class="form-inline ml-auto">
              <div class="form-group has-black">
                <input type="text" class="form-control" placeholder="Search">
              </div>
                <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">
                  <i class="material-icons">search</i>
                </button>
            </form>
          </li>
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
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/examples/profile.jpeg');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <?php echo "<img src='$user_photo' alt='Circle Image' class='img-raised rounded-circle img-fluid'>"?>
              </div>
              <div class="name">
                <h3 class="title"><?= $user_fullname ?></h3>
                <h6>@<?= $user_name ?></h6>
                <a class="description text-center"><i class="material-icons">location_on</i> <?= $user_region ?></a>
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
          <p><?= $user_bio ?></p>
        </div>
        <center><a class="btn btn-round btn-raised" href='editprofile.php?<?php echo "u_id=$user_id" ?>'><i class="material-icons">settings</i> Edit Profile</a>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#selling" role="tab" data-toggle="tab">
                    <i class="material-icons">storefront</i> Selling
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#liked" role="tab" data-toggle="tab">
                    <i class="material-icons">favorite</i> Liked
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="selling">
            <div class="row">
            <?php 
                $sql  = mysqli_query($conn, "SELECT * from products where user_id='$user_id'");
                while ($row  = mysqli_fetch_array($sql)) : 
                $product_id = $row['product_id'];
                $product_photo = $row['product_photo1'];
            ?>
              <div class="col-md-3 mx-auto">
                <div class="card" style="width: 15rem;">
                    <?php echo "<img src='$product_photo' rel='nofollow' alt='Card image cap' class='card-img-top mb-1'>"?>
                  <div class="card-body">
                    <h4 class="title mt-1 mb-1"><?= $row['product_title']; ?></h4>
                    <p class="card-text"><?= 'Rp. '.number_format($row['product_price']).',00'; ?></p>
                      <a class="btn btn-primary btn-fab btn-round" href='editproduct.php?product_id=<?php echo $row["product_id"]; ?>'><i class="material-icons">create</i></a>
                  </div>
                </div>
              </div>
              <?php endwhile ?>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="liked">
            <div class="row">
              <div class="col-md-3 mx-auto">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="../assets/img/faces/marc.jpg" rel="nofollow" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Price</p>
                    <button class="btn btn-primary btn-fab btn-round">
                     <i class="material-icons">favorite</i>
                    </button>
                    <button class="btn btn-primary btn-fab btn-round">
                     <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer footer-default">
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
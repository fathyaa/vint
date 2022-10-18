<?php 
session_start();
include 'navbar.php';

$product_id = $_GET['product_id'];
$sql  = mysqli_query($conn, "SELECT * from products where product_id='$product_id'");
$row  = mysqli_fetch_array($sql);

$user_id = $row['user_id'];
$user_name = $row['user_name'];
$product_photo1 = $row['product_photo1'];
$product_photo2 = $row['product_photo2'];
$product_photo3 = $row['product_photo3'];
$product_title = $row['product_title'];
$product_desc = $row['product_desc'];
$product_price = $row['product_price'];
$product_size = $row['product_size'];
$product_brand = $row['product_brand'];
$product_condition = $row['product_condition'];
$product_category = $row['product_category'];

 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Cart
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
              <i class="material-icons">account_circle</i>
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
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/examples/cart.jpeg');"></div>
  <div class="main main-raised">
      <div class="container">
        <div class="section">
          <div class="row">
            <div class="col-md-5 mr-auto ml-1">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <?php echo "<img src='$product_photo1' alt='First slide' class='d-block w-100'>"?>
                  </div>
                  <div class="carousel-item">
                    <?php echo "<img src='$product_photo2' alt='First slide' class='d-block w-100'>"?>
                  </div>
                  <div class="carousel-item">
                    <?php echo "<img src='$product_photo3' alt='First slide' class='d-block w-100'>"?>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col-md-5 mr-auto ml-auto">
              <button class="btn btn-primary btn-fab btn-round mr-3"><i class="material-icons">favorite</i></button> PRELOVED BY <a href='profile-user.php?<?php echo "username=$user_name" ?>'> <?=$user_name?></a>
              <h1 class="title"><?=$product_title?></h1> 
              <hr>  
              <p><?=$product_desc?></p>
              <hr>  
              <b>Price</b> : <?= 'Rp. '.number_format($row['product_price']).',00'; ?>
              <hr>  
              <b>Size</b> : <?=$product_size?>
              <hr>  
              <b>Brand</b> :<?=$product_brand?>
              <hr>
              <b>Condition</b> : <?=$product_condition?>
              <hr>  
              <b>Category</b> : <?=$product_category?>
              <br> 
              <form method="post" action="">  
              <input type="hidden" name="product_id" value="<?= $product_id ?>">
              <input type="hidden" name="user_id" value="<?= $user_id ?>">
              <input type="hidden" name="user_name" value="<?= $user_name ?>">
              <center><button type="submit" name="addtocart" class="btn btn-primary btn-round">ADD TO CART</button></center>
              </form>
              <?php   

              if(isset($_POST['addtocart'])){

              $product_id = $_POST['product_id'];
              $user_id = $_POST['user_id'];
              $user_name = $_POST['user_name'];
  
              $query = "INSERT INTO cart VALUES '', '$product_id', '$user_id', '$user_name'";
              $result = mysqli_query($conn, $query);

              if ($result==true){
                echo "<script> alert('Added to cart.'); </script>";
                  echo "<script>window.open('cart.php?u_id=$user_id' , '_self')</script>";
              }
              }

               ?>
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
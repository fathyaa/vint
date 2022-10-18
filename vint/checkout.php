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
              <h1 class="title">Checkout form</h1>

              <table>
                <tr>  
                  <td><?php echo "<img src='$product_photo1' alt='Rounded Image' class='img-fluid rounded' width='150px' height='150px'>"?></td>
                    <td></td><td></td><td></td><td></td>
                   <td class="title">
                      <?= $product_title ?><br> 
                      BY <?= $user_name ?><br>  
                      <?= $product_size ?>
                  </td>
                </tr>
              </table>
              <br>  
              <form method="post" action="">  
                <div class="form-group">
                  <label for="adress">Adress</label>
                  <input type="email" class="form-control" id="adress" placeholder="Write your adress...">
                </div>
                <div class="form-group">
                  <label for="payment">Payment method</label>
                  <select class="form-control selectpicker" data-style="btn btn-link" id="delivery">
                    <option>BCA</option>
                    <option>BNI</option>
                    <option>DANA</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="delivery">Payment method</label>
                  <select class="form-control selectpicker" data-style="btn btn-link" id="delivery">
                    <option>JNE</option>
                    <option>JNT</option>
                    <option>Sicepat</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary" name="Checkout">Continue</button>
              </form>
            </div>
            <div class="col-md-5 mr-auto ml-auto">
              <h3 class="title">Payment Information</h3>
              <b>Product Price :</b> <?= 'Rp. '.number_format($row['product_price']).',00'; ?>
              <hr>  
              <b>Delivery fee : </b>Rp. 12.000,00
              <hr>  
              <b>Total Payment : Rp. 92.000,00</b>
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
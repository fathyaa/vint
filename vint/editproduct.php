<?php session_start();
include 'navbar.php';

$product_id = $_GET['product_id'];
$sql  = mysqli_query($conn, "SELECT * from products where product_id='$product_id'");
$row  = mysqli_fetch_array($sql);

$user_id = $row['user_id'];
$user_name = $row['user_name'];
$product_photo1 = $row['product_photo1'];
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
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/examples/cart.jpeg');"></div>
  <div class="main main-raised">
      <div class="container">
        <div class="section">
          <h1 class="title">Edit Product</h1>

            <form class="form" method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                      <i class="material-icons">attach_file</i>
                      <label for="productphoto2">Input new product photo 2</label>
                      <input type="file" class="form-control" id="productphoto2" name="productphoto2">
                      <button type="submit" class="btn btn-primary btn-sm" name="savephoto2">Save Photo</button>
                </div>
            </form>

                <?php 
                  if (isset($_POST['savephoto2'])){

                    $target_dir    = "productimages/";
                    $file_name     = basename($_FILES["productphoto2"]["name"]);
                    $target_file   = $target_dir . $file_name;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    if (move_uploaded_file($_FILES["productphoto2"]["tmp_name"],$target_file)){

                    $sql = "UPDATE products SET product_photo2 = '$target_file' WHERE product_id = '$product_id'";
                    $result = mysqli_query($conn, $sql);

                    if ($result==true) {
                      echo "<script> alert('Photo added.'); </script>";
                      echo "<script>window.open('editproduct.php?product_id=$product_id' , '_self')</script>";
                    } else {
                      echo "<script> alert('Edit failed.'); </script>";
                    }

                  } else {
                      echo "<script> alert('Photo was not added to folder.'); </script";
                  }
                  }
                ?>

                <form class="form" method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                      <i class="material-icons">attach_file</i>
                      <label for="productphoto3">Input new product photo 3</label>
                      <input type="file" class="form-control" id="productphoto3" name="productphoto3">
                      <button type="submit" class="btn btn-primary btn-sm" name="savephoto3">Save Photo</button>
                </div>
                </form>

                <?php 
                  if (isset($_POST['savephoto3'])){

                    $target_dir    = "productimages/";
                    $file_name     = basename($_FILES["productphoto3"]["name"]);
                    $target_file   = $target_dir . $file_name;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    if (move_uploaded_file($_FILES["productphoto3"]["tmp_name"],$target_file)){

                    $sql = "UPDATE products SET product_photo3 = '$target_file' WHERE product_id = '$product_id'";
                    $result = mysqli_query($conn, $sql);

                    if ($result==true) {
                      echo "<script> alert('Photo added.'); </script>";
                      echo "<script>window.open('editproduct.php?product_id=$product_id' , '_self')</script>";
                    } else {
                      echo "<script> alert('Edit failed.'); </script>";
                    }

                  } else {
                      echo "<script> alert('Photo was not added to folder.'); </script";
                  }
                  }
                ?>

                <form class="form" method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                      <i class="material-icons">attach_file</i>
                      <label for="productphoto">Input new product photo</label>
                      <input type="file" class="form-control" id="productphoto" name="productphoto[]">
                    </div>
                  </div>

                <div class="form-group">
                  <div class="input-group">
                        <input type="text" class="form-control" name="title" placeholder="Product title..." value="<?= $product_title ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="bio">Descriptiion</label>
                    <textarea class="form-control" id="bio" rows="3" name="desc"><?= $product_desc ?></textarea>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                        <input type="int" class="form-control" name="price" placeholder="Price..." value="<?= $product_price ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="size" placeholder="Size..." value="<?= $product_size ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="brand" placeholder="Brand..." value="<?= $product_brand ?>" >
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="condition" placeholder="Condition..." value="<?= $product_condition ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="category" placeholder="Category..." value="<?= $product_category ?>">
                    </div>
                  </div>
                </div>
                <center><button type="submit" class="btn btn-primary mb-10" name="saveproduct">Save changes</button></center><br><br>
               </form>

               <?php 

                if(isset($_POST['saveproduct'])){

                  $jumlahFile = count($_FILES['productphoto']['name']);
 
                  for($x=0; $x<$jumlahFile; $x++){
                    $namafile = $_FILES['productphoto']['name'][$x];
                    $tmp = $_FILES['productphoto']['tmp_name'][$x];
                    $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);

                    if (move_uploaded_file($tmp, 'productimages/'.$namafile)){

                      $x = 'productimages/'.$namafile;

                      $title = $_POST['title'];
                      $desc = $_POST['desc'];
                      $price = $_POST['price'];
                      $size = $_POST['size'];
                      $brand = $_POST['brand'];
                      $condition = $_POST['condition'];
                      $category = $_POST['category'];
                      $sold = "no";

                      $query = "UPDATE products set product_photo1= '$x', product_title= '$title', product_desc= '$desc', product_price= '$price', product_size= '$size', product_brand= '$brand', product_condition= '$condition', product_category= '$category' WHERE product_id = '$product_id'";

                      $result = mysqli_query($conn, $query);

                      if($result==true){
                        echo "<script> alert('Product edited!'); </script>";
                        exit;
                      }
                    }

                  }
                }

               ?>
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
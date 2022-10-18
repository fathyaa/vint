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
          <div class="row mb-5">
            <div class="col-md-4">
              <h1 class="title">Your Product</h1>
            </div>
            <div class="col-md-4">
              <div style="color: #FFFFFF"><a class="btn btn-primary ml-4 mb-3 mt-5" data-toggle="modal" data-target="#addproductModal">Add Product</a></div>
            </div>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Preview</th>
                <th scope="col">Sold</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $sql  = mysqli_query($conn, "SELECT * from products where user_id='$user_id'");
            $a = 1;
            while ($row  = mysqli_fetch_array($sql)) : 
            $product_photo = $row['product_photo1'];
            ?>
              <tr>
                <th scope="row"><?=$a++?></th>
                <td><?=$row['product_title'];?></td>
                <td><?= 'Rp. '.number_format($row['product_price']).',00'; ?></td>
                <td><?php echo "<img src='$product_photo' alt='Rounded Image' class='img-fluid rounded' width='150px' height='150px'>"?></td>
                <td><?=$row['product_sold'];?></td>
                <td><a href='editproduct.php?product_id=<?php echo $row["product_id"]; ?>' class="btn btn-primary btn-round btn-raised">Edit</a> <a href='deleteproduct.php?product_id=<?php echo $row["product_id"]; ?>' class="btn btn-primary btn-round btn-raised">Delete</a></td>
              </tr>
              <?php endwhile ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Add Product -->
<div class="modal fade" id="addproductModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-signup" role="document">
    <div class="modal-content">
      <div class="card card-signup card-plain">
        <div class="modal-header">
          <h5 class="modal-title card-title">Sell Your Own Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
              <form class="form" method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                      <i class="material-icons">attach_file</i>
                      <label for="productphoto">Input new product photo</label>
                      <input type="file" class="form-control" id="productphoto" name="productphoto[]">
                    </div>
                  </div>

                <div class="form-group">
                  <div class="input-group">
                        <input type="text" class="form-control" name="title" placeholder="Product title...">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="bio">Descriptiion</label>
                    <textarea class="form-control" id="bio" rows="3" name="desc"></textarea>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                        <input type="int" class="form-control" name="price" placeholder="Price...">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="size" placeholder="Size...">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="brand" placeholder="Brand..." >
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="condition" placeholder="Condition..." >
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="category" placeholder="Category..." >
                    </div>
                  </div>
                </div>
              <div class="modal-footer justify-content-center">
              <div style="color: #FFFFFF"><button id="postproduct" class="btn btn-primary btn-round" name="postproduct">Post Product</button></div>
              </div>
              </form>

              <?php 

                if(isset($_POST['postproduct'])){

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

                      $query = "INSERT INTO products VALUES ('', '$user_id', '$user_name', '$x', '', '', '$title', '$desc', '$price', '$size', '$brand', '$condition', '$category', '$sold')";

                      $result = mysqli_query($conn, $query);

                      if($result==true){
                        echo "<script> alert('Product posted!'); </script>";
                        echo "<script>window.open('selling.php?u_id=$user_id' , '_self')</script>";
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
  </div>
</div>
<!-- End of Modal Add Product-->

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
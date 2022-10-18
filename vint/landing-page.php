<!DOCTYPE html>
<html lang="en"> 

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    VINT
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

<body class="landing-page sidebar-collapse">
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
            <a class="btn btn-primary btn-raised btn-round" data-toggle="modal" data-target="#loginModal">
              <div style="color: #FFFFFF"> LOG IN</div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/examples/landing-page.jpeg')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Get and sell a vint.</h1>
          <h4>This is a place where you can sell your preloved or <br> secondhand fashion. We suggest you to support <br> slow fashion for a better world.</h4>
          <br>
          <a class="btn btn-primary btn-raised btn-lg" data-toggle="modal" data-target="#signupModal">REGIST NOW
          </a>
        </div>
      </div>
    </div>
  </div>

<!-- Modal Regist -->
<?php include 'register.php'; ?>
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-signup" role="document">
    <div class="modal-content">
      <div class="card card-signup card-plain">
        <div class="modal-header">
          <h5 class="modal-title card-title">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
              <form class="form" method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">face</i>
                        </span>
                        <input type="text" class="form-control" name="name" placeholder="Name...">
                    </div>
                  </div>

                <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">account_circle</i>
                      </span>
                      <input type="text" class="form-control" name="username" placeholder="Username...">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">email</i>
                      </span>
                      <input type="text" class="form-control" name="email" placeholder="Email...">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">lock_outline</i>
                      </span>
                      <input type="password" class="form-control" name="password" placeholder="Password...">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">lock</i>
                      </span>
                      <input type="password" class="form-control" name="confirmpass" placeholder="Confirm password..." >
                  </div>
                </div>

                <div class="form-check">
                  <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" checked>
                      <span class="form-check-sign">
                          <span class="check"></span>
                      </span>
                      I agree to the <a href="#something">terms and conditions</a>.
                  </label>
                </div>
                </div>
              <div class="modal-footer justify-content-center">
              <div style="color: #FFFFFF"><button id="register" class="btn btn-primary btn-round" name="register">Get Started</button></div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Modal Regist-->

<!-- Modal Log in -->
<div class="modal fade" id="loginModal" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header col-md-4">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Log in</h4>
                    </div>
                </div>
                <div class="modal-body">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons ml-4">clear</i></button>
                    <form class="form" method="post" action="login.php">
                        <div class="card-body">

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">account_circle</i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Username..." name="username">
                                </div>
                            </div>

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <input type="password" placeholder="Password..." class="form-control" name="password">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <div style="color: #FFFFFF"><button id="login" class="btn btn-primary btn-link btn-wd btn-lg" name="login">Log in</button></div>
                </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal Log in-->

  <div class="main main-raised">
    <div class="container">
      <!-- Preview Product -->
      <div class="section">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#unisex" role="tab" data-toggle="tab">Unisex</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#man" role="tab" data-toggle="tab">Man</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#woman" role="tab" data-toggle="tab">Woman</a>
              </li>
            </ul>
          </div>
        </div>
        <br><br>
        <div class="tab-content tab-space">
          <div class= "tab-pane active text-center gallery" id="unisex">
            <div class="row">
              <?php 
                $sql  = mysqli_query($conn, "SELECT * from products");
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
                      <button class="btn btn-primary btn-fab btn-round">
                     <i class="material-icons">favorite</i>
                    </button>
                    <a href='addtocart.php?<?php echo "product_id=$product_id" ?>' class="btn btn-primary btn-fab btn-round">
                     <i class="material-icons">shopping_cart</i>
                    </a>
                  </div>
                </div>
              </div>
              <?php endwhile ?>
            </div>
          </div>
          <div class= "tab-pane text-center gallery" id="man">
            <div class="row">
              <div class="col-md-3 mx-auto">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="productimages/B.jpg" rel="nofollow" alt="Card image cap">
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
          <div class= "tab-pane text-center gallery" id="woman">
            <div class="row">
              <div class="col-md-3 mx-auto">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="productimages/A.jpg" rel="nofollow" alt="Card image cap">
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
      <!-- End of Preview Product -->

      <!-- Team -->
      <div class="section text-center">
        <h2 class="title">Top Sellers</h2>
        <div class="team">
          <div class="row">
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="../assets/img/faces/avatar.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">Karina
                    <br>
                    <small class="card-description text-muted">@karinaring</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">Best on selling vintage jacket and sneakers. Cheap price with good quality is number 1 because we love it.</p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="#pablo" class="btn btn-primary btn-round">VISIT PROFILE</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="../assets/img/faces/christian.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">Epan
                    <br>
                    <small class="card-description text-muted">@epancho</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">Best on selling vintage jacket and sneakers. Cheap price with good quality is number 1 because we love it.</p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="#pablo" class="btn btn-primary btn-round">VISIT PROFILE</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                 <div class="col-md-6 ml-auto mr-auto">
                    <img src="../assets/img/faces/kendall.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">Juariah
                    <br>
                    <small class="card-description text-muted">@juarius</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">Best on selling vintage jacket and sneakers. Cheap price with good quality is number 1 because we love it.</p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="#pablo" class="btn btn-primary btn-round">VISIT PROFILE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Top Sellers -->
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">The benefit you can get</h2>
            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Free Chat</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Verified Users</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Fingerprint</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
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
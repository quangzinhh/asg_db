<?php
  @session_start();
  if (isset($_SESSION['guest']))
  {
    require_once('models/user.php');
    $data = User::get($_SESSION['guest']);
  }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bosch Company</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="https://www.logolynx.com/images/logolynx/94/94174906fca1b19e84305fa6f5160ddb.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./public/js/layouts/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./public/js/layouts/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./public/css/layouts/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./public/css/layouts/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" style="position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999;">
    <div class="container-fluid position-relative p-0" >
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5 py-3 py-lg-0">
              <a href="index.php" class="navbar-brand p-0">
                  <img src="https://logos-download.com/wp-content/uploads/2016/03/Bosch-logo.png" alt="logo" style="max-height: 30px;">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="fa fa-bars"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav ms-auto py-0">
                      <a href="index.php" class="nav-item nav-link"  style="color: white">Home</a>
                      <a href="index.php?page=main&controller=about&action=index" class="nav-item nav-link" style="color: white">Intro</a>
                      <a href="index.php?page=main&controller=archive&action=index" class="nav-item nav-link"  style="color: white">Achievements</a>
                      <a href="index.php?page=main&controller=services&action=index" class="nav-item nav-link"  style="color: white">Services</a>
                      <a href="index.php?page=main&controller=blog&action=index" class="nav-item nav-link"  style="color: white">News</a>
                      <a href="index.php?page=main&controller=contact&action=index" class="nav-item nav-link"  style="color: white">Connections</a>
                      <?php
                        if(!isset($_SESSION["guest"])) {
                          echo '
                            <li class="form-inline my-2 my-lg-0" style="margin-left: 20px">
                              <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="index.php?page=main&controller=login&action=index">Login</a>
                            </li>';
                        } else {
                            // redirect user to login page if not logged in
                            echo '<a class="nav-item nav-link" href="index.php?page=main&controller=edit&action=index" style="color: white">Edit Profile</a>';
                            echo '
                              <li class="form-inline my-2 my-lg-0" style="margin-left: 20px">
                              <a href="index.php?page=main&controller=login&action=logout" class="btn btn-outline-danger my-2 my-sm-0">Log out</a>
                              </li>';
                          }
                      ?>
                  </div>
              </div>
          </nav>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./public/js/layouts/wow/wow.min.js"></script>
    <script src="./public/js/layouts/easing/easing.min.js"></script>
    <script src="./public/js/layouts/waypoints/waypoints.min.js"></script>
    <script src="./public/js/layouts/counterup/counterup.min.js"></script>
    <script src="./public/js/layouts/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="./public/js/layouts/main.js"></script>

</html>
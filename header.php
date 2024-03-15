<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gavai Swad </title>
    <link href="images/fav_icon.png" rel="icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- start owl carousel link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- end owl carousel link -->
    <link href="css/style.css" rel="stylesheet"/>
  </head>
  <body class="">
    <div class="container-fluid">
        
        <!-- navbar start -->
        <div class="row sticky-top">
        <nav class="navbar navbar-expand-lg  border-bottom border-body " data-bs-theme="dark" style="background-color:#4b4159;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> <img src="images/glogo.png" height="50px" width="220px"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="d-flex w-50" role="search">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"
                  style="font-size:25px;color:gold;"></i></span>
        <input class="form-control me-1 border-warning shadow" type="search" placeholder="Search here.." aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="aboutus.php"><i class="bi bi-gift" style="color:white;"></i> About Us</a>
        </li>
        <li class="nav-item">
          <?php
          if( isset($_SESSION['user_id']) )
          {

         
          ?>
          <a class="nav-link active" href="cart.php"><i class="bi bi-person"style="color:white;"></i> Cart</a>
          <?php
          }
          else
          {
            ?>
                      <a class="nav-link active" href="log.php"><i class="bi bi-person"style="color:white;"></i> Cart</a>

            <?php
          }
          ?>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle  mx-1 rounded-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Admin
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Add category</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="adminlogin.php">Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="products.php">Products</a></li>
          </ul>
        </li>
        <li class="nav-item">
        <a href="reg.php"><button class="btn btn-warning" type="submit" ><i class="bi bi-person-circle"></i>
 Sign Up</button></a>
        </li>
        <li class="nav-item ms-2">
          <?php
          if(isset($_SESSION['user_id']))
          {
            ?>
            <a href="logout.php"><button class="btn btn-warning" type="submit">Log out</button></a>
            <?php

          }
          else{

        
          ?>
            <a href="log.php"><button class="btn btn-warning" type="submit">Log In</button></a>    
<?php
          }
?>                
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
</div>

        <!-- navbar end -->
        
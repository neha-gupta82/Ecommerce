<?php
session_start();
// echo $_SESSION['admin'];
if(isset($_SESSION['admin']))
{
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <?php
    include('link.php');
    ?>
  </head>
  <body>
<div class="container-fluid">
    <!-- header start -->
    <div class="row sticky-top">
    
        <?php
        include('header.php');
        ?>
    </div>

<!-- end header -->
<!-- main section -->
<div class="row">
   <!-- side-nav start -->
    <div class="col-sm-3 px-0" style="position:sticky;top:9.5vh;height:90vh;">
           <?php
           include('sidenav.php');
           ?>
    </div>
    <!-- end side-nav  -->
    <div class="col-sm-9">
        
    </div>
</div>
<!-- end main section -->
<!-- footer start -->
<div class="row">
    <div class="col-sm-12">
    <?php
    include('footer.php');
    ?>
</div>
</div>
</div>
<!-- end footer -->
  <?php
  include('script.php');
  ?>
  </body>

</html>
<?php
}
else
{
    echo "<script>alert('Please Login First!');document.location.href='../log.php';</script>";
}
?>
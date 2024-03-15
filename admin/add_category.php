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
    <div class="col-sm-9 row " style="height:40vh;">
    <div class="col-sm-8 mx-auto pt-3 px-4 my-4 py-3 rounded text-center shadow" style="background-color:aliceblue;">
         <h3 class="text-center p-3">Add Category</h3>
            <form action="" class="">
                <input type="text" class="form-control mb-4" placeholder="Add Category" >
<input type="submit" class="btn btn-success px-5 ">
            </form>
         </div>
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
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
    <div class="col-sm-9 row">
    <div class="col-sm-10 mx-auto shadow border p-5 mt-5 bg-white rounded">
         <h3 class="text-center pb-3" style="font-family:">Add Products</h3>
            <form action="pro_code.php" method="post" enctype="multipart/form-data" class="border border-2 p-3" style="border:gray;">
                <div class="row">
<div class="col-sm-6">
<input type="text" name="name" placeholder="Produts Name" class="form-control mb-3">
<input type="text" name="ncost" placeholder="Product cost" class="form-control  mb-3">
<input type="text" name="stock" placeholder="Stock" class="form-control  mb-3">
<input type="file" name="photo" placeholder="Choose Photo" class="form-control  mb-3">

</div>
<div class="col-sm-6">
<input type="text" name="desc" placeholder="Description" class="form-control mb-3">
<input type="text" name="ocost" placeholder="Price" class="form-control  mb-3">
<input type="text" name="offer" placeholder="Offer" class="form-control  mb-3">
<input type="text" name="cat" placeholder="Add Category" class="form-control  mb-3">

</div>
<div class="col-sm-12">
   <div class="row">
      <div class="col-sm-6 mx-auto text-center">
      <input type="submit" value="ADD" class="btn btn-primary px-5">

      </div>
   </div>
</div>
                </div>
               
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
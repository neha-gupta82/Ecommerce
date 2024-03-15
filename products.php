<?php
include('header.php');
$con=mysqli_connect('localhost','root','','gavaiswad');
$query="select * from add_products order by id";
$res=mysqli_query($con,$query);

?>

<div class="row">
<div class="col-sm-3 bg-dark   position-sticky ">
<h3 class="bg-warning text-center rounded-4 p-2 mt-4"><a href="#">Category</a></h3>
<button  class="btn btn-outline-warning w-75 border border-2 border-warning text-center rounded-4 p-2 m-4">All</button>
<button  class="btn btn-outline-warning w-75 border border-2 border-warning text-center rounded-4 p-2 m-4">Vinegar</button>
<button  class="btn btn-outline-warning w-75 border border-2 border-warning text-center rounded-4 p-2 m-4">Pickle</button>
<button  class="btn btn-outline-warning w-75 border border-2 border-warning text-center rounded-4 p-2 m-4">Jaggery</button>

</div>
<div class="col-sm-9 sideb" style="background-color:transparent;height:87vh;overflow:auto;">
<div class="row">
  <div class="col-sm-12 p-4">
    
<div class="row">

<?php
while($row=mysqli_fetch_array($res))
{
    ?>
    <div class="col-sm-4 py-2">
  
  <div class="card" style="min-height:300px;">
      <div class="card-body">
          <img src="upload/<?php echo $row['filename'];?>" alt="" class="card-imgtop" height="200px" width="100%">
          <hr/>
          <p class=" text-center"><?php echo $row['description'];?></p>
          <hr/>
          
          <p class=""> <span style="font-size:22px;font-weight:bold;">Rs<?php echo $row['newprice'];?></span>  Rs<del><?php echo $row['price'];?>/</del> <span style="color:green;"><?php echo $row['offer'];?>% off</span></p>
<?php
if(isset($_SESSION['user_id']))
{


?>
<div class="d-flex justify-content-between">
<a href="cart_code.php?id=<?php echo $row['id'];?>"><button class="btn btn-warning">Add To Cart</button></a>
<a href="buy.php"><button class="btn btn-success">Buy Now</button></a>
</div>
<?php
}
else
{
?>
<div class="d-flex justify-content-between">
<a href="log.php"><button class="btn btn-warning">Add To Cart</button></a>
<a href="log.php"><button class="btn btn-success">Buy Now</button>
</div>
</a>
<?php
}
?>
<p class="fs-5" style="color:gold;" >
        <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-half"></i></p>
      </div>
  </div>

</div>
    <?php
}

?>

</div>
</div>
</div>

</div>
<!-- end -->

     <!-- </div>
   
</div> -->

<?php
include('footer.php')
?>
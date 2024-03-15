<?php
include('header.php');
$con = mysqli_connect('localhost','root','','gavaiswad');
$query ="select * from add_products" ;
$res = mysqli_query($con,$query);
// if($row = mysqli_fetch_array($res))
// {
// echo $row['id'];
// }

?>
<?php
include('slider.php');
?>

<!-- start content -->
<div class="row">
    
    <div class="col-sm-10 mx-auto text-center">
    <b class="px-4 fs-4 text-center fw-bold  bg-warning rounded-2 text-white">Our <span style="color:black;"> Products</span></b>

      <div class="row mt-4">
        <div class="col-md-4 text-center">
        <a href="#"><img src="images/img3.jpg" height="250px" width="250px" class="rounded-circle border border-4 border-warning"/></a>
        <h6 class="fs-4 py-1">VINEGAR</h6>
       <p>It is found in popular kitchen staples like salad dressings, marinades, sauces, mayonnaise, and ketchup.</p>
        <a href="products.php"><button class="btn btn-outline-dark rounded-4 p-3 px-5 ">View Details</button></a>
        </div>
        <div class="col-md-4 text-center">
        <a href="#"><img src="images/img7.jpg" height="250px" class="rounded-circle border border-4 border-warning"/></a>
        <h6 class="fs-4 py-1">PICKLE</h6>
        <p>From vegetables and fruits, anything can be pickled.you can find your favourite Indian pickle from your favourite brand.</p>
        <button class="btn btn-outline-dark rounded-4 p-3 px-5">View Details</button>
        </div>
        <div class="col-md-4 text-center">
        <a href="#"> <img src="images/gal1.jpg" height="250px"  width="250px"  class="rounded-circle border border-4 border-warning"/></a>
        <h6 class="fs-4 py-1">JAGGERY</h6>
        <p >It is used as a sweetening agent for the preparation of dishes, desserts, and is superior to cane jaggery,cane jaggery.</p>
     <button class="btn btn-outline-dark rounded-4 p-3 px-5 ">View Details</button>
        </div>
      </div> 
    
</div>
  </div>
  <!-- end  -->
<!-- mixup products -->
<div class="row">
    <div class="col-sm-12 mt-4">
        <h3 class="text-center bg-warning = p-1 rounded-3 fw-bold"><span style="color:white;">Best</span> Products</h3>
        <div class="row">
            <div class="col-sm-9">
                <div class="d-flex overflow-auto">
                    <div class=" m-2">
                <div class="card w-100">
                <div class="card-body">
                  <a href="#"><img src="images/m1.jpg" height="300px" width="250px"/></a>
                </div>
                <p style="text-align: center;"><a href="#">Pickles<br><strong>incl of offers</strong></a></p>
</div>
              </div>
            <div class="m-2">
              <div class="card w-100">
                <div class="card-body">
                  <a href="#"><img src="images/img8.jpg" height="300px" width="250px"/></a>
                </div>
                <p style="text-align: center;"><a href="#">Pickles<br><strong>incl of offers</strong></a></p>
               </div>
              </div>
              <div class="m-2">
              <div class="card w-100">
                <div class="card-body">
                  <a href="#"><img src="images/img3.jpg" height="300px" width="250px"/></a>
                </div>
                <p style="text-align: center;"><a href="#">Vinegar<br><strong>incl of offers</strong></a></p>

                </div>
              </div>
              <div class="m-2">
              <div class="card w-100">
                <div class="card-body ">
                  <a href="#"><img src="images/gal1.jpg" height="300px" width="250px"/></a>
                </div>
                <p style="text-align: center;"><a href="#">Jaggery<br><strong>incl of offers</strong></a></p>
              </div>
              </div>
              <div class="m-2">
              <div class="card w-100">
                <div class="card-body">
                  <a href="#"><img src="images/gal10.jpeg" height="300px" width="250px"/></a>
                </div>
                <p style="text-align: center;"><a href="#">Vinegar<br><strong>incl of offers</strong></a></p>
              </div>
              </div>
              <div class="m-2">
              <div class="card w-100">
                <div class="card-body">
                  <a href="#"><img src="images/gal2.jpg" height="300px" width="250px"/></a>
                </div>
                <p style="text-align: center;"><a href="#">Jaggery<br><strong>incl of offers</strong></a></p>
                </div>
              </div>
              <div class="m-2">
              <div class="card w-100">
                <div class="card-body">
                  <a href="#"><img src="images/img7.jpg" height="300px" width="250px"/></a>
                </div>
                <p style="text-align: center;"><a href="#">Pickle<br><strong>incl of offers</strong></a></p>
                </div>
              </div>
                </div>
            </div>
            <div class="col-sm-3"> 
             <div class="card">
                <div class="card-body">
                    <a href="#"><img src="images/mpickle.jpg" width="100%" height="380px"/></a>
                </div>
             </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <?php
    while($row=mysqli_fetch_array($res))
    {
        ?>
        <div class="col-sm-3 py-3">
      
      <div class="card" style="height:430px;">
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
<a href="cart_code.php?id=<?php echo $row['id'];?>"><button class="btn btn-warning">Add To Cart</button></a>
<a href="buy.php"><button class="btn btn-success">Buy Now</button></a>
<?php
}
else
{
    ?>
<a href="log.php"><button class="btn btn-warning">Add To Cart</button></a>
<a href="log.php"><button class="btn btn-success">Buy Now</button>
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



<!-- end -->
<!-- start owl carousel vinegar -->
<div class="row">
<div class="col-sm-12 mx-auto">
    <h3 class=" text-center fw-bold my-4 bg-warning rounded-2">Vinegar</h3>
    <div class="row">
        <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="card ">
                <div class="card-body">
                    
                    <img src="images/img1.jpg" alt="" class="card-imgtop " height="200px" >
                   
                    <hr/>
                    <p class="text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                  
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
                    <?php
    if(isset($_SESSION['user']))
    {
    ?>
<a href="cart.php>"><button class="btn btn-warning">Add To Cart</button></a>
<a href="buy.php"><button class="btn btn-success">Buy Now</button></a>
                
    <?php
    }
    else{

    
    ?>

     <a href="log.php"><button class="btn btn-warning">Add To Cart</button></a>
     <a href="log.php"><button class="btn btn-success">Buy Now</button></a>
    <?php
    }
    ?>
          
          <p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/img2.jpg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
                    <?php
    if(isset($_SESSION['user']))
    {
    ?>
<a href="cart.php"><button class="btn btn-warning">Add To Cart</button></a>
<a href="buy.php"><button class="btn btn-success">Buy Now</button></a>
                
    <?php
    }
    else{

    
    ?>

     <a href="log.php"><button class="btn btn-warning">Add To Cart</button></a>
     <a href="log.php"><button class="btn btn-success">Buy Now</button></a>
    <?php
    }
    ?>
    
    <p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/img3.jpg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <?php
    if(isset($_SESSION['user']))
    {
    ?>
<a href="cart.php"><button class="btn btn-warning">Add To Cart</button></a>
<a href="buy.php"><button class="btn btn-success">Buy Now</button></a>
                
    <?php
    }
    else{

    
    ?>

     <a href="log.php"><button class="btn btn-warning">Add To Cart</button></a>
    <a href="log.php"><button class="btn btn-success">Buy Now</button></a>
    <?php
    }
    ?>
    <p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/img4.jpg" alt="" class="card-imgtop" height="200px" width="100%">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/img3.jpeg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/gal10.jpg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/img5.jpg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/img6.jpg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/gal10.jpeg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
<!-- end vinegar -->
<!-- pickle owl carousel start -->
<div class="row">
<div class="col-sm-12 mx-auto">
    <h3 class=" text-center fw-bold my-4 bg-warning rounded-2">Pickle</h3>
    <div class="row">
        <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="card ">
                <div class="card-body">
                    <div class="">
                    <img src="images/img10.jpg" alt="" class="card-imgtop " height="250px" >
                    </div>
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
    
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/img11.jpg" alt="" class="card-imgtop" height="250px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/img12.jpg" alt="" class="card-imgtop" height="250px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/img7.jpg" alt="" class="card-imgtop" height="250px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/img8.jpg" alt="" class="card-imgtop" height="250px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/gal10.jpg" alt="" class="card-imgtop" height="250px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/img10.jpg" alt="" class="card-imgtop" height="250px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/img11.jpg" alt="" class="card-imgtop" height="250px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/img12.jpg" alt="" class="card-imgtop" height="250px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
<!-- end pickle -->
<!-- start jaggery -->
<div class="row">
<div class="col-sm-12 mx-auto">
    <h3 class=" text-center fw-bold my-4 bg-warning rounded-2">Jaggery</h3>
    <div class="row">
        <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="card ">
                <div class="card-body">
                    <div class="">
                    <img src="images/gal1.jpg" alt="" class="card-imgtop " height="200px" >
                    </div>
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
    
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/gal2.jpg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/gal4.jpg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/gal5.jpg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/gal6.jpg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/gal7.jpg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/gal1.jpg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/gal2.jpg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/gal5.jpg" alt="" class="card-imgtop" height="200px">
                    <hr/>
                    <p class=" text-center"> Red Wine Vinegar (500 ml) | Imported from Italy | Premium Red Vinegar | No Artificial Colours</p>
                    <hr/>
                    
                    <p class=""> <span style="font-size:22px;font-weight:bold;">Rs 495</span>  Rs<del>999/</del> <span style="color:green;">50% off</span></p>
    <button class="btn btn-warning">Add To Cart</button>
    <button class="btn btn-success">Buy Now</button><p class="fs-5" style="color:gold;" ><i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
<!-- end jaggery -->

<?php
include('footer.php');
?>
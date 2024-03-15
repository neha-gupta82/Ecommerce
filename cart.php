<?php
include('header.php');


// $id = $_REQUEST['id'];
// echo $_SESSION['user_id'];
$userid = $_SESSION['user_id'];
// echo $userid;
//  echo $id;

$con = mysqli_connect('localhost','root','','gavaiswad');
// $query3="select * from tbl_cart where id='$id'";
$query2="select tbl_cart.id,add_products.p_name,add_products.filename,add_products.description,add_products.newprice from tbl_cart join add_products on tbl_cart.id=add_products.id order by id";
 $res=mysqli_query($con,$query2);
 
?>
<!-- start cart -->
<div class="row">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-9 text-center">
      <h1 class="text-center">Shopping Cart </h1>
        <table class="table">
          <tr>
          <th>Id</th>
          <th></th>
          <th></th>
          <th>Description</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
            
          </tr>
           <?php
       while($row = mysqli_fetch_array($res))
         {
            
           ?> 
           <tr>
             <td><?php echo $row['id'];?></td>
             <td><?php echo $row['p_name'];?></td>
             <td><img src="upload/<?php echo $row['filename']?>" alt="" height="100px"></td>
             <td><?php echo $row['description'];?></td>
             <td><?php echo $row['newprice'];?></td>
             <td><button class="btn btn-dark px-3">-</button>
             <span class="p-2">1</span>
             <button class="btn btn-dark px-3">+</button></td>
             <td><?php echo $row['newprice'];?></td>
             <td><a href="pro_remove.php?cid=<?php echo $row['id'];?>">Remove</a></td>
           </tr>
           <?php
 }
       ?>
           </div>
       
         </table>
     
    </div>
    <div class="row">
      <div class="col-sm-9 text-center">
    
        
    </div>
  </div>
</div>
<!-- end cart -->
<?php
include('footer.php');
?>
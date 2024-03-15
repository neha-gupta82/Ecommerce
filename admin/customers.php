<?php
session_start();
// echo $_SESSION['admin'];
if(isset($_SESSION['admin']))
{
  
$con=mysqli_connect('localhost','root','','gavaiswad');
$query="select * from tbl_reg order by id";
$res=mysqli_query($con,$query);

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
    <div class="col-sm-9 overflow-x-auto">
    <table id="example" class="table p-2" >
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Customer Name</th>
                                <th>Father's Name</th>
                                <th>Contact No</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>DOB</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>DOR</th>
                                <th>Delete</th>
                                <th>Edit</th>
                                <th>Block</th>
                            </tr>
    </thead>
                            <?php
                            $a=1;
                            while($row=mysqli_fetch_array($res))
                            {
                            ?>
                            <tbody>
                            <tr class=>
                                <td><?php echo $a;?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['fname'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['dob'];?></td>
                                <td><?php echo $row['city'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['dor'];?></td>

                                <td class="delete"><a href="" class=""><img src="images/delete.png" height="30px"/></a></td>
                                <td><a href="#" class=""><img src="images/edit.png" height="30px"/></a></td>
                                <td><a href="#" class=""><img src="images/block.png" height="30px"/></a></td>
                            </tr>
                            <?php
                            $a++;
                            }
                            ?>
                            </tbody>
                        </table>
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
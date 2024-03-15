<?php
$id=$_REQUEST['id'];
$con=mysqli_connect('localhost','root','','gavaiswad');
$query="delete from add_products where id='$id'";
$res=mysqli_query($con,$query);
if($res)
{
    echo "<script>window.alert('One Record deleted Successfully!');document.location.href='showproducts.php';</script>";
}
else
{
    header('location:showproducts.php');
}
?>
<?php
if(isset($_REQUEST['id']))
{
    
$id = $_REQUEST['id'];
$con = mysqli_connect('localhost','root','','gavaiswad');
$query="select * from tbl_cart where id='$id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res));
{
// echo $row2['id'];
// echo $_REQUEST['id'];
if($row['id']==$id)
{
  
  echo "<script>alert('Record already exist')</script>";
  header("location:cart");
}
else
{
  $query1="insert into tbl_cart(id,user_id) values('$id','$userid')";
  mysqli_query($con,$query1);
  header("location:cart");
  
}
}
}

?>
<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
//echo $password;
$con=mysqli_connect('localhost','root','','gavaiswad');
$query="select * from admin where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    
    // $_SESSION['user']=$row['email'];
  


    echo "<script>alert('Login Successfully!');window.location.href='admin/dashboard.php';</script>";
}
else
{
    echo "<script> window.location.href='adminlogin.php';</script>";
}
?>
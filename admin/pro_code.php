<?php
$p_name=$_POST['name'];
$desc=$_POST['desc'];
$ocost=$_POST['ocost'];
$ncost=$_POST['ncost'];
$stock=$_POST['stock'];
$filename=$_FILES['photo']['name'];
// echo $filename;
$path=$_FILES['photo']['tmp_name'];
// echo $path;
$offer=$_POST['offer'];
$cat=$_POST['cat'];
$location='../upload/';
$con=mysqli_connect('localhost','root','','gavaiswad');
 $query="insert into add_products (p_name,description,price,newprice,stock,offer,filename,category,doa) values('$p_name','$desc','$ocost','$ncost','$stock','$offer','$filename','$cat',now())";
$res=mysqli_query($con,$query);
move_uploaded_file($path,$location.$filename);
if($res)
{
    echo "<script>alert('Add successfully'); document.location.href='add_products.php';</script>";
}
else
{
     header('location:add_products.php');
}
?>
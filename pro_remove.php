<?php
$cid=$_REQUEST['cid'];
// echo $cid;
$con=mysqli_connect('localhost','root','','gavaiswad');
$query="delete from tbl_cart where id='$cid'";
$res=mysqli_query($con,$query);

?>
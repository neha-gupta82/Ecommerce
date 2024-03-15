<?php
session_start();
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    //echo $password;
    $con=mysqli_connect('localhost','root','','gavaiswad');
    $query="select * from tbl_reg where email='$email' and password='$password'";
    $res=mysqli_query($con,$query);
    if($row=mysqli_fetch_array($res))
    {
        
        // $_SESSION['user']=$row['email'];
         $_SESSION['user_id']=$row['id'];
    
        echo "<script>alert('user Login Successfully!');window.location.href='index.php';</script>";
    }
    else
    {
        $query1="select * from admin where name='$email' and password='$password'";
        $res1=mysqli_query($con,$query1);
        if($row1=mysqli_fetch_array($res1))
        {
            $_SESSION['admin']=$row1['id'];
            echo "<script>alert('Admin Login Successfully!');window.location.href='admin/index.php';</script>";
        }
        else
        {
            echo "<script>alert('Invalid user and password !');document.location.href='log.php'</script>";
        }
    }
}

?>
<?php
session_start();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    //echo $name;
    $fname=$_POST['fname'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $conpass=$_POST['conpass'];
    $dob=$_POST['dob'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    if($name=="" || $fname=="" || $mobile=="" || $gender=="" || $email=="" || $pass==""|| $conpass=="" || $dob=="" || $city==""|| $address=="")
    {
        echo "<script>window.alert('One or more field is empty');window.location.href='reg.php';</script>";
    }
    else
    {
        if($pass==$conpass)
        {
            $con=mysqli_connect('localhost','root','','gavaiswad');
            $query1="select * from tbl_reg where email='$email'";
              $res=mysqli_query($con,$query1);
            if($row=mysqli_fetch_array($res))
            {
            echo "<script>alert('Email already exist!');location.href='reg.php';</script>";
            }
            else
            {
            $query="insert into tbl_reg(name,fname,mobile,gender,email,password,dob,city,address,status,dor) values('$name','$fname','$mobile','$gender','$email','$pass','$dob','$city','$address','U',now())";
           $res1 = mysqli_query($con,$query);
           if($res1)
           {
            echo "<script>alert('Registration Successfully');location.href='log.php'</script>";
           }
        
        else
        {
            echo "<script>window.alert('Enter valid password');window.location.href='reg.php';</script>";
        }
    }
            
    }
}
}
?>
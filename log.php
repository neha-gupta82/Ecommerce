<?php
include('header.php');
?>
<div class="row">
    <div class="col-sm-12" style="background-color:#ffd700;background-image:url('images/logback1.jpg'); background-attachment:fixed;">
        <div class="row">
            <div class="col-sm-6 mx-auto shadow m-3 p-3 rounded-2 border    " style="background-color:rgba(196, 180, 84,.5);">
                <h1 class="fw-bold text-center">Login Form</h1>
                <form action="logcode.php" method="post" class="">
               <div class="mb-3"> 
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3"> 
  <label for="exampleFormControlInput2" class="form-label">Password</label>
  <input type="password" name="password"class="form-control" id="exampleFormControlInput2">
</div>
<input type="submit" value="LOGIN" name="login" class="btn btn-success"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span>If you have not an account <a href="reg.php" style="color:blue;text-decoration:underline;">Register here</a></span>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>

<?php
include('header.php');
?>
<div class="row">
    <div class="col-sm-12" style="background-color:#ffd700;background-image:url('images/logback1.jpg'); background-attachment:fixed;">
    <div class="row">
            <div class="col-sm-6 mx-auto shadow m-3 p-3 rounded-2 border    " style="background-color:rgba(196, 180, 84,.5);">
                <h1 class="fw-bold text-center">Admin Login </h1>
                <form action="adminlog_code.php" method="post" class="">
               <div class="mb-3"> 
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3"> 
  <label for="exampleFormControlInput2" class="form-label">Password</label>
  <input type="password" name="password"class="form-control" id="exampleFormControlInput2">
</div>
<input type="submit" value="LOGIN" class="btn btn-success"/>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>

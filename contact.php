<?php 
include('header.php');
?>
<div class="row">
    <div class="col-sm-12" style=" background-color:#4b4159 ;">
<div class="row">
    <div class="col-sm-8 mx-auto shadow rounded-4" style="background:#7b7682">
        
        <form action="" class="text-center text-white fw-bold p-5 m-2">
        <h1 class="text-center text-white ">Contact Us</h1>
            <input type="text" class="form-control mb-3 border-warning" placeholder="Enter your name.."/>
         
            <input type="number" class="form-control mb-3 border-warning" placeholder="Enter your phone number.."/>
       
        <input type="email" class="form-control mb-3 border-warning" placeholder="Enter your email.."/>
        <textarea name="" id="" cols="30" rows="5" class="form-control mb-3 border-warning" placeholder="Please enter your msg.."></textarea>
        <input type="submit" value="SEND" class="btn btn-outline-warning px-4"/>
        </form>
    </div>
</div>
    </div>
</div>
<?php
include('footer.php');
?>
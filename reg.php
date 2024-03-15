<?php
include('header.php');
?>
<div class="row">
    <div class="col-sm-12 bg-img1" >
        <div class="row">
            <div class="col-sm-8 mx-auto py-5" >
                
                <form action="code.php" method="post" class="w-75 mx-auto border border-warning p-5 text-light bg-img2 rounded-5">
                <h3 class="text-center fw-bold bg-dark text-white rounded p-2">Registration Form</h3>
                    Enter your name
                    <input type="text" name="name" class="form-control mb-3" placeholder="Name" >
                    Enter your F'name
                    <input type="text" name="fname" class="form-control mb-3" placeholder="Father's Name">
                    Enter your contact number
                    <input type="number" name="mobile"class="form-control mb-3" placeholder="Contact Number"/>
                    Select Gender
                    <input type="radio" name="gender"value="male">Male
                    <input type="radio" name="gender"value="Female">Female<br/><br/>
                    Enter your email
                    <input type="email" name="email"class="form-control mb-3" placeholder="Email">
                    Enter your password
                    <input type="password" class="form-control mb-3" name="pass"placeholder="Password">
                    Confirm Password
                    <input type="password" class="form-control mb-3" name="conpass">
                    Enter your Date of Birth
                    <input type="date" class="form-control mb-3" name="dob">
                    Select Your City
                    <select name="city" class="form-control mb-3">
                        <option value="">--select--</option>
                        <option value="sultanpur">Sultanpur</option>
                        <option value="lucknow">Lucknow</option>
                        <option value="farrukhabad">Farrukhabad</option>
                        <option value="amethi">Amethi</option>
                    </select>
                    Enter your address
                    <textarea class="form-control mb-3" rows="3"name="address"></textarea>
                    <div class="text-center">
                   <input type="submit" name="submit" value="REGISTER"class="btn btn-success px-4 py-2 ">
                     </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>
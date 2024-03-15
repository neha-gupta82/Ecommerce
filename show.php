<?php
session_start();
include('header.php');

$con=mysqli_connect('localhost','root','','gavaiswad');
$id=$_SESSION['user'];
$query="select * from tbl_reg where id='$id'";
$res=mysqli_query($con,$query);
?>

<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-7 mx-auto">
                <table class="table table-stripped">
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>City</th>
                        <th>File Name</th>
                        <th>Status</th>
                        <th>DOR</th>

                    </tr>
                    <?php
                    if($row=mysqli_fetch_array($res))
                    {

                    
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['mobile'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['password'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['dob'];?></td>
                        <td><?php echo $row['city'];?></td>
                        <td><?php echo $row['profile'];?></td>
                        <td><?php echo $row['status'];?></td>
                        <td><?php echo $row['dor'];?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>
<?php
$con=mysqli_connect('localhost','root','','gavaiswad');
$query="select * from add_products order by id";
$res=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="images/fav_icon.png" rel="icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
       <style>
        #outer {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background-color: gray;
            padding: 60px 30px 40px 60px;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 60px;
            background-color: black;
            display: flex;
            justify-content: space-between;
         
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 30px;
            background-color: black;
            display: flex;
        }

        #left {
            position: fixed;
            top: 60px;
            bottom: 30px;
            width: 50px;
            background-color: black;
            transition: width 2s ease;
            z-index: 9999;
            left: 0;

        }

        #check:checked~#left {
            width: 200px;
        }

        #right {
            position: fixed;
            top: 60px;
            bottom: 30px;
            width: 0;
            left:0;
            background-color: rgba(0, 0, 0, 0.5);
            /* transition: all  0.8s linear; */
            z-index: 999;
        }

        #check:checked~#right {
            width: 100%;


        }

        #left ul {
            list-style-type: none;
            padding: 0;
        }

        #left ul li {
            padding: 15px;
        }

        #left ul li a {
            text-decoration: none;
            color: white;

            display: flex;
        }

        #left ul li a span {
            display: inline-block;
            overflow: hidden;
            width: 0;
            transition: all 2s ease;
        }

        #check:checked~#left ul li a span {
            width: 150px;
            padding-left: 20px;


        }
        #body{
            position: fixed;
            top:60px;
            right: 0;
            bottom: 40px;
            left: 60px;
            width: auto !important;
            /* overflow-y:auto; */
        }
        .card{
            z-index: 99;
            height: 100%;
            /* background-color: ; */
        }
        .dropdown:hover>.dropdown-menu{
            display: block;

        }
        #check:checked~#left ul li.dropdown:hover>.dropdown-menu{
            display: block;

        }
        .delete
        {
            text-decoration:none;
            color:white;
            background-color:green;
            padding:10px;
           
        }
        .edit
        {
            text-decoration:none;
            color:white;
            background-color:blue;
            padding:10px;
           
        }
        .block
        {
            text-decoration:none;
            color:white;
            background-color:red;
            padding:10px;
           
        }
    </style>
</head>

<body>
    <div id="outer">
        <header>
           <span class="pt-2 pe-2 px-2"> <label for="check" class="btn btn-outline-light"><span><i class="bi bi-list"></i></span></label></span>
        <h2>Admin</h2>
        <ul>
        <li class="dropdown px-5 py-1" ><button class="btn btn-outline-light p-0 rounded-circle"><img src="../images/gavai_logo.png" alt="" class="rounded-circle" height="45px" width="45px"/></button>
        <ul class="dropdown-menu bg-dark">
            <li><a href="#">Change Password</a></li>
            <li><a href="#" style="z-index: 9999;">Logout</a></li></li>
      
        </ul>

    </ul>
        </header>
        <main>
            <input type="checkbox" id="check" hidden/>
            <div id="left">
                <ul>
                <li><a href="dashboard.php" class="d-flex"><i class="bi bi-speedometer2"></i><span>Dashboard</span></a></li>
    <li><a href="category.php" class="d-flex"><i class="bi bi-bookmarks-fill"></i><span>Category</span></a></li>
    <li><a href="showuser.php" class="d-flex"><i class="bi bi-people-fill"></i><span>Users</span></a></li>
     <li  class="dropdown"><a href=""><i class="bi bi-gift"></i><span>Products</span></a>
                        <ul class="dropdown-menu bg-dark">
                            <li><a href="add_products.php">Add Products</a></li>
                            <li><a href="showproducts.php">Show Products</a></li>
                        </ul>
    </li>
                    <li  class="dropdown"><a href=""><i class="bi bi-person"></i><span>Admin</span></a>
                        <ul class="dropdown-menu bg-dark">
                            <li><a href="#">Change Password</a></li>
                            <li><a href="adminlogout.php">Logout</a></li>
                        </ul>
    </li>
                        
                </ul>

            </div>
            <div id="right"></div>

            <div id="body" class="container-fluid overflow-y-auto">
                <div class="row">
                    <div class="col-sm-11 mx-auto p-3 rounded bg-white">
                        <table id="example" class="table " >
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Offer</th>
                                <th>File Name</th>
                                <th>Category</th>
                                <th>DOR</th>
                                <th>Delete</th>
                                <th>Edit</th>
                                <th>Block</th>
                            </tr>
    </thead>
                            <?php
                            $a=1;
                            while($row=mysqli_fetch_array($res))
                            {
                            ?>
                            <tbody>
                            <tr class=>
                                <td><?php echo $a;?></td>
                                <td><?php echo $row['p_name'];?></td>
                                <td><?php echo $row['description'];?></td>
                                <td><?php echo $row['price'];?></td>
                                <td><?php echo $row['stock'];?></td>
                                <td><?php echo $row['offer'];?></td>
                                <td><?php echo $row['filename'];?></td>
                                <td><?php echo $row['category'];?></td>
                                <td><?php echo $row['doa'];?></td>
                                <td class="delete"><a href="delete.php?id=<?php echo $row['id'];?>" class=""><img src="images/delete.png" height="30px"/></a></td>
                                <td><a href="#" class=""><img src="images/edit.png" height="30px"/></a></td>
                                <td><a href="#" class=""><img src="images/block.png" height="30px"/></a></td>
                            </tr>
                            <?php
                            $a++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                      
            </div>

        </main>
        <footer></footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
new DataTable('#example');
</script>
</body>

</html>
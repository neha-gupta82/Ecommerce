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
        <div class="main" >
        <input type="checkbox" id="check" hidden/>
    <div id="left">
   <ul>
    <li><a href="dashboard.php" class="d-flex"><i class="bi bi-speedometer2"></i><span>Dashboard</span></a></li>
    <li><a href="category.php" class="d-flex"><i class="bi bi-bookmarks-fill"></i><span>Category</span></a></li>
    <li><a href="#" class="d-flex"><i class="bi bi-people-fill"></i><span>Users</span></a></li>
    <li><a href="add_products.php" class="d-flex"><i class="bi bi-gift"></i><span>Products</span></a></li>
    <li><a href="showproducts.php" class="d-flex"><i class="bi bi-gift"></i><span>Products</span></a></li>
    <li  class="dropdown"><a href=""><i class="bi bi-person"></i><span>Admin</span></a>
                        <ul class="dropdown-menu bg-dark">
                            <li><a href="#">Change Password</a></li>
                            <li><a href="adminlogout.php" class="d-flex"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                        </ul>
                        </ul>
    </div>
    <div id="right">
    </div>
       <div id="body" class="container-fluid overflow-y-auto">
       <div class="row">
         <div class="col-sm-5 mx-auto pt-3 px-4 my-4 py-3 rounded text-center shadow" style="background-color:aliceblue;">
         <h3 class="text-center p-3">Add Category</h3>
            <form action="" class="">
                <input type="text" class="form-control mb-4" placeholder="Add Category" >
<input type="submit" class="btn btn-success px-5 ">
            </form>
         </div>
       </div>
    </div>
</div>
        <footer></footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
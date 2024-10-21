<?php
    session_start();
    include "./connect.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>

    <style>
        .fpass{
            display: block;
            color: #0dd3f7;
            text-align: end;
            width: 100%;
            margin-bottom: 15px;
            font-size: 24px;
            letter-spacing: 1.5px;
        }
        .form-control{
            color: #0dd3f7 !important;
        }
    </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cake - Bakery</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

        <!-- Style -->
        <link rel="stylesheet" href="./assets/css/style.css">

        <!-- Login Css -->
        <link rel="stylesheet" href="./assets/css/login.css">

    </head>

    <body>

        <!-- Header  -->
        <header style="z-index: 999;">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-2">
                        <div class="logo">
                            <a href="#">
                                <img src="./assets/images/home/logo/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-10">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <ul class="collapse navbar-collapse" id="navbarSupportedContent">
                                <li class="nav-item">
                                    <a class="nav-link" href="./index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./product.php">All Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./menu.php">Menu</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">About Us</a>
                                    <ul class="dropdown-menu-1">
                                        <hr>
                                        <li>
                                            <a class="dropdown-item" href="./about.php">About Us</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a class="dropdown-item" href="./ourchefs.php">Our Chefs</a>
                                        </li>
                                        <hr>
                                    </ul>
                                </li>
                                <li class="nav-item ms-auto">
                                    <a class="nav-link" href="./service.php">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./offer.php">What We Make</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./contact.php">Contact Us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link active">Log In</a>
                                    <ul class="dropdown-menu-1">
                                        <hr>
                                        <li>
                                            <a class="dropdown-item" href="./login.php">User Login</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a class="dropdown-item" href="./admin-login.php">Admin</a>
                                        </li>
                                        <hr>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>


        <!-- Login-area -->
        <div class="login-area" style="height: 85vh;">

            <video autoplay loop muted plays-inline class="clip" src="./assets/images/login/login-bg.mp4"></video>

            <div class="login">
                <h1>Update Password</h1>
                <form method="POST" action="./forgotpass.php">
                    <input type="email" name="email" placeholder="Enter Email Address" class="form-control my-3">
                    <input type="password" name="opass" placeholder="Enter Old Password" class="form-control mb-3">
                    <input type="password" name="npass" placeholder="Enter New Password" class="form-control mb-5">
                    <input type="submit" name="submit" value="Submit" class="submit mt-5"> 
                </form>
            </div>
        </div>
    </body>


    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</html>

<?php

    if(isset($_REQUEST['submit'])){

        $email = $_POST['email'];
        $old_pass = $_POST['opass'];
        $new_pass = $_POST['npass'];


        $fpass = mysqli_query($conn, "select pass from registeruser where email = '$email'");

        if(mysqli_num_rows($fpass) == 1){

            $update_pass = mysqli_query($conn, "update registeruser set pass = '$new_pass' where email = '$email'");

            if($update_pass){

                echo "<script>alert('Password Updated Successfully.')</script>";
                header("location:./login.php");
            }else{
                echo "<script>alert('Failed To Updated Successfully.</script>";
            }

        }else{
            
            echo "<script>alert('Username Or Old Password Must Be Wrong..!!');</script>";
        }

    }

?>
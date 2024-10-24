<?php include "./connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .form-control{
                color: #0dd3f7 !important;
            }
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cake - Bakery</title>

        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="./assets/css/style.css">

        <link rel="stylesheet" href="./assets/css/login.css">
    </head>
    <body>

        <!-- Header  -->
        <header>
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
                                    <a class="nav-link active" href="./index.php">Home</a>
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
                                    <a class="nav-link">Log In</a>
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

        <div class="login-area" style="height: 85vh;">

            <video autoplay loop muted plays-inline class="clip" src="./assets/images/login/login-bg.mp4"></video>

            <div class="login">
                <h1>Register</h1>
                <form method="POST" action="./register.php">
                    <input type="text" name="name" placeholder="Enter Your Full Name" class="form-control mt-4 mb-3"  required>
                    <input type="email" name="email" placeholder="Enter Your Email" class="form-control my-3" required>
                    <input type="password" name="pass" placeholder="Enter Password" class="form-control my-3" required>
                    <input type="password" name="cpass" placeholder="Enter Confirm Password" class="form-control mb-5" required>
                    <input type="submit" name="login" value="Submit" class="submit"> 
                </form>
                <p>Already have an account? <a href="./login.php">Login</a> Here</p>
            </div>
        </div>
    </body>


    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</html>

<?php

    if(isset($_REQUEST['login'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = mysqli_query($conn, "insert into registeruser(name, email, pass) values ('$name', '$email', '$pass')");
        
        if($pass == $cpass){
            
            header("location:login.php");
        }else{
            
            echo "<h1>Password And Confirm Password Does Not Match</h1>";
        }
        

        if($sql){

            header("location: ./login.php");
        }

    }

?>
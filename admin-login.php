<?php

    session_start();

    include "./connect.php";

    if(isset($_REQUEST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = mysqli_query($conn, "select * from adminlogin where email = '$email' and pass = '$password'");

        $row = mysqli_fetch_array($login);

        $count = mysqli_num_rows($login);

        if($count == 1){

            $_SESSION['email'] = $row['email'];
            header("location:./dashboard.php");
        }else{
             
            echo "<script>alert('Username Or Password Must Be Wrong..!!');</script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cake - Bakery</title>

        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="./assets/css/login.css">
    </head>
    <body>
        <div class="login-area">

            <video autoplay loop muted plays-inline class="clip" src="./assets/images/login/login-bg.mp4"></video>

            <div class="login">
                <h1>Admin Login</h1>
                <form method="POST" action="./admin-login.php"  style="width: auto;">
                    <input type="email" name="email" placeholder="Enter Email Address" class="form-control my-3">
                    <input type="password" name="password" placeholder="Enter Password" class="form-control mb-5">
                    <input type="submit" name="submit" value="Submit" class="submit"> 
                </form>
            </div>
        </div>
    </body>


    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</html>
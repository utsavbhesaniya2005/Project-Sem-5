<?php include "./connect.php"; ?>
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
                <h1>Register</h1>
                <form method="POST" action="./register.php">
                    <input type="text" name="name" placeholder="Enter Your Full Name" class="form-control mt-4 mb-3"  required>
                    <input type="email" name="email" placeholder="Enter Your Email" class="form-control my-3" required>
                    <input type="password" name="pass" placeholder="Enter Password" class="form-control my-3" required>
                    <input type="password" name="cpass" placeholder="Enter Confirm Password" class="form-control mb-5" required>
                    <input type="submit" name="login" value="Submit" class="submit"> 
                </form>
                <p>Already have an account? <a href="./register.php">Login</a> Here</p>
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
        $cpass = $_POST['cpass'];

        $sql = mysqli_query($conn, "insert into registeruser(name, email, pass, cpass) values ('$name', '$email', '$pass', '$cpass')");
        
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
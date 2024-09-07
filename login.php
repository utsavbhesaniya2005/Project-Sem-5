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
                <h1>Login</h1>
                <form method="POST">
                    <input type="email" name="username" placeholder="Enter Email Address" class="form-control my-3" required>
                    <input type="password" name="password" placeholder="Enter Password" class="form-control mb-5" required>
                    <input type="submit" name="login" value="Submit" class="submit"> 
                </form>
                <p>Not have an account? <a href="./register.php"> SignUp Here</a></p>
            </div>
        </div>
    </body>


    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</html>

<?php

    if(isset($_REQUEST['login'])){

        session_start();

        $username = $_POST['username'];
        $password = $_POST['password'];

        $login = mysqli_query($conn, "select * from registeruser where name = '$username' and pass = '$password'");

        $row = mysqli_fetch_array($login);

        $count = mysqli_num_rows($login);

        if($count == 1){

            $_SESSION['username'] = $row['name'];
            header("location:./index.php");
        }else{

            echo " <script> alert('Username Or Password Must Be Wrong..!!'); </script> ";
        }

    }

?>
<script>
   
</script>
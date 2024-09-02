<?php include "./connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form method="post">
        Username : <input type="text" name="username">
        Password : <input type="password" name="password">
        <input type="submit" value="Login" name="login">
    </form>

</body>
</html>

<?php

    if(isset($_REQUEST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $login = mysqli_query($conn, "select * from registeruser where name = '$username' and pass = '$password'");

        $row = mysqli_fetch_array($login);

        $count = mysqli_num_rows($login);

        if($count == 1){

            $_SESSION['user'] = $row['name'];
            header("location:./index.html");
        }else{

            echo "Username Or Password Are Incorrect..!!";
            header("location:./login.php");
        }

    }

?>
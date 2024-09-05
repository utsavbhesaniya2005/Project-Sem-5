<?php include "./connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
    <form method="post">
        User name: <input type="text" name="uname"><br><br>
        Email: <input type="email" name="email"><br><br>
        Password: <input type="password" name="pass"><br><br>
        Confirm Password: <input type="password" name="cpass"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>

</body>
</html>

<?php

    if(isset($_REQUEST['submit'])){

        $name = $_POST['uname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        $sql = mysqli_query($conn, "insert into registeruser(name, email, pass, cpass) values ('$name', '$email', '$pass', '$cpass')");

        if($pass == $cpass){

            header("location:login.php");
        }else{

            echo "<h1>Password And Confirm Password Does Not Match</h1>";
        }

    }

?>
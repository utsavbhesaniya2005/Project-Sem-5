<?php include "./connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        .form-control{
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #dee2e6;
            border-radius: 6px;
        }
        .btn{
            display: block;
            width: 100%;
            padding: 7px 0;
            border: 3px solid white;
            background-color: #3f3333;
            color: white;
            font-size: 28px;
            font-weight: 600;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-radius: 8px;
            letter-spacing: 2px;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }
        .btn:hover{
            color: #0dd3f7;
            border: 3px solid #0dd3f7;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Bakery Management System</title>

    <!-- Favicon Link -->
    <link rel="shortcut icon" href="./assets/images/home/logo/fav-icon.png" type="image/x-icon">

    <!-- Font Link -->
    <link rel="stylesheet" href="./assets/css/font.css">

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="./assets/css/all.min.css">

    <!-- Css Link -->
    <link rel="stylesheet" href="./assets/css/dashboard.css">

</head>

<body>
    <main>

        <?php include "./header_sidebar.php" ?>
        
        <!-- page-body -->
        <div class="page-body">
        <h1 style="text-align: center; width: 100%;color:#5798b0;margin-bottom:100px;font-weight:700">Update User Data</h1>
            <form action="userupdate.php" method="post">
                <table>
                    <input type="number" value="<?php
                                    $id = $_GET['id']; 
                                    $sql = "select * from registeruser limit 1";
                                    $run = mysqli_query($conn,$sql);
                                    if($run)
                                    {
                                        if(mysqli_num_rows($run) > 0)
                                        {
                                            while($row = mysqli_fetch_array($run))
                                            {
                                            echo "$id";
                                            }
                                        }
                                        else
                                        {
                                            echo "No Records Found...";
                                        }
                                    }
                                    else
                                    {
                                        echo "Error Has Been Occurred...";
                                    }
                                ?>" name="id" class="form-control"><br>
                        <input type="text" name="uname" placeholder="Enter Your Name"  class="form-control"><br>
                    <input type="email" name="email" placeholder="Enter User Email" class="form-control"><br>
                    <input type="password" name="pass" placeholder="Enter User Password" class="form-control"><br>
                    <input type="submit" value="Update Data" name="updatedata" class="btn">
                </table>
            </form>
        </div>

    </main>

</body>

</html>
<?php 
    
    if (isset($_POST['updatedata'])){

        $id = $_GET['id'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    
        if (!empty($id) && !empty($uname) && !empty($email) && !empty($pass)){

            $sql = "update registeruser set name='$uname', email='$email', pass='$pass' where id=$id";
            $result = mysqli_query($conn, $sql);
    
            if($result){

                echo "<script>alert('User Data Updated Successfully!')</script>
                ";
                echo "<script>window.location.href = './dashboard.php';</script>";
            }else{

                "<script>alert('Error: Could not update user data.')</script>";
            }
        } else {
            echo "Please fill in all fields.";
        }
    }

?>
<?php

    include "./connect.php"; 

    $id = $_GET['id']; 
    $sql_query = "delete from addproduct where product_id=$id"; 
    $result = mysqli_query($conn, $sql_query); 

    if($result){

        if($result){

            echo "<script>alert('User Data Deleted Successfully!')</script>
            ";
            echo "<script>window.location.href = './showproduct.php';</script>";
        }else{

            "<script>alert('Error: Could not Delete user data.')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .container{
            background-color: #fff;
            margin: 50px auto;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            width: 700px;
            text-align: center;
            border: inset 5px;
            box-shadow: 3px 3px 5px 6px #ccc;
        }
        .container h1{
            margin: 10px 0px;
            text-align: center;
            font-family: var(--other-font-family);
            font-size: 40px;
            color: var(--main-color);
        }
        label{
            font-weight: 500;
            display: block;
            margin-bottom: 2px;
        }
        input,select{
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px 5px;
            width: 100%;
            outline: none;
        }
        select{
            height: 28px;
            width: 300px;
        }
        .add{
            display: block;
            width: 100%;
            margin-top: 20px;
            padding: 20px 0;
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            color: rgb(236, 236, 236);
            background-color: var(--main-color);
            border-radius: 10px;
            border: none;
            transition: all 0.2s linear;
        }
        .add:hover{
            color: #5798b0;
            border: 3px solid #5798b0;
            background-color: white;
            border-radius: 10px;
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
            <div class="container">
                <hr>
                <hr>
                <h1>Remove Product</h1>
                <hr>
                <hr>
                <br>
                <form action="deleteproduct.php" method="post">

                    <label>Enter Product Id:</label>
                    <input type="number" name="proid">
                    <br>

                    <input type="submit" value="Delete Product" name="deleteproduct" class="add">
                </form>

                <br>
                
            </div>
        </div>

    </main>

</body>

</html>
<?php 

    if(isset($_POST['deleteproduct']))
    {
        $proid = $_POST['proid'];

        $sql = "delete from addproduct where product_id='$proid'";

        $run = mysqli_query($conn,$sql) or die("Error Has Been Occurred");

        if($run){

            echo "<script>alert('Product Removed Successfully..')</script>";
        }else{

            echo "<script>alert('Error: Product Not Removed..!')</script>";
        }
        
    }

?>
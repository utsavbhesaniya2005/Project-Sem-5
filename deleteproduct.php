<html>
    <head>
        <style>
            .btn{
                cursor:pointer;
                width: 100%;
                padding: 7px 15px;
                text-align: center;
                border: 3px solid red;
                background-color: transparent;
                color: red;
                font-size: 28px;
                font-weight: 600;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                border-radius: 8px;
                cursor: pointer;
                transition: all 0.2s ease-in-out;
            }
            h1{
                margin: 20px 0px;
                margin-bottom: 50px;
                text-align: center;
                font-family: var(--other-font-family);
                font-size: 40px;
                color: var(--main-color);
            }
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - Bakery Management System</title>

        <!-- Favicon Link -->
        <link rel="shortcut icon" href="./assets/images/home/logo/fav-icon.png" type="image/x-icon">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="./assets/css/all.min.css">

        <!-- Css Link -->
        <link rel="stylesheet" href="./assets/css/dashboard.css">
    
    </head>
<body>
        <?php include "./header_sidebar.php"; ?>
                
        <div class="page-body">
            <h1>Delete Product</h1>
        <?php


            include "./connect.php";

            if (isset($_POST["query"])) {
                $search = $_POST["query"];
                $sql = "select * from addproduct where proname like '%$search%'";
            } else {
              
                $sql = "select * from addproduct";
            }

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table class='table' style='width:100%'>
                        <tr style='background-color: var(--main-color);color: var(--white);'>
                            <th style='padding: 10px;text-align: center;font-size: 18px;'>Product Id</th>
                            <th>Product Name</th>
                            <th>Product Original Price</th>
                            <th>Product Current Price</th>
                            <th>Product Discount</th>
                            <th>Product Image</th>
                            <th colspan='2'>Actions</th>
                        </tr>";

                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>
                            <td style='background-color: var(--normal-color);color: var(--white);text-align:center;padding: 20px;'>".$row[0]."</td>
                            <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>".$row[1]."</td>
                            <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>".$row[2]."</td>
                            <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>".$row[3]."</td>
                            <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>".$row[4]."</td>
                            <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'><img src='$row[5]' alt='Choose Image' id='img' name='img' style='height: 150px; width: 150px;'
                            ></td>
                            <td style='background-color: var(--normal-color);color: var(--white);text-align:center;padding:10px;'>
                                <form method='POST' action='deleteproduct.php'>
                                    <a href='./deleteproduct.php?id=".$row[0]."' class='btn'><i class='fa-solid fa-trash-can'></i></a>
                                </form>
                            </td>
                        </tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No records found</p>";
            }
        ?>
        </div>
</body>
</html>
<?php 

    include "./connect.php"; 
    $id = $_GET['id']; 
    $sql = "delete from addproduct where product_id=$id"; 
    $result = mysqli_query($conn, $sql); 

    if($result){

        if($result){

            echo "<script>alert('User Data Deleted Successfully!')</script>
            ";
            echo "<script>window.location.href = './showproduct.php';</script>";
        }else{

            "<script>alert('Error: Could not Delete user data.')</script>";
        }
    }


    if(isset($_POST['deleteproduct']))
    {
        $proid = $_POST['proid'];

        $sql = "delete from addproduct where product_id='$id'";

        $run = mysqli_query($conn,$sql) or die("Error Has Been Occurred");

        if($run){

            echo "<script>alert('Product Removed Successfully..')</script>";
        }else{

            echo "<script>alert('Error: Product Not Removed..!')</script>";
        }
        
    }

?>
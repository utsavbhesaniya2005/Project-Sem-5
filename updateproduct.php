<?php include "./connect.php"; ?>
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
                <h1>Update Product</h1>
                <hr>
                <hr>
                <br>
                <form action="updateproduct.php" method="post" enctype="multipart/form-data">

                    <label>Enter Product Id:</label>
                    <input type="number" value="<?php
                                    $id = $_GET['id']; 
                                    $sql = "select * from addproduct limit 1";
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
                                ?>" name="proid">
                    <br>

                    <br>
                    <label>Enter Product Name:</label>
                    <input type="text" name="proname">
                    <br>

                    <br>
                    <label>Enter Current-Price:</label>
                    <input type="number" name="procprice">
                    <br>

                    <br>
                    <label>Enter Original-price:</label>
                    <input type="number" name="proprice">
                    <br>

                    <br>
                    <label>Enter Product Discount:</label>
                    <input type="text" name="prodiscount">
                    <br><br>

                    <label>Choose Product Image: </label>
                    <input type="file" name="proimage" id="upload"><br><br>
                    <img src="./assets/images/cake/delightful-and-delicious-fruit-cake.webp" alt="Choose Image" id="img" name="img"><br><br>

                    <input type="submit" value="Update Product" name="updateproduct" class="add">
                </form>

                <br>
                
            </div>
        </div>

    </main>


    <script src="./assets/js/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#img").click(function(){
            $("#upload").click();
        });

        $("#upload").change(function(){
            const file = this.files[0];
            url = URL.createObjectURL(file);
            $("#img").attr('src',url);
        });
    });
    </script>
</body>

</html>
<?php 

    if(isset($_POST['updateproduct']))
    {
        $proid = $_POST['proid'];
        $proname = $_POST['proname'];
        $procprice = $_POST['procprice'];
        $proprice = $_POST['proprice'];
        $prodiscount = $_POST['prodiscount'];
        $image = $_FILES['proimage']['name'];

        $dir = "./uploads/";
        $file = $dir.basename($image);
        
        if(move_uploaded_file($_FILES['proimage']['tmp_name'],$file))
        {
            $sql = "update addproduct set proname='$proname', procprice='$procprice', proprice='$proprice', prodiscount='$prodiscount', proimage='$file' where product_id=$proid";

            $run = mysqli_query($conn,$sql) or die("Error Has Been Occurred");

            if($run){

                echo "<script>alert('Product Updated Successfully..')</script>";
            }else{

                echo "<script>alert('Error: Product Not Updated..!')</script>";
            }
        }
    }

?>
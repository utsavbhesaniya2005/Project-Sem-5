<?php include "./connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

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

        <?php include "./header_sidebar.php"; ?>

        <!-- Page Body -->
        <div class="page-body">
            <div class="row">
                <div class="user-data">
                    <?php
                        $sql = "select * from addproduct";
                        $run = mysqli_query($conn,$sql);
                        if($run)
                        {
                            if(mysqli_num_rows($run) > 0)
                            {
                                
                                echo "<table class='table' style='width:100%'>
                                        <tr style='background-color: var(--main-color);color: var(--white);
                                        '>
                                            <th style='padding: 10px;
                                            text-align: center;
                                            font-size: 18px;'>Product Id</th>
                                            <th>Product Name</th>
                                            <th>Product Current-Price</th>
                                            <th>Product Original-Price</th>
                                            <th>Product Discount</th>
                                            <th>Product Image</th>
                                            <th colspan='2'>Actions</th>
                                        </tr>";
                                while($row = mysqli_fetch_array($run))
                                {
                                echo "<tr>
                                    <td style='background-color: var(--normal-color);color: var(--white);margin-top: 50px;text-align:center;'>$row[0]</td>
                                    <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>$row[1]</td>
                                    <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>$row[2]</td>
                                    <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>$row[3]</td>
                                    <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>$row[4]</td>
                                    <td style='background-color: var(--normal-color);color: var(--white);text-align:center;
                                    '><img src='$row[5]' alt='Choose Image' id='img' name='img' style='height: 150px;
                                    width: 150px;'
                                    '></td>
                                    <td style='background-color: var(--normal-color);color: var(--white);text-align:center;
                                    padding:10px;
                                    display: flex;justify-content: space-around;height: 158px;
                                    width: 1;align-items:center;column-gap: 15px;'>
                                        <a href='./updateproduct.php?id={$row[0]}' style='cursor:pointer;
                                        width: 100%;
                                        padding: 7px 15px;
                                        border: 3px solid #5798b0;
                                        background-color: transparent;
                                        color: #5798b0;
                                        font-size: 28px;
                                        font-weight: 600;
                                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                        border-radius: 8px;
                                        letter-spacing: 2px;
                                        cursor: pointer;
                                        transition: all 0.2s ease-in-out;'><i class='fa-regular fa-pen-to-square'></i></a>



                                        <a href='./deleteproduct.php?id={$row[0]}' style='cursor:pointer;
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
                                        transition: all 0.2s ease-in-out;'><i class='fa-solid fa-trash-can'></i></a>
                                    </td>
                                </tr>";
                                }
                                echo "</table>";
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
                    ?>
                </div>
            </div>
        </div>

    </main>

</body>
</html>
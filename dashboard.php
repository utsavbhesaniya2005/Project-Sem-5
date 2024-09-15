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

        <?php include "./header_sidebar.php" ?>

        <!-- page-body -->
        <div class="page-body">
            
            <!-- Dashboard -->
            <div class="dashboard">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="order-list">
                                <i class="fa-regular fa-clock"></i>
                                <p>Pending Orders</p>
                                <span>14</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="order-list">
                                <i class="fa-solid fa-basket-shopping"></i>
                                <p>Completed Orders</p>
                                <span>32</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="order-list">
                                <i class="fa-solid fa-arrows-rotate"></i>
                                <p>Refund Requests</p>
                                <span>74</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="order-list">
                                <i class="fa-solid fa-envelope-open-text"></i>
                                <p>New Comments</p>
                                <span>25</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="content">
                                <?php
                                    $sql = "select * from registeruser";
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
                                                        font-size: 18px;'>User Id</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Password</th>
                                                        <th colspan='2'>Actions</th>
                                                    </tr>";
                                            while($row = mysqli_fetch_array($run))
                                            {
                                            echo "<tr>
                                                <td style='background-color: var(--normal-color);color: var(--white);margin-top: 50px;text-align:center;'>$row[0]</td>
                                                <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>$row[1]</td>
                                                <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>$row[2]</td>
                                                <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>$row[3]</td>
                                                <td style='background-color: var(--normal-color);color: var(--white);text-align:center;
                                                padding:10px;
                                                display: flex;justify-content: space-around;align-items:center;'>
                                                    <a href='./userupdate.php?id={$row[0]}' style='cursor:pointer;
                                                    width: 45%;
                                                    padding: 7px 0;
                                                    border: 3px solid white;
                                                    background-color: transparent;
                                                    color: white;
                                                    font-size: 28px;
                                                    font-weight: 600;
                                                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                                    border-radius: 8px;
                                                    letter-spacing: 2px;
                                                    cursor: pointer;
                                                    transition: all 0.2s ease-in-out;'>Update</a>



                                                    <a href='./deleteuser.php?id={$row[0]}' style='cursor:pointer;
                                                    width: 45%;
                                                    padding: 7px 0;
                                                    border: 3px solid white;
                                                    background-color: transparent;
                                                    color: white;
                                                    font-size: 28px;
                                                    font-weight: 600;
                                                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                                    border-radius: 8px;
                                                    letter-spacing: 2px;
                                                    cursor: pointer;
                                                    transition: all 0.2s ease-in-out;'>Delete</a>
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
                </div>
            </div>

        </div>

    </main>

</body>

</html>
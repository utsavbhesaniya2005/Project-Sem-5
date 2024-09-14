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

    <header>
            <div class="row items-center justify-between">
                <div class="navbar-left">
                    <div class="toggle-menu">
                        <a href="javascript:void(0);">
                            <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                                <rect x="0.48" y="0.5" width="7" height="1"></rect>
                                <rect x="0.48" y="7.5" width="7" height="1"></rect>
                                <rect x="0.48" y="15.5" width="7" height="1"></rect>
                            </svg>

                            <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                                <rect x="1.56" y="0.5" width="16" height="1"></rect>
                                <rect x="1.56" y="7.5" width="16" height="1"></rect>
                                <rect x="1.56" y="15.5" width="16" height="1"></rect>
                            </svg>
                        </a>
                    </div>
                    <div class="search-bar">
                        <input type="text" placeholder="Search">
                        <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </div>
                </div>
                <div class="logo">
                    <a href="javascript:void(0);">
                        <img src="./assets/images/home/logo/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="navbar-right">
                    
                    <div class="icons">
                        <div class="fullscreen">
                            <a href="javascript:void(0);" id="expand">
                                <i class="fa-solid fa-expand"></i>
                                <i class="fa-solid fa-minimize"></i>
                            </a>
                        </div>
                    </div>
                    <div class="profile">
                        <a href="javascript:void(0);">
                            <span>Sarah Kortney</span>
                        </a>
                        <nav>
                            <ul>
                                <li class="dropdown">
                                    <a href="index.html">Log out</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>


        <!-- sidebar -->
        <div class="sidebar">
            <div class="menubar">
                <ul>
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Add Product</a>
                    </li>
                    <li>
                        <a href="#">Update Product</a>
                    </li>
                    <li>
                        <a href="#">Remove Product</a>
                    </li>
                    <li>
                        <a href="#">Show Product</a>
                    </li>
                </ul>
            </div>
        </div>
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
                                            
                                            echo "<table class='table'>
                                                    <tr>
                                                        <th style='background-color: #5798b0;color: white;'>Id</th>
                                                        <th style='background-color: #5798b0;color: white;'>Username</th>
                                                        <th style='background-color: #5798b0;color: white;'>Email</th>
                                                        <th style='background-color: #5798b0;color: white;'>Password</th>
                                                    </tr>";
                                            while($row = mysqli_fetch_array($run))
                                            {
                                            echo "<tr>
                                                <td style='color: #242424;'>$row[0]</td>
                                                <td style='color: #242424;'>$row[1]</td>
                                                <td style='color: #242424;'>$row[2]</td>
                                                <td style='color: #242424;'>$row[3]</td>
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


    
    <script src="./assets/js/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            // profile dropdown
            $(".profile").click(function () {
                $(".profile nav ul").toggleClass("block");
                $(".notification nav ul").removeClass("block");
                $(".lan nav ul").removeClass("block");
                $(".lan a").removeClass("lan-color");
                $(".grid nav ul").removeClass("block");
            });


            // fullscreen btn
            $(".fullscreen").click(function () {
                $(".fa-expand").toggleClass("none");
                $(".fa-minimize").toggleClass("inline");
            });

            // sidebar slide
            $(".toggle-menu").click(function () {
                $(".sidebar").toggleClass("close-sidebar");
                $(".sub").toggleClass("black");
                $(".dashboards-dropdown").toggleClass("none");
                $(".pages-dropdown").toggleClass("none");
            });

        });
    </script>
    <script>
        let fullscreen;
        let fsEnter = document.getElementById("expand");
        fsEnter.addEventListener("click", function (e) {
            e.preventDefault();
            if (!fullscreen) {
                fullscreen = true;
                document.documentElement.requestFullscreen();
            } else {
                fullscreen = false;
                document.exitFullscreen();
            }
        });
    </script>

</body>

</html>
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
                            <span>Welcome, <?php
                                        $sql = "select * from adminlogin";
                                        $run = mysqli_query($conn,$sql);
                                        if($run)
                                        {
                                            if(mysqli_num_rows($run) > 0)
                                            {
                                                while($row = mysqli_fetch_array($run))
                                                {
                                                    echo $row[1];
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
                                    ?></span>
                        </a>
                        <nav>
                            <ul>
                                <li class="dropdown">
                                    <a href="./logout.php">Logout</a>
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
                        <a href="./dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="./addproduct.php">Add Product</a>
                    </li>
                    <li>
                        <a href="./updateproduct.php">Update Product</a>
                    </li>
                    <li>
                        <a href="./deleteproduct.php">Remove Product</a>
                    </li>
                    <li>
                        <a href="./showproduct.php">Show All Product</a>
                    </li>
                </ul>
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
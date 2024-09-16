<?php   include "./connect.php";
        $query = mysqli_query($conn, "select * from registeruser");
?>

<!DOCTYPE html>
<html lang="en">

    <style>
        h1{
            margin: 20px 0px;
            margin-bottom: 50px;
            text-align: center;
            font-family: var(--other-font-family);
            font-size: 40px;
            color: var(--main-color);
        }
    </style>

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
            <h1>Dashboard</h1>
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
                    <div class="search-bar">
                        <input type="text" placeholder="Search User Details By Name" name="search_text" id="search_text">
                        <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </div>
                    <div id="result"></div>
                </div>
            </div>

        </div>

    </main>

</body>

</html>
<script src="./assets/js/jquery.min.js"></script>
<script>
$(document).ready(function()
{
        load_data();
        function load_data(query){
            $.ajax({
                url:"user_data_fetch.php",
                method:"POST",
                data:{query:query},
                success:function(data){
                    $('#result').html(data);
                }
            });
        }

        $('#search_text').keyup(function()
        {
            var search = $(this).val();
            if(search != '')
            {
                load_data(search);
            }
            else
            {
                load_data();
            }
        });
});

</script>
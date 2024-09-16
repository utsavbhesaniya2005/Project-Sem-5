<?php include "./connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

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
            <h1>Show All Product</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search User Details By Name" name="search_text" id="search_text">
                <span>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
            </div>
            <div id="result"></div>
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
                url:"product_fetch.php",
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
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
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - Bakery Management System</title>

        <!-- Favicon Link -->
        <link rel="shortcut icon" href="./assets/images/home/logo/fav-icon.png" type="image/x-icon">

        <!-- Css Link -->
        <link rel="stylesheet" href="./assets/css/dashboard.css">
    
    </head>
                
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
                                <a href='./updateproduct.php?id=".$row[0]."' class='btn' style='border: 3px solid #5798b0;color: #5798b0;margin-right:5px;'><i class='fa-regular fa-pen-to-square'></i></a>
                                <a href='./deleteproduct.php?id=".$row[0]."' class='btn'><i class='fa-solid fa-trash-can'></i></a>
                            </td>
                        </tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No records found</p>";
            }
        ?>
</html>
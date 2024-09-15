<html>
    <head>
        <style>
            .btn{
                cursor:pointer;
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
                $sql = "select * from registeruser where name like '%$search%'";
            } else {
              
                $sql = "select * from registeruser";
            }

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table class='table' style='width:100%'>
                        <tr style='background-color: var(--main-color);color: var(--white);'>
                            <th style='padding: 10px;text-align: center;font-size: 18px;'>User Id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th colspan='2'>Actions</th>
                        </tr>";

                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>
                            <td style='background-color: var(--normal-color);color: var(--white);text-align:center;padding: 20px;'>".$row[0]."</td>
                            <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>".$row[1]."</td>
                            <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>".$row[2]."</td>
                            <td style='background-color: var(--normal-color);color: var(--white);text-align:center;'>".$row[3]."</td>
                            <td style='background-color: var(--normal-color);color: var(--white);text-align:center;padding:10px;display: flex;column-gap: 15px;'>
                                <a href='./updateuser.php?id=".$row[0]."' class='btn'>Update</a>
                                <a href='./deleteuser.php?id=".$row[0]."' class='btn'>Delete</a>
                            </td>
                        </tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No records found</p>";
            }
        ?>
</html>
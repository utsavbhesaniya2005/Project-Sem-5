<?php 
    include "./connect.php"; 
    $id = $_GET['id']; 
    $sql_query = "delete from registeruser where id=$id"; 
    $result = mysqli_query($conn, $sql_query); 

    if($result){

        if($result){

            echo "<script>alert('User Data Deleted Successfully!')</script>
            ";
            echo "<script>window.location.href = './dashboard.php';</script>";
        }else{

            "<script>alert('Error: Could not Delete user data.')</script>";
        }
    }

?>

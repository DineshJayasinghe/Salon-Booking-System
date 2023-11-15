<?php
session_start();
include 'dbConnection.php';

if (isset($_POST['submit'])) {


    $Title =  $_POST["Title"];
    $price = $_POST["price"];
    $Category = $_POST["Category"];
    $Discription = $_POST["Discription"];
    $id = $_POST["id"];
   
    $sql = "UPDATE package SET title='$Title', price ='$price',Category='$Category',Discription='$Discription' WHERE id = '$id' ";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Package Update');
            window.location.href='../packageList.php';
            </script>";
    } else {
        echo "<script>
            alert('Package Not Update');
            window.location.href='../packageList.php';
            </script>";
        echo "ERROR: Could not able to execute $sql.";
    }
}

mysqli_close($conn);
?>
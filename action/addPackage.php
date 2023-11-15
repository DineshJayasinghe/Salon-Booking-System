
<?php
error_reporting(0);
?>
<?php
session_start();
include 'dbConnection.php';

if (isset($_POST['submit'])) {
    $msg = "";

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "image/" . $filename;

    if (move_uploaded_file($tempname, $folder)) {
       
   

    $Title =  $_POST["Title"];
    $price = $_POST["price"];
    $Category = $_POST["Category"];
    $Discription = $_POST["Discription"];


  

        $sql = "INSERT INTO package( title, price, Category, Discription, image)  VALUES('$Title','$price','$Category', '$Discription','$filename') ";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
            alert('Package Added');
            window.location.href='../packageList.php';
            </script>";
        } else {
            echo "<script>
            alert('Package Not Added');
            window.location.href='../packageList.php';
            </script>";
            echo "ERROR: Could not able to execute $sql.";
        }
    } else {
        $msg = "Failed to upload image";
    }
}

mysqli_close($conn);
?>
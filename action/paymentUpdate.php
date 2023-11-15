<?php
session_start();
include 'dbConnection.php';

if (isset($_POST['submit'])) {

    //$uname =  $_SESSION["uname"];
    $user = "User";
    $serviceType =  $_POST["serviceType"];
    $PaymentType = $_POST["PaymentType"];
    $Price = $_POST["Price"];
    $id = $_POST["id"];

    $sql = "UPDATE paymentdetails SET serviceType='$serviceType',price='$Price',payemntType='$PaymentType' WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Payment Update');
            window.location.href='../paymentList.php';
            </script>";
    } else {
        echo "<script>
            alert('Payment Not Update');
            window.location.href='../paymentList.php';
            </script>";
        echo "ERROR: Could not able to execute $sql.";
    }
}

mysqli_close($conn);

?>
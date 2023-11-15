<?php
session_start();
include 'dbConnection.php';

if (isset($_POST['submit'])) {

    //$uname =  $_SESSION["uname"];
    $user = "User";
    $serviceType =  $_POST["serviceType"];
	$serviceDetails =  $_POST["serviceDetails"];
    $PaymentType = $_POST["PaymentType"];
    $Price = $_POST["Price"];
   
    $sql = "INSERT INTO paymentdetails(  serviceType,serviceDetails, price, user,payemntType) VALUES('$serviceType','$serviceDetails','$Price', '$user','$PaymentType') ";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Payment Added');
            window.location.href='../paymentList.php';
            </script>";
    } else {
        echo "<script>
            alert('Payment Not Added');
            window.location.href='../paymentList.php';
            </script>";
        echo "ERROR: Could not able to execute $sql.";
    }
}

mysqli_close($conn);
?>
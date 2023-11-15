<?php
session_start();
include 'dbConnection.php';
if (isset($_POST['submit'])) {

    $uanme = $_SESSION["uname"];
    $fullname =  $_POST["fullname"];
    $email = $_POST["email"];
    $Address = $_POST["Address"];
    $nic = $_POST["nic"];
    $Province = $_POST["Province"];
    $tel = $_POST["tel"];
    // Close connection


    $sql = "UPDATE userprofile SET name='$fullname', email ='$email', address ='$Address', nic ='$nic', province ='$Province', contact ='$tel' WHERE uname='$uanme'";
    if (mysqli_query($conn, $sql)) {

        echo "<script>
                alert('Profile Updating Success');
                window.location = '../profile.php';
            </script>";
    } else {
        echo "<script>
                alert('Profile Updating Not Success');
                window.location = '../updateProfile.php';
            </script>"; 
        // echo "ERROR: Could not able to execute $sql.";
    }
}
// Close connection
mysqli_close($conn);
?>
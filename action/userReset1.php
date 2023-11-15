<?php
session_start();
include 'dbConnection.php';
if (isset($_POST['submit'])) {


    $uname =  $_POST["uname"];
    $password = $_POST["password"];
    $RPassword = $_POST["RPassword"];
    // Close connection

    if ($RPassword == $password) {
    $sql = "UPDATE user SET password='$password' WHERE username='$uname'";
    if (mysqli_query($conn, $sql)) {

        echo "<script>
                alert('Password Reset Success');
                window.location = '../profile.php';
            </script>";
    } else {
        echo "<script>
                alert('Password Reset Not Success');
                window.location = '../updatePassword.php';
            </script>"; 
        // echo "ERROR: Could not able to execute $sql.";
    }
    } else {
        echo "<script>
            alert('Passwords Are Not Matching');
            window.location = '../updatePassword.php';
            </script>";
    }
}
// Close connection
mysqli_close($conn);
?>
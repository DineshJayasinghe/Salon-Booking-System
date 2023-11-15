<?php
session_start();
include 'dbConnection.php';
if (isset($_POST['submit'])) {


    $userNmae =  $_POST["userNmae"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $PasswordR = $_POST["PasswordR"];

    if($PasswordR == $password){
    $sql = "INSERT INTO user(username, email, password, type)  VALUES('$userNmae','$email','$password', 'Customer') ";
    if (mysqli_query($conn, $sql)) {

            $sql = "INSERT INTO userprofile(uname, email, password, address, nic, province, contact,name)  VALUES('$userNmae','$email','$password', '', '', '', '','') ";
            if (mysqli_query($conn, $sql)) {
                echo "<script>
                    alert('User Added');
                    window.location.href='../login.php';
                </script>";
            }else{

            }
    } else {
        echo "<script>
            alert('User Not Added');
            window.location.href='../registration.php';
            </script>";
        echo "ERROR: Could not able to execute $sql.";
    }
    }else{
        echo "<script>
            alert('Passwords Are Not Matching');
            window.location.href='../registration.php';
            </script>";
    }
}

mysqli_close($conn);
?>
<?php
session_start();
include 'dbConnection.php';


$uanme = $_SESSION["uname"];
 
     $sql = "DELETE FROM user WHERE username='$uanme'";
     if (mysqli_query($conn, $sql)) {

            $sql = "DELETE FROM userprofile WHERE uname='$uanme'";
            if (mysqli_query($conn, $sql)) {
                        echo "<script>
                        alert('Profile Removed');
                        window.location = '../index.php';
                        </script>";
            }else{

            }
     } else {
         echo "ERROR: Could not able to execute $sql.";
         echo "<script>
            alert('Profile Not Removed');
          window.location = '../profile.php';
          </script>";
     }

    // Close connection
    mysqli_close($conn);
?>
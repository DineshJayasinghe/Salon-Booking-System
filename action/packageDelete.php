<?php
session_start();
include 'dbConnection.php';
   
    $id = $_REQUEST["id"];

     $sql = "DELETE FROM package WHERE id=$id";
     if (mysqli_query($conn, $sql)) {
        
         echo "<script>
          alert('Package Delete');
          window.location = '../packageList.php';
          </script>";
     } else {
         echo "ERROR: Could not able to execute $sql.";
         echo "<script>
          alert('Package Not Delete');
          window.location = '../packageList.php';
          </script>";
     }

    // Close connection
    mysqli_close($conn);
?>
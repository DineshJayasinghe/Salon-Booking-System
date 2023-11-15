<?php
session_start();
include 'dbConnection.php';
   
   $id = $_REQUEST["id"];
   
 
     $sql = "DELETE FROM paymentdetails WHERE id=$id";
     if (mysqli_query($conn, $sql)) {
        
         echo "<script>
          alert('Payment records Delete');
          window.location = '../paymentList.php';
          </script>";
     } else {
         echo "ERROR: Could not able to execute $sql.";
         echo "<script>
          alert('Payment Records Not Delete');
          window.location = '../paymentList.php';
          </script>";
     }

    // Close connection
    mysqli_close($conn);
?>
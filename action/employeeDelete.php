<?php
session_start();
include 'dbConnection.php';
   
    $id = $_REQUEST["id"];

     $sql = "DELETE FROM employee WHERE id=$id";
     if (mysqli_query($conn, $sql)) {
        
         echo "<script>
          alert('Employee Delete');
          window.location = '../employeeList.php';
          </script>";
     } else {
         echo "ERROR: Could not able to execute $sql.";
         echo "<script>
          alert('Employee Not Delete');
          window.location = '../employeeList.php';
          </script>";
     }

    // Close connection
    mysqli_close($conn);
?>
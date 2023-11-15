<?php
session_start();
include 'dbConnection.php';

if (isset($_POST['submit'])) {


    $id =  $_POST["id"];
    $fullName =  $_POST["fullName"];
    $tel = $_POST["tel"];
    $job = $_POST["job"];
    $address = $_POST["address"];
    $basicSalary = $_POST["basicSalary"];
    $email = $_POST["email"];
    $education = $_POST["education"];
    $work = $_POST["work"];
   
    $sql = "UPDATE employee SET name='$fullName', tel ='$tel',job='$job',address='$address',basicsalary='$basicSalary',email='$email',educationQualification='$education' WHERE id = '$id' ";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Employee Update');
            window.location.href='../employeeList.php';
            </script>";
    } else {
        echo "<script>
            alert('Employee Not Update');
            window.location.href='../employeeList.php';
            </script>";
        echo "ERROR: Could not able to execute $sql.";
    }
}

mysqli_close($conn);
?>
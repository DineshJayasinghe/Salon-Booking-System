<?php
session_start();
include 'dbConnection.php';

if (isset($_POST['submit'])) {

 
    $fullName =  $_POST["fullName"];
    $tel = $_POST["tel"];
    $job = $_POST["job"];
    $address = $_POST["address"];
    $basicSalary = $_POST["basicSalary"];
    $email = $_POST["email"];
    $education = $_POST["education"];
    $work = $_POST["work"];
   
    $sql = "INSERT INTO employee( name, address, tel, job, basicsalary, educationQualification, workExperince, email,status)  VALUES('$fullName','$address','$tel', '$job','$basicSalary','$education','$work','$email','Active') ";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Employee Added');
            window.location.href='../employeeList.php';
            </script>";
    } else {
        echo "<script>
            alert('Employee Not Added');
            window.location.href='../employeeList.php';
            </script>";
        echo "ERROR: Could not able to execute $sql.";
    }
}

mysqli_close($conn);
?>
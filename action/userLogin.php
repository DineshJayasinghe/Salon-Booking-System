<?php
session_start();
include 'dbConnection.php';
if (isset($_POST['submit'])) {


    $uname =  $_POST["uname"];
    $password = $_POST["password"];


    $sql = "select * from user where username='$uname' and password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $type = $row["type"];

            if($type == 'Customer'){
                $_SESSION["uname"] = $uname;
                echo "<script>
                    alert('Success Login');
                    window.location = '../home.php';
                </script>";
            } else if($type == 'Admin') {
                $_SESSION["uname"] = $uname;
                echo "<script>
                    alert('Success Login');
                    window.location = '../admin.php';
                </script>";
            } else if ($type == 'Cashier') {
                $_SESSION["uname"] = $uname;
                echo "<script>
                    alert('Success Login');
                    window.location = '../cashier.php';
                </script>";
            }else{
                $_SESSION["uname"] = $uname;
                echo "<script>
                    alert('Success Login');
                    window.location = '../manager.php';
                </script>";
            }
        }
    } else {
        echo 'usuccess';
        echo "<script>
                alert('Invalid Username or password');
                window.location = '../login.php';
            </script>";
    }
}
// Close connection
mysqli_close($conn);
?>
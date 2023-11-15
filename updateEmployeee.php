<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 50%;
            background-color: white;
            height: 300px;
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
            background-color: white;
        }
    </style>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    include 'navbar.php';
    include './action/dbConnection.php';
    ?>
    <div style="margin-top: 5%;">
        <h1 class="text-center text-blue text-uppercase text-spacing text-decoration-underline">Update Employees</h1>
        <div class="light-gray m-3 p-5  border-15 defualt-shadow">
            <?php
            $id = $_REQUEST["id"];
            $sql = "select * from employee where id = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>

                    <form action="./action/employeeUpdate.php" method="post">
                        <div>
                            <input type="hidden" name="id" value="<?php echo $id ?>" />
                            <label for="fname">Full Name</label><br />
                            <input type="text" value="<?php echo $row["name"] ?>" name="fullName" placeholder="Full Name" class="text-box" required>
                        </div>
                        <div>
                            <label for="fname">Address</label><br />
                            <input type="text" value="<?php echo $row["address"] ?>" name="address" placeholder="Address" class="text-box" required>
                        </div>
                        <div>
                            <label for="fname">Telephone Number</label><br />
                            <input type="tel" value="<?php echo $row["tel"] ?>" name="tel" placeholder="Telephone Number" class="text-box" required>
                        </div>
                        <div>
                            <label for="fname">Job</label><br />
                            <select class="text-box" name="job" placeholder="job">
                                <option value="<?php echo $row["job"] ?>">Select - <?php echo $row["job"] ?>
                                <option>

                                <option value="Worker">Worker</option>
                                <option value="Beautician">Beautician</option>
                                <option value="Manager">Manager</option>
                                <option value="Admin">Admin</option>
                                <option value="Employee">Employee</option>
                            </select>
                        </div>
                        <div>
                            <label for="fname">basic Salary</label><br />
                            <input type="number" value="<?php echo $row["basicsalary"] ?>" name="basicSalary" placeholder="Basic Salary" class="text-box" required>
                        </div>
                        <div>
                            <label for="fname">Email</label><br />
                            <input type="email" value="<?php echo $row["email"] ?>" name="email" placeholder="Email" class="text-box" required>
                        </div>
                        <div>
                            <label for="fname">Education Qualifications</label><br />
                            <textarea type="text" value="<?php echo $row["educationQualification"] ?>" name="education" rows="10" placeholder="Education Qualifications" class="text-box" required><?php echo $row["educationQualification"] ?></textarea>
                        </div>
                        <div>
                            <label for="fname">Work Experince</label><br />
                            <textarea type="text" value="<?php echo $row["workExperince"] ?>" name="work" rows="10" placeholder="Work Experince" class="text-box" required><?php echo $row["workExperince"] ?></textarea>
                        </div>

                        <div class="text-end" style="padding-right:10%">
                            <button type="submit" name="submit" class="btn-pay">
                                Update <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
            <?php
                }
            } else {
            }
            ?>
        </div>
    </div>

</body>

</html>
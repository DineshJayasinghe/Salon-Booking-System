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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</head>

<body>
    <?php
    include 'navbar.php';
    include './action/dbConnection.php';
    $id = $_REQUEST["id"];
    ?>
    <div style="margin-top: 5%;" id="report">
        <h1 class="text-center text-blue text-uppercase text-spacing text-decoration-underline">Employee ID - <?php echo $id ?></h1>
        <div class="light-gray m-3 p-5  border-15 defualt-shadow">
            <?php

            $sql = "select * from employee where id = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>

                    <form action="./action/employeeUpdate.php" method="post">
                        <div>
                            <input type="hidden" name="id" id="empid" value="<?php echo $id ?>" />
                            <label for="fname">Full Name</label><br />
                            <input disabled type="text" value="<?php echo $row["name"] ?>" name="fullName" placeholder="Full Name" class="text-box" required>
                        </div>
                        <div>
                            <label for="fname">Address</label><br />
                            <input disabled type="text" value="<?php echo $row["address"] ?>" name="address" placeholder="Address" class="text-box" required>
                        </div>
                        <div>
                            <label for="fname">Telephone Number</label><br />
                            <input disabled type="tel" value="<?php echo $row["tel"] ?>" name="tel" placeholder="Telephone Number" class="text-box" required>
                        </div>
                        <div>
                            <label for="fname">Job</label><br />
                            <select disabled class="text-box" name="job" placeholder="job">
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
                            <input disabled type="number" value="<?php echo $row["basicsalary"] ?>" name="basicSalary" placeholder="Basic Salary" class="text-box" required>
                        </div>
                        <div>
                            <label for="fname">Email</label><br />
                            <input disabled type="email" value="<?php echo $row["email"] ?>" name="email" placeholder="Email" class="text-box" required>
                        </div>
                        <div>
                            <label for="fname">Education Qualifications</label><br />
                            <textarea disabled type="text" value="<?php echo $row["educationQualification"] ?>" name="education" rows="10" placeholder="Education Qualifications" class="text-box" required><?php echo $row["educationQualification"] ?></textarea>
                        </div>
                        <div>
                            <label for="fname">Work Experince</label><br />
                            <textarea disabled type="text" value="<?php echo $row["workExperince"] ?>" name="work" rows="10" placeholder="Work Experince" class="text-box" required><?php echo $row["workExperince"] ?></textarea>
                        </div>

                        <div class="text-end" style="padding-right:10%">
                            <button type="button" name="button" class="btn-pay" id="download">
                                Download <i class="fa fa-download" aria-hidden="true"></i>
                            </button>
                            <a href="admin.php"> <button type="button" class="btn-pay">
                                    Back
                                </button></a>
                        </div>
                    </form>
            <?php
                }
            } else {
            }
            ?>
        </div>
    </div>
    <script>
        window.onload = function() {
            var empid = document.getElementById("empid").value;
            document.getElementById("download")
                .addEventListener("click", () => {
                    const invoice = this.document.getElementById("report");
                    console.log(invoice);
                    console.log(window);
                    var opt = {
                        margin: 1,
                        filename: "Employee - " + empid,
                        image: {
                            type: 'jpeg',
                            quality: 0.98
                        },
                        html2canvas: {
                            scale: 2
                        },
                        jsPDF: {
                            unit: 'in',
                            format: 'letter',
                            orientation: 'portrait'
                        }
                    };
                    html2pdf().from(invoice).set(opt).save();
                })
        }
    </script>
</body>

</html>
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
    include './action/dbConnection.php';
    ?>
    <div style="margin-top: 5%;">
        <h1 class="text-center text-blue text-uppercase text-spacing text-decoration-underline">Add Employees</h1>
        <div class="light-gray m-3 p-5  border-15 defualt-shadow">
            <form action="./action/addEmployees.php" method="post">
                <div>
                    <label for="fname">Full Name</label><br />
                    <input type="text" name="fullName" placeholder="Full Name" class="text-box" required>
                </div>
                <div>
                    <label for="fname">Address</label><br />
                    <input type="text" name="address" placeholder="Address" class="text-box" required>
                </div>
                <div>
                    <label for="fname">Telephone Number</label><br />
                    <input type="tel" maxlength="10" name="tel" placeholder="Telephone Number" class="text-box" required>
                </div>
                <div>
                    <label for="fname">Job</label><br />
                    <select class="text-box" name="job" placeholder="job">
                        <option value="">Select Job
                        <option>

                        <option value="Worker">Worker</option>
                        <option value="Beautician">Beautician</option>
                        <option value="Manager">Manager</option>
                        <option value="Admin">Admin</option>
                        <option value="Employee">Employee</option>
                    </select>
                </div>
                <div>
                    <label for="fname">Basic Salary <span id="basicSalaryr" style="color:red;" class=" text-capitalize"></span></label><br />
                    <input type="number" min="10000" oninput="basicSalaryrFunction()" name="basicSalary" placeholder="Basic Salary" id="basicSalary" class="text-box" required>
                </div>
                <div>
                    <label for="fname">Email <span id="emailr" style="color:red;" class=" text-capitalize"></span></label><br />
                    <input type="email" oninput="emailFunction()" name="email" id="email" placeholder="Email" class="text-box" required>

                </div>
                <div>
                    <label for="fname">Education Qualifications</label><br />
                    <textarea type="text" name="education" rows="10" placeholder="Education Qualifications" class="text-box" required></textarea>
                </div>
                <div>
                    <label for="fname">Work Experince</label><br />
                    <textarea type="text" name="work" rows="10" placeholder="Work Experince" class="text-box" required></textarea>
                </div>

                <div class="text-end" style="padding-right:10%">
                    <button type="submit" name="submit" class="btn-pay">
                        Save <i class="fa fa-floppy-o" aria-hidden="true"></i>
                    </button>
                    <a href="admin.php">
                    <button type="button" name="button" class="btn-pay">
                        back
                    </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
    <script>
        function emailFunction() {
            var x = document.getElementById("email").value;


            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (x.match(mailformat)) {
                document.getElementById("emailr").innerHTML = ""
            } else {
                document.getElementById("emailr").innerHTML = "( Email is not correct. Correct email pattern : user@gmail.com)"
            }
        }

        function basicSalaryrFunction() {
            var basicSalary = document.getElementById("basicSalary").value;

            if (basicSalary > 10000) {
                document.getElementById("basicSalaryr").innerHTML = ""
            } else {

                document.getElementById("basicSalaryr").innerHTML = "Minimum Basic Salary IS LKR 10000"

            }

        }
    </script>
</body>

</html>
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
        <h1 class="text-center text-blue text-uppercase text-spacing text-decoration-underline">Payment Update</h1>
        <div>

            <?php
            //$uname =  $_SESSION["uname"];
            $id = $_REQUEST["id"];
            $sql = "select * from employee where id = " . $id . "";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <form action="./action/paymentUpdate.php" method="post" class="light-gray border-15 defualt-shadow" style="padding:5%;margin: 0% 20% 0% 20%;">
                        <label style="font-size:20px;">Employee ID: <?php echo $id ?></label><br /><br />
                        <label style="font-size:20px;">Basic Salary: Rs.<?php echo $row["basicsalary"] ?>.00</label><br /><br />
                        <input type="number" oninput="calculateTotal()" name="number" id="number" placeholder="Basic Salary" class="text-box" required>
                        <label style="font-size:20px;" id="totalSalary"></label><br /><br />
                        <div class="text-end" style="padding-right:10%">
                            <button type="submit" name="submit" class="btn-pay">
                                Pay Salary <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
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
    <script>
        function calculateTotal() {
            var number = document.getElementById("number").value;
            document.getElementById("totalSalary").innerHTML = number
        }
    </script>
</body>

</html>
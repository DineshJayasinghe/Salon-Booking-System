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
        <div class="light-gray m-3 p-5  border-15 defualt-shadow">

            <?php
            //$uname =  $_SESSION["uname"];
            $id = $_REQUEST["id"];
            $sql = "select * from paymentdetails where id = " . $id . "";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <form action="./action/paymentUpdate.php" method="post">
                        <div>
                            <label for="fname">Service Type</label><br />
                            <select class="text-box" name="serviceType">
                                <option value="<?php echo $row["serviceType"] ?>" selected>Select - <?php echo $row["serviceType"] ?></option>
                                <option value="Nail Polish">Nail Polish</option>
                                <option value="Special Makeup">Special Makeup</option>
                                <option value="Body Treatment">Body Treatment</option>
                                <option value="Face Clean-Up">Face Clean-Up</option>
                            </select>
                        </div>
                        <div>
                            <label for="fname">Payment Type</label><br />
                            <select class="text-box" name="PaymentType">
                                <option value="<?php echo $row["payemntType"] ?>" selected>Select - <?php echo $row["payemntType"] ?></option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Cache">Cache</option>
                            </select>
                        </div>
                        <div>
                            <label for="fname">Price(LKR)</label><br />
                            <input type="hidden" name="id"  value="<?php echo $id ?>">
                            <input type="number" value="<?php echo $row["price"] ?>" name="Price" placeholder="Enter price" class="text-box" required>
                        </div>
                        <div class="text-end" style="padding-right:10%">
                            <button type="submit" name="submit" class="btn-pay">
                                Update <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
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
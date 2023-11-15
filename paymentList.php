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
        <h1 class="text-center text-blue text-uppercase text-spacing text-decoration-underline">Payment List</h1>
        <div style="padding-right: 10%; padding-left:10%">
            <div style="text-align: right; margin-bottom:2%">
                <a href="cashier.php"> <button type="button" class="btn-pay">
                        Back
                    </button></a>
            </div>
            <input type="text" class="text-box-2" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
            <table id="myTable">
                <tr class="header">
                    <th style="width:10%;">ID</th>
                    <th style="width:20%;">Service Type</th>
					<th style="width:20%;">Service Details</th>
                    <th style="width:10%;">Price</th>
                    <th style="width:20%;">Date</th>
                    <th style="width:20%;">Payment Type</th>
                    <th style="width:20%;">Action</th>
                </tr>
                <?php
                //$uname =  $_SESSION["uname"];
                $user = "User";
                $sql = "select * from paymentdetails where user = '" . $user . "'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                ?>
                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["serviceType"] ?></td>
							<td><?php echo $row["serviceDetails"] ?></td>
                            <td><?php echo $row["price"] ?></td>
                            <td><?php echo $row["date"] ?></td>
                            <td><?php echo $row["payemntType"] ?></td>
                            <td>
                                <a class="text-decoration-none" href="./action/paymentDeleet.php?id=<?php echo $row["id"] ?>">
                                    <i class="fa fa-trash-o " style="color:red;" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                </a>
                                <a class="text-decoration-none" href="payemntUpdate.php?id=<?php echo $row["id"] ?>">
                                    <i class="fa fa-pencil-square" style="color:green;" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                }
                ?>
            </table>
        </div>
    </div>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>

</html>
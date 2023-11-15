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
    include './action/dbConnection.php';
    $id = $_REQUEST["id"];
    ?>
    <div style="margin-top: 5%;" id="report">
        <h1 class="text-center text-blue text-uppercase text-spacing text-decoration-underline">Payment ID - <?PHP echo $id ?></h1>
        <div class="light-gray m-3 p-5  border-15 defualt-shadow">

            <?php
            //$uname =  $_SESSION["uname"];
           
            $sql = "select * from paymentdetails where id = " . $id . "";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div>
                        <div>

                            <label for="fname">Service Type</label><br />
                            <select class="text-box" name="serviceType">
                                <option value="<?php echo $row["serviceType"] ?>" selected>Select - <?php echo $row["serviceType"] ?></option>
                                <option value="Hair">Hair</option>
                                <option value="Face">Face</option>
                                <option value="Body">Body</option>
                                <option value="Nails">Nails</option>
								<option value="Bridal">Bridal</option>
								<option value="Other Service">Other Service</option>
                            </select>
                        </div>
						<div>
							<label for="fname">Service Details</label><br/>
							<input type="tex" value="<?php echo $row["serviceDetails"] ?>" name="Service Details"  class="text-box-2" required><?php echo $row["serviceDetails"] ?>
						</div>
                        <div>
                            <label for="fname">Payment Type</label><br />
                            <select class="text-box" name="PaymentType">
                                <option value="<?php echo $row["payemntType"] ?>" selected>Select - <?php echo $row["payemntType"] ?></option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Cache">Cashe</option>
                            </select>
                        </div>
                        <div>
                            <label for="fname">Price(LKR)</label><br />
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="number" value="<?php echo $row["price"] ?>" name="Price" placeholder="Enter price" class="text-box" required>
                        </div>
                        <div class="text-end" style="padding-right:10%">
                            <button type="button" id="download" class="btn-pay">
                                Download <i class="fa fa-download" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
            <?php
                }
            } else {
            }
            ?>
        </div>
    </div>
    <script>
        window.onload = function() {
            document.getElementById("download")
                .addEventListener("click", () => {
                    const invoice = this.document.getElementById("report");
                    console.log(invoice);
                    console.log(window);
                    var opt = {
                        margin: 1,
                        filename: 'payemnt_receipt.pdf',
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
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

        .bg-dark-border {
            border: 2px solid rgb(56, 1, 44);
        }

        .text-color {
            color: black;
        }
    </style>
    <link rel="stylesheet" href="./css/noneAdminNav.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    include 'cashiereNavBar.php';

    ?>
    <div style="margin-top: 5%; margin-bottom:20%;">
        <h1 class="default-font text-center text-uppercase text-decoration-underline" style="letter-spacing:2px; font-weight:400; ">CASHIER Dashboard</h1>
        <div class="row">
            <div class="column">
                <div class="card-style m-3 p-5  border-15 defualt-shadow">
                    <h1 class="text-center text-uppercase text-white text-spacing fw-100 ">ADD Payment</h1>
                    <form action="./action/pay.php" method="post">
                        <div>
                            <label for="fname">Service Type</label>
                            <select class="text-box" name="serviceType">
                                <option value="0">Select Service Type</option>
                                <option value="Hair">Hair</option>
                                <option value="Face">Face</option>
                                <option value="Body">Body</option>
                                <option value="Nails">Nails</option>
								<option value="Bridal">Bridal</option>
								<option value="Other Service">Other Service</option>
                            </select>
                        </div>
						<div>
							<label for="fname">Service Details</label>
							<input type="text" name="Service Details"  class="text-box-2" required>
						</div>
                        <div>
                            <label for="fname">Payment Type</label>
                            <select class="text-box" name="PaymentType">
                                <option value="">Select Payment Type</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Cache">Cashe</option>
                            </select>
                        </div>
                        <div>
                            <label for="fname">Price</label><br />
                            <input type="number" name="Price" placeholder="Enter price" class="text-box-2" required>
                        </div>
                        <div class="text-end" style="padding-right:10%">
                            <button type="submit" name="submit" class="btn-pay">
                                PAY <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="column ">
                <div class="row mt-3 defualt-shadow  text-center mr-3">
                    <h2 class="text-center fw-100 text-uppercase" style="padding-top: 5%;">More Action</h2>
                    <div class="column  ">
                        <div class="bg-dark-border" style="margin-left:5%;padding:5%;">
                            <a href="paymentList.php" style="text-decoration:none">
                                <h2 c class="text-color">
                                    <span style="font-size: 40px;"><i class="fa fa-money " aria-hidden="true"></i></span>
                                    <br />Payment List
                                </h2>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="bg-dark-border" style="margin-left:5%;padding:5%; margin-right:5%">
                            <a href="reportGenetePaymentList.php" style="text-decoration:none">
                                <h2 class="text-color">
                                    <span style="font-size: 40px;"><i class="fa  fa-file-text" aria-hidden="true"></i></span>
                                    <br />Generate Report
                                </h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>
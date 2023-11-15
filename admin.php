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
        .column-2 {
            float: left;
            width: 20%;
            background-color: white;
            height: 300px;
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row-2:after {
            content: "";
            display: table;
            clear: both;
            background-color: white;
        }
    </style>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/noneAdminNav.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    include 'adminnavbar.php';
    ?>

    <div style="margin-top: 5%;">
        <h1 class="default-font text-center text-uppercase text-decoration-underline" style="letter-spacing:2px; font-weight:400; ">Admin Page</h1>
    </div>
    <center>
        <table class="text-center" style="width: 80%; padding-bottom:10%;">
            <tr>
                <td style="width: 33%;">
					<a href="#" style="text-decoration:none;">
						<div class="card-style" style=" margin-right:4%; padding:2%;"><br />
							<i class="fa fa-users" aria-hidden="true" style="font-size:40px;"></i>
							<h3 class="text-uppercase">Employees</h3>
						</div>
					</a>	
                </td>
                <td style="width: 33%;">
                    <a href="#" style="text-decoration:none;">
                        <div class="card-style" style="margin-right:4%; padding:2%;"><br />
                            <i class="fa  fa-folder" aria-hidden="true" style="font-size:40px;"></i>
                            <h3 class="text-uppercase ">Add Package</h3>
                        </div>
                    </a>
                </td>
                <td style="width: 33%;">
					<a href="employeeListReport.php" style="text-decoration:none;">
						<div class="card-style" style="margin-right:4%; padding:2%;"><br />
							<i class="fa  fa-file-text" aria-hidden="true" style="font-size:40px;"></i>
							<h3 class="text-uppercase ">Generate Report</h3>
						</div>
					</a>	
                </td>
            </tr>
        </table>
    </center>
    <?php include 'footer.php' ?>
</body>

</html>
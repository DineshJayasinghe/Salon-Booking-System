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

        .action-color-2 {
            color: white;
        }

        .action-color-2:hover {
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
    include 'managerNavbar.php';
    ?>
    <img src="https://i.imgur.com/8u5jQ26.jpeg" width="100%" height="50%" />
    <h1 class="default-font text-center text-uppercase text-decoration-underline" style="letter-spacing:2px; font-weight:400; ">Manager Dashboard</h1>
    <center>
        <table width="100%" class="text-center" style="padding-bottom: 20%;">
            <thead>
                <tr>
                    <td width="10%"></td>
                    <td width="20%">
                        <div class="column">
                            <div class="card-style action-color-2" style="margin-left:5%;padding:5%; margin-right:5%">
                                <a href="salaryCalculate.php" style="text-decoration:none">
                                    <h2 class="action-color-2">
                                        <span style="font-size: 40px;"><i class="fa fa-users" aria-hidden="true"></i>
                                        </span>
                                        <br />Salary
                                    </h2>
                                </a>
                            </div>
                        </div>
                    </td>
                    <td width="20%">
                        <div class="column">
                            <div class="card-style action-color-2" style="margin-left:5%;padding:5%; margin-right:5%">
                                <a href="#" style="text-decoration:none">
                                    <h2 class="action-color-2">
                                        <span style="font-size: 40px;"><i class="fa  fa-user-plus" aria-hidden="true"></i></span>
                                        <br />Attendance
                                    </h2>
                                </a>
                            </div>
                        </div>
                    </td>
                    <td width="20%">
                        <div class="column">
                            <div class="card-style action-color-2" style="margin-left:5%;padding:5%; margin-right:5%">
                                <a href="#" style="text-decoration:none">
                                    <h2 class="action-color-2">
                                        <span style="font-size: 40px;"><i class="fa  fa-file-text" aria-hidden="true"></i></span>
                                        <br />Generate Report
                                    </h2>
                                </a>
                            </div>
                        </div>
                    </td>
                    <td width="10%"></td>
                </tr>
            </thead>
        </table>
    </center>
    <?php include 'footer.php' ?>
</body>

</html>
<?php
session_start();
$uanme = $_SESSION["uname"];
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="./css/noneAdminNav.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .form-style {
            margin-right: 4%;
            padding: 2%;
            color: #330033;
            border-radius: 5px;
            background-color: white;
            border: none;
            box-shadow: 2px 2px 2px 2px #e6e6e6;
        }
    </style>
</head>

<body>
    <?php include 'cashiereNavBar.php' ?>
    <h1 class="default-font mt-5 text-decoration-underline" style="text-align: center;padding-top:1%;">Inquiry  Updates</h1>
    <table style="width: 100%; padding:0% 0% 10% 0%;" class="text-center">
        <tr>
            <td style="width: 20%;">
            </td>
            <td style="width: 60%;">
                <?php

                include './action/dbConnection.php';
                $sql = "select * from inquiry";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $productId = $row["id"];
                ?>
                         <div class="div-table-form" style="padding-top: 10%; padding-bottom: 5%;">
        <div class="div-table-row">
            <div class="div-table-col-form">
                <img class="mt-6" src="./img/contactUs.png" width="95%" />
            </div>
            <div class="div-table-col-form">
                <div class="form-style default-font">
                    <h2 class="text-uppercase text-spacing text-center text-decoration-underline">
                        Inquiry Form
                    </h2>
                    <form action="./action/contactUs.php" method="POST">
                        <div style="padding-left: 5%;">
                            <p class="text-capitalize" style="margin: 0%;">
                                Full Name
                            </p>
                            <p class="txtBox"> <?php echo $row["name"]; ?> </p>

                            <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                Email <span id="emailR" class="text-red validation-text"></span>
                            </p>
                            <p class="txtBox"> <?php echo $row["email"]; ?> </p>

                            <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                Inquiry
                            </p>
                            <p class="txtBox"> <?php echo $row["Inquiry"]; ?> </p>

                            <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                Message
                            </p>
                            <p class="txtBox"> <?php echo $row["Message"]; ?> </p>

                           
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
                <?php
                    }
                } else {
                }
                ?>
                <br /><br /><br /><br /><br /><br /><br />
            </td>
            <td style="width: 20%;">
            </td>
        </tr>
    </table>
    <?php include 'footer.php' ?>
   
</body>

</html>
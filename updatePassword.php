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
    <?php include 'customerNav.php' ?>
    <h1 class="default-font mt-5 text-decoration-underline" style="text-align: center;padding-top:1%;">Password Update</h1>
    <table style="width: 100%; padding:0% 0% 10% 0%;" class="text-center">
        <tr>
            <td style="width: 20%;">
            </td>
            <td style="width: 60%;">
                <div class="form-style default-font">
                    <form action="./action/userReset1.php" method="POST">
                        <div style="padding-left: 5%; text-align:left;">
                            <p class="text-capitalize" style="margin: 0%;">
                                User Name
                            </p>
                            <input type="text" value="<?php echo $uanme ?>" name="uname" class="txtBox" />

                            <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                Password
                            </p>
                            <input type="password" id="password" name="password" class="txtBox" />

                            <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                Re-Type Password <span id="PasswordR" class="text-red validation-text"></span>
                            </p>
                            <input type="text" oninput="PasswordRValidation()" id="RPassword" name="RPassword" class="txtBox" />

                            <div style="text-align: right; padding-right: 7%; padding-top:3%; padding-bottom:3%;">
                                <button class="btn-submit" type="submit" name="submit">
                                    Reset <i class="fa fa-repeat" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </td>
            <td style="width: 20%;">
            </td>
        </tr>
    </table>
    <?php include 'footer.php' ?>
    <script>
        function PasswordRValidation() {
            var RPassword = document.getElementById("RPassword").value;
            var password = document.getElementById("password").value;

            if (RPassword == password) {
                document.getElementById("PasswordR").innerHTML = "";
            } else {
                document.getElementById("PasswordR").innerHTML = "Passwords Are Not Matching";
            }
        }
    </script>
</body>

</html>
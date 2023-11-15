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
    <h1 class="default-font mt-5 text-decoration-underline" style="text-align: center;padding-top:1%;">Profile Update</h1>
    <table style="width: 100%; padding:0% 0% 10% 0%;" class="text-center">
        <tr>
            <td style="width: 20%;">
            </td>
            <td style="width: 60%;">
                <?php

                include './action/dbConnection.php';
                $sql = "select * from userprofile";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $productId = $row["id"];
                ?>
                        <div class="form-style default-font">
                            <form action="./action/userProfileUpdate.php" method="POST">
                                <div style="padding-left: 5%; text-align:left;">
                                    <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                        Full Name
                                    </p>
                                    <input type="text" name="fullname" value="<?php echo $row["name"]; ?>" class="txtBox" />

                                    <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                        Email <span id="emailR" class="text-red validation-text"></span>
                                    </p>
                                    <input oninput="emailValidation()" value="<?php echo $row["email"]; ?>" name="email" id="email" type="email" class="txtBox" />


                                    <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                        Address
                                    </p>
                                    <input type="text" name="Address" value="<?php echo $row["address"]; ?>" class="txtBox" />

                                    <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                        NIC
                                    </p>
                                    <?php
                                    if ($row["nic"] == null || $row["nic"] == "") { ?>
                                        <input type="text" name="nic" maxlength="10" class="txtBox" />
                                    <?php
                                    } else {
                                    ?>
                                        <input type="text" disabled maxlength="10" value="<?php echo $row["nic"]; ?>" class="txtBox" />
                                        <input type="hidden" name="nic" maxlength="10" value="<?php echo $row["nic"]; ?>" class="txtBox" />
                                    <?php } ?>
                                    <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                        Province
                                    </p>
                                    <select type="text" name="Province" maxlength="10" class="txtBox">
                                        <option value="<?php echo $row["province"]; ?>"><?php echo $row["province"]; ?></option>
                                        <option value="Western">Western</option>
                                        <option value="Central">Central</option>
                                        <option value="Uwa">Uwa</option>
                                        <option value="South">South</option>
                                        <option value="North">North</option>
                                        <option value="North Central">North Central</option>
                                        <option value="Wayaba">Wayaba</option>
                                        <option value="Sabaragamuwa">Sabaragamuwa</option>
                                    </select>

                                    <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                        Contact Number
                                    </p>
                                    <input type="tel" name="tel" value="<?php echo $row["contact"]; ?>" maxlength="10" class="txtBox" />


                                    <div style="text-align: right; padding-right: 7%; padding-top:3%; padding-bottom:3%;">

                                        <button class="btn-submit" type="submit" name="submit">
                                            Update <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
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
    <script>
        function emailValidation() {
            var email = document.getElementById("email").value;

            var re = /\S+@\S+\.\S+/;

            if (re.test(email) == true) {
                document.getElementById("emailR").innerHTML = "";
            } else {
                document.getElementById("emailR").innerHTML = "Invalid Email Address";
            }
        }
    </script>
</body>

</html>
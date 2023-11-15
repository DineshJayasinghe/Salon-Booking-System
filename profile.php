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
        .profileCard {
            background-color: #f7f7f7;
            padding: 5%;
            margin: 0% 15% 0% 15%;
            box-shadow: 2px 3px 5px #e6e6e6;
        }
    </style>
</head>

<body>
    <?php include 'customerNav.php' ?>
    <h1 class="default-font mt-5 text-decoration-underline" style="text-align: center;padding-top:1%;">Your Profile</h1>
    <?php
    include './action/dbConnection.php';
    $sql = "select * from userprofile where uname = '$uanme'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $productId = $row["id"];
    ?>
            <table style="width: 100%; padding:1% 0% 10% 0%;" class="text-center">
                <tr>
                    <td style="width: 10%;"></td>
                    <td style="width: 40%;">
                        <div class="profileCard">
                            <img src="./img/profile.png" style="width: 48%;" />
                            <h2 class="default-font" style="margin: 6% 0% 1% 0%;">
                                <span style="font-size:14px; font-style:italic; font-weight:100; letter-spacing:2px; color:#595959;" class="text-center">@<?php echo $uanme ?></span><br /><?php echo $row["name"]; ?>
                            </h2>
                            <table width="100%">
                                <tr>
                                    <td style="text-align:end;">
                                        <a href="./action/userProfileDelete.php"> 
                                            <button class="btn-red">
                                                 Delete <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="updateProfile.php?id=<?php echo $uanme ?>">
                                            <button class="btn-green">
                                                Update <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td style="text-align:start;">
                                        <a href="updatePassword.php?id=<?php echo $uanme ?>">
                                            <button class="btn-black">
                                                Reset <i class="fa fa-key" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </td>
                    <td style="width: 40%;">

                        <form action="./action/userLogin.php" style="text-align: left;" method="POST">
                            <div style="padding-left: 5%;">
                                <p class="default-font text-capitalize fw-bold" style="margin: 0%; padding-top:2%;">
                                    Full Name : <span style="font-weight: 200;"><?php echo $row["name"]; ?></span>
                                </p>
                                <p class="default-font text-capitalize fw-bold" style="margin: 0%; padding-top:2%;">
                                    User Name : <span style="font-weight: 200;"> <?php echo $uanme ?> </span>
                                </p>
                                <p class="default-font text-capitalize fw-bold" style="margin: 0%; padding-top:2%;">
                                    Email : <span style="font-weight: 200; text-transform:lowercase;"> <?php echo $row["email"]; ?></span>
                                </p>
                                <p class="default-font text-capitalize fw-bold" style="margin: 0%; padding-top:2%;">
                                    Address : <span style="font-weight: 200;"> <?php echo $row["address"]; ?></span>
                                </p>
                                <p class="default-font text-capitalize fw-bold" style="margin: 0%; padding-top:2%;">
                                    NIC : <span style="font-weight: 200;"> <?php echo $row["nic"]; ?></span>
                                </p>
                                <p class="default-font text-capitalize fw-bold" style="margin: 0%; padding-top:2%;">
                                    Provice : <span style="font-weight: 200;"> <?php echo $row["province"]; ?></span>
                                </p>
                                <p class="default-font text-capitalize fw-bold" style="margin: 0%; padding-top:2%;">
                                    Contact : <span style="font-weight: 200;"> <?php echo $row["contact"]; ?></span>
                                </p>
                            </div>
                        </form>
                        <br /><br /><br /><br /><br /><br /><br />
                    </td>
                    <td style="width: 10%;"></td>
                </tr>
            </table>
    <?php
        }
    } else {
    }
    ?>
    <?php include 'footer.php' ?>
</body>

</html>
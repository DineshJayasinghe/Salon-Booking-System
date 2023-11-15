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
        <h1 class="text-center text-blue text-uppercase text-spacing text-decoration-underline">UPDATE Package</h1>
        <div class="light-gray m-3 p-5  border-15 defualt-shadow">
            <?php
            $id = $_REQUEST["id"];
            $sql = "select * from package where id = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <form action="./action/updatePackage.php" method="post">
                        <div>
                            <label for="fname">Title</label><br />
                            <input type="text" name="Title" value="<?php echo $row["title"] ?>" placeholder="Title" class="text-box" required>
                        </div>
                        <div>
                            <label for="fname">Price</label><br />
                            <input type="hidden" name="id" value="<?php echo $id ?>"/>
                            <input type="text" name="price" value="<?php echo $row["price"] ?>" placeholder="Price" class="text-box" required>
                        </div>
                        <div>
                            <label for="fname">Package For</label><br />
                            <select class="text-box" name="Category" placeholder="Category">
                                <option value="<?php echo $row["Category"] ?>">Select - <?php echo $row["Category"] ?>
                                <option>
                                <option value="Nail">Nail</option>
                                <option value="Skin">Skin</option>
                                <option value="Hair">Hair</option>
                                <option value="Body">Body</option>
                            </select>
                        </div>
                        <div>
                            <label for="fname">Discription</label><br />
                            <textarea type="text" name="Discription" rows="10" placeholder="Discription" class="text-box" required><?php echo $row["Discription"] ?></textarea>
                        </div>


                        <div class="text-end" style="padding-right:10%">
                            <button type="submit" name="submit" class="btn-pay">
                                Update <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            </button>
                            <a href="admin.php">
                                <button type="button" name="button" class="btn-pay">
                                    back
                                </button>
                            </a>
                        </div>
                    </form>
            <?php
                }
            } else {
            }
            ?>
        </div>
    </div>
    <script>
        function emailFunction() {
            var x = document.getElementById("email").value;


            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (x.match(mailformat)) {
                document.getElementById("emailr").innerHTML = ""
            } else {
                document.getElementById("emailr").innerHTML = "( Email is not correct. Correct email pattern : user@gmail.com)"
            }
        }

        function basicSalaryrFunction() {
            var basicSalary = document.getElementById("basicSalary").value;

            if (basicSalary > 10000) {
                document.getElementById("basicSalaryr").innerHTML = ""
            } else {

                document.getElementById("basicSalaryr").innerHTML = "Minimum Basic Salary IS LKR 10000"

            }

        }
    </script>
</body>

</html>
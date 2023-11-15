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

        .btn-submit {
            color: white;
            background-color: rgb(56, 1, 44);
            border: none;
            padding: 5px 13px;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 2px solid rgb(56, 1, 44);
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: white;
            color: rgb(56, 1, 44);
            border: none;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 2px solid rgb(56, 1, 44);
        }
    </style>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/noneAdminNav.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    include 'adminnavbar.php';
    include './action/dbConnection.php';
    ?>
    <div style="margin-top: 5%; margin-bottom:10%;">
        <h1 class="default-font text-center text-uppercase text-decoration-underline" style="letter-spacing:2px; font-weight:400; ">Add Package</h1>
        <div class="border-15 defualt-shadow" style="padding:2% 2% 2% 4%; margin:0% 20% 0% 20%">
            <form action="./action/addPackage.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="fname">Title</label><br />
                    <input type="text" name="Title" class="txtBox" required>
                </div>
                <div style="padding-top:2%;">
                    <label for="fname">Price</label><br />
                    <input type="text" name="price" class="txtBox" required>
                </div>
                <div style="padding-top:2%;">
                    <label for="fname">Package For</label><br />
                    <select class="text-box" class="txtBox" name="Category" placeholder="Category">
                        <option value="">
                        <option>
                        <option value="Nail">Nail</option>
                        <option value="Skin">Skin</option>
                        <option value="Hair">Hair</option>
                        <option value="Body">Body</option>
                    </select>
                </div>
                <div style="padding-top:2%;">
                    <label for="fname">Discription</label><br />
                    <textarea type="text" name="Discription" rows="10" class="txtBox" required></textarea>
                </div>
                <div style="padding-top:2%;">
                    <label for="fname">Upload File</label><br />
                    <input type="file" name="uploadfile" />
                </div>

                <div class="text-end" style="padding-right:10%; margin-top:2%;">
                    <button type="submit" name="submit" class="btn-submit">
                        Save <i class="fa fa-floppy-o" aria-hidden="true"></i>
                    </button>
                    <a href="admin.php">
                        <button type="button" name="button" class="btn-submit">
                            back
                        </button>
                    </a>
                </div>
            </form>
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
    <?php include 'footer.php' ?>
</body>

</html>
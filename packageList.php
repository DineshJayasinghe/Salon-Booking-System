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

        .btn-purple {
            color: white;
            border-radius: 5px;
            border: 1px solid rgb(56, 1, 44);
            background-color: rgb(56, 1, 44);
            padding: 6px 10px;
        }
    </style>
    <link rel="stylesheet" href="./css/noneAdminNav.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    include 'adminnavbar.php';
    include './action/dbConnection.php';
    ?>
    <div style="margin-top: 5%; margin-bottom:20%;">
        <h1 class="default-font text-center text-uppercase text-decoration-underline" style="letter-spacing:2px; font-weight:400; ">PACKAGE LIST</h1>
        <div style="padding-right: 10%; padding-left:10%">
            <div style="text-align: right; margin-bottom:2%">
                <a href="admin.php"> <button type="button" class="btn-purple">
                        Back
                    </button></a>
                <a href="package.php"> <button type="button" class="btn-purple-outline">
                        Add A Package
                    </button></a>
            </div>

            <input type="text" class="text-box-2" id="myInput" onkeyup="myFunction()" placeholder="Search for Id.." title="Type in a name">
            <table id="myTable">
                <tr  style="background-color:black;  color:#a3a3a3; font-weight:500;">
                    <th style="font-weight:400">ID</th>
                    <th style="font-weight:400">Title</th>
                    <th style="font-weight:400">Price</th>
                    <th style="font-weight:400">Category</th>
                    <th style="font-weight:400">Action</th>
                </tr>
                <?php
                $sql = "select * from package";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                ?>
                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["title"] ?></td>
                            <td>RS.<?php echo $row["price"] ?>.00</td>
                            <td><?php echo $row["Category"] ?></td>
                            <td>
                                <a class="text-decoration-none" href="upadatepackage.php?id=<?php echo $row["id"] ?>">
                                    <i class="fa fa-file " style="color:green;" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                </a>
                                <a class="text-decoration-none" href="./action/packageDelete.php?id=<?php echo $row["id"] ?>">
                                    <i class="fa fa-trash " style="color:red;" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                </a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                }
                ?>
            </table>
        </div>
    </div>
    <?php include 'footer.php' ?>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>

</html>
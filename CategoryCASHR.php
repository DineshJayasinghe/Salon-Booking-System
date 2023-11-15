<!DOCTYPE html>
<html>

<head>
    <title>BEAUTY SALON</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> 

		<link rel="stylesheet" href="./css/noneAdminNav.css">
    	<link rel="stylesheet" href="./css/common.css">
    	<link rel="stylesheet" href="./css/home.css">
    	<link rel="preconnect" href="https://fonts.gstatic.com">
    	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        /* Fixed sidenav, full height */
        .sidenav {
            height: 100%;
            width: 200px;
            position: relative;
            z-index: 0;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a,
        .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }

        /* On mouse-over */
        .sidenav a:hover,
        .dropdown-btn:hover {
            color: #f1f1f1;
        }

        /* Main content */
        .main {
            margin-left: 200px;
            /* Same as the width of the sidenav */
            font-size: 20px;
            /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        /* Add an active class to the active dropdown button */
        .active {
            background-color: green;
            color: white;
        }

        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
            display: none;
            background-color: #262626;
            padding-left: 8px;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
            float: right;
            padding-right: 8px;
        }

        /* Some media queries for responsiveness */
        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>
</head>

<body style="background:white;">
<?php include 'cashiereNavBar.php' ?>
    
    <div class="row">
        <table width="100%" >
            <tr>
                <td>
                    <div class="sidenav">
                        <a href="categorypage/product-page/all services.html" onclick="load_home('all services')">All Services</a>
                        <a href="#">Promotions</a>
                        <button class="dropdown-btn">Hair
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a href="categorypage/product-page/haircut.html" onclick="load_home('haircut')">Hair Cut</a>
                            <a href="categorypage/product-page/hair treatment.html" onclick="load_home('hair treatment')">Hair Treatment</a>
                            <a href="categorypage/product-page/hair colouring.html" onclick="load_home('hair colouring')">Hair Colouring</a>
                            <a href="categorypage/product-page/hair styling.html" onclick="load_home('hair styling')">Hair Styling</a>
                        </div>
                        <button class="dropdown-btn">Face
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a href="categorypage/product-page/cleanup.html" onclick="load_home('cleanup')">Cleanup</a>
                            <a href="categorypage/product-page/facial.html" onclick="load_home('facial')">Facial</a>
                            <a href="categorypage/product-page/threading.html" onclick="load_home('threading')">Threading</a>
                            <a href="categorypage/product-page/makeup.html" onclick="load_home('makeup')">Makeup</a>
                        </div>
                        <button class="dropdown-btn">body
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a href="categorypage/product-page/waxing.html" onclick="load_home('waxing')">Waxing</a>
                        </div>
                        <button class="dropdown-btn">Nails
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a href="categorypage/product-page/manicure.html" onclick="load_home('manicure')">Manicure</a>
                            <a href="categorypage/product-page/pedicure.html" onclick="load_home('pedicure')">Pedicure</a>
                        </div>
                        <button class="dropdown-btn">Bridal
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a href="categorypage/product-page/wedding.html" onclick="load_home('wedding')">Wedding</a>
                        </div>
                        <button class="dropdown-btn">Other Services
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a href="categorypage/product-page/dressing.html" onclick="load_home('dressing')">Dressing</a>
                        </div>
                    </div>
                </td>
                <td>
                    <img src="https://i.imgur.com/1fH5ANH.jpeg" alt="Snow" style="width:100%;">
                </td>
            </tr>
        </table>

        <script>

            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;

            for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function () {
                    this.classList.toggle("active1");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                    } else {
                        dropdownContent.style.display = "block";
                    }
                });
            }
        </script>
    </div>

    <!-- <div class="sidenav">
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#clients">Clients</a>
        <a href="#contact">Contact</a>
        <button class="dropdown-btn">Dropdown
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
        <a href="#contact">Search</a>
    </div>

    <div class="main">
        <h2>Sidebar Dropdown</h2>
        <p>Click on the dropdown button to open the dropdown menu inside the side navigation.</p>
        <p>This sidebar is of full height (100%) and always shown.</p>
        <p>Some random text..</p>
    </div>

    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script> -->
    <script>
        function load_home(pageName) {
            document.getElementById("content").innerHTML = '<object type="text/html" data="product-page/'+pageName+'.html"></object>';
        }
    </script>
    <script src="js/button.js">  </script>
    <?php include 'footer.php' ?>
</body>

</html>
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

        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        .slideshow-container {
            position: relative;
            margin: auto;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }
    </style>
</head>

<body>
    <?php include 'customerNav.php' ?>
    <div style="background-color: white;">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="https://i.imgur.com/Adw1cQQ.jpeg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://i.imgur.com/aX54yYz.jpeg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://i.imgur.com/7OQobp9.jpeg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
    <div style="background-color:#330033;">
        <div class="div-table">
            <div class="div-table-row text-center">
                <div class="div-table-col text-muted" style="padding-bottom: 1%;">
                    <br /> <i class="fa fa-home" style="font-size: 30px;" aria-hidden="true"></i> Malabe, Sri Lanka
                </div>
                <div class="div-table-col text-muted" style="padding-bottom: 1%;">
                    <br /> <i class="fa fa-mobile" style="font-size: 30px;" aria-hidden="true"></i> +94 7110 67 209
                </div>
                <div class="div-table-col text-muted" style="padding-bottom: 1%;">
                    <br /> <i class="fa fa-envelope" style="font-size: 30px;" aria-hidden="true"></i> beautysaloon@gmail.com
                </div>
            </div>
        </div>
    </div>
    <table style="width: 100%; padding-bottom:10%; padding-top:10%;">
        <tr>
            <td style="width: 50%;">
                <img width="100%" src="https://www.sbdcnet.org/wp-content/uploads/2014/07/aw-creative-HEde-a_T4E8-unsplash-1536x1025.jpg" />
            </td>
            <td style="width: 50%;">
                <div style="padding-left:10%; padding-right: 20%;">
                    <h1 class="fw-100 text-decoration-underline" style="color: #4d004d;">ABOUT US</h1>
                    <p class="defualt-para-style">
                        Experience excellence in a truly luxurious atmosphere offering you the ultimate satisfaction in hair and beauty services with Salon Zero by Master Stylist Surith Rasantha who is recognized worldwide as an international consultant and migrant stylist.

                        At Salon Zero, we take enormous pride in representing the highest standards in the hair industry. We have confidence in excellence with a heart and our approach towards the hair, makeup, and other beauty services are emulated and framed against a backdrop of clean-lined, industrial decor where new and unique creations are crafted, honed, and inspired by you, for you.

                        At Salon Zero, our committed group of beauticians, nails and skin specialists accompany innumerable long periods of involvement in the magnificence business. We endeavour to make each customer our best, whether you are a new or returning client, our team of highly trained stylists are ready to make you look your absolute best.

                        “We want our salon to be a place where clients are treated with genuine warmth


                    </p>
                    <div style="align-items:right;">
                        <button class="btn-purple-outline" style=" display: flex; justify-content: center;align-items: center;">More Details
                            &nbsp; <i class="fa fa-angle-double-right " style="font-size: 20px;" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div class="regcontainer" style="margin-bottom:10%; margin-top:5%;">
        <img src="https://i.imgur.com/1fH5ANH.jpeg" alt="Snow" style="width:100%;">
        <div class="regcentered">
            <h1 class="fw-100" style=" text-transform:uppercase; line-height:24px;">Are You not a member?<br /><small style="font-size: 15px; " class="text-transform-capitalize">No Registration Fees... No Hidden Payments...</small></h1>
           <a href="./registration.php" style="text-decoration:none;">
		   <button class="btn-purple-outline" style=" display: flex; justify-content: center;align-items: center;">Register Now
                &nbsp; <i class="fa fa-angle-double-right " style="font-size: 20px;" aria-hidden="true"></i>
            </button> </a>
            <br /><br /><br /><br /><br /><br />
        </div>
    </div>
    <div>
        <h1 class="fw-100 text-decoration-underline text-uppercase text-center" style="color: #4d004d;">OUR business Hours</h1>
        <center>
            <table class="text-center" style="width: 80%; padding-bottom:10%;">
                <tr>
                    <td style="width: 33%;">
                        <div class="card-style" style=" margin-right:4%; padding:2%;">
                            <h3 class="text-uppercase">WEEKDAYS</h3>
                            <p>
                                8.00 A.M - 8.00 P.M
                            </p>
                        </div>
                    </td>
                    <td style="width: 33%;">
                        <div class="card-style" style="margin-right:4%; padding:2%;">
                            <h3 class="text-uppercase ">WEEKEND</h3>
                            <p>
                                8.00 A.M - 5.00 P.M
                            </p>
                        </div>
                    </td>
                    <td style="width: 33%;">
                        <div class="card-style" style="margin-right:4%; padding:2%;">
                            <h3 class="text-uppercase ">Holidays</h3>
                            <p class="text-capitalize">
                                We Closed On Poyaday
                            </p>
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <?php include 'footer.php' ?>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</body>
</html>
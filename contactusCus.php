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
    <img src="https://i.imgur.com/J35Jv9s.jpeg" style="margin-bottom:0%" width="100%" />
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
                                First Name
                            </p>
                            <input type="text" name="firstName" class="txtBox" />

                            <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                Last Name
                            </p>
                            <input type="text" name="lastName" class="txtBox" />

                            <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                Email <span id="emailR" class="text-red validation-text"></span>
                            </p>
                            <input oninput="emailValidation()" name="email" id="email" type="email" class="txtBox" />

                            <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                Inquiry
                            </p>
                            <input type="text" name="Inquiry" id="Inquiry" class="txtBox" />

                            <p class="text-capitalize" style="margin: 0%; padding-top:5%;">
                                Message
                            </p>
                            <textarea type="text" rows="10" name="message" id="message" class="txtBox"></textarea>

                            <div style="text-align: right; padding-right: 7%; padding-top:3%; padding-bottom:3%;">
                                <button class="btn-submit" type="submit" name="submit">
                                    Submit <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <center>
        <div style="padding-bottom: 10px">
            <h2 class="default-font text-uppercase text-spacing text-center text-decoration-underline">
                Our Location
            </h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.803855936814!2d79.82118587654392!3d6.921922576429534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1623755276332!5m2!1sen!2slk" width="1300" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div> <br><br><br><br>
    </center>
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
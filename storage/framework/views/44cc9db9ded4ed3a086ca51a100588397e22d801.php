<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>index</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/responsive.css" rel="stylesheet" />
        <style>
            .footer{
                background-color: black;
                text-align: center;
                bottom: 0;
                width: 100%;
            }
            @import  url("https://fonts.googleapis.com/css?family=Roboto");
            @-webkit-keyframes come-in {
                0% {
                    -webkit-transform: translatey(100px);
                    transform: translatey(100px);
                    opacity: 0;
                }
            }
            @keyframes  come-in {
                0% {
                    -webkit-transform: translatey(100px);
                    transform: translatey(100px);
                    opacity: 0;
                }
            }
            .floating-container {
                position: fixed;
                width: 100px;
                height: 100px;
                bottom: 0;
                left: 31%;
                margin: 35px 25px;
            }
            .floating-container:hover {
                height: 0px;
            }
            .floating-container:hover .floating-button {
                background: black;
                color:#CFB872;
                -webkit-transition: all 0s;
                transition: all 0s;
            }
            .floating-container .floating-button {
                position: absolute;
                width: 65px;
                height: 65px;
                background: #CFB872;
                bottom: 0;
                border-radius: 50%;
                left: 0;
                right: 0;
                margin: auto;
                color: black;
                font-weight: bold;
                line-height: 65px;
                text-align: center;
                font-size: 16px;
                z-index: 100;
                cursor: pointer;
                -webkit-transition: all 0s;
                transition: all 0s;
            }
        </style>
    </head>

    <body>
        <div class="hero_area">
            <header class="header_section">
                <br>
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <?php
                            date_default_timezone_set("Asia/Jakarta");
                            $t = date("H:i");
                            if ($t >= "04:00" && $t < "11:59"):
                                echo "<p style='text-align:center;color:#CFB872;'><b>Good morning, Vico</b><p>";
                            elseif ($t >= "12:00" && $t < "17:59"):
                                echo "<p style='text-align:center;color:#CFB872;'><strong>Good afternoon, Vico</strong><p>";
                            elseif ($t >= "18:00" && $t <= "23:59"):
                                echo "<p style='text-align:center;color:#CFB872;'><strong>Good evening, Vico</strong><p>";
                            else:
                                echo "<p style='text-align:center;color:#CFB872;'><strong>Hello, Vico</strong><p>";
                            endif;
                        ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#CFB872;">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/home1"> Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/history1"> History </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/"> Login </a>
                            </li>
                        </ul>
                        </div>
                        </div>
                    </nav>
                </div>
            </header>
        </div>

        <section class="how_section layout_padding">
            <div class="heading_container">
                <input type="search" placeholder="search" style="width:95%;border-radius:100px;height:40px;margin-top:-50px;">
            </div>

            <div style="display:flex;">
                <div style="margin:20px;">
                    <p>Congratulations! You have 75 stars!</p>
                </div>
                <div style="justify-content:flex-end;">
                    <img src="images/progres.png" style="margin:20px;align:right">
                </div>
            </div>

            <div>
                <button type="button" class="btn btn-dark mr-auto" style="color:#CFB872; border-radius:100px;margin-top:-50px;margin-left:70%;font-weight:bold;">Redeem</button>
            </div>

            <div class="how_container" >
                <div class="boks">
                    <img src="images/user.jpg" style="margin:10px;" >
                    <p style="font-size:8pt;margin-top:20px;"><b>Benefits of Drinking Coffee</b><br> Coffee contains caffeine which boosts energy levels and improves mood and brain function. It may increase fat burning in your body and boost metabolic rate. Caffeine can increase available fatty acids which improve physical performance.</p>
                </div>
            </div>

            <div class="how_container" >
                <div class="box">
                    <div class="img-box">
                        <img src="images/botol.png" style="margin-left:-40px;">
                        <p style="margin-left:-40px;margin-top:20px;font-weight:bold;">30% OFF<br>
                        BRING<br>
                        YOUR<br>
                        OWN<br>
                        TUMBLER</P>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box" style="display: block;justify-content:center;">
                        <img src="images/sedotan.png" style="width:100px; height:100px;" ><br>
                        <p style="font-size: 10pt;font-weight:bold;">SIP & SLURP:<br>
                        NO STRAW FOR TODAY</p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box" style="display: block;justify-content:center;">
                        <img src="images/sedotan.png" style="width:100px; height:100px;" ><br>
                        <p style="font-size: 10pt;font-weight:bold;">SIP & SLURP:<br>
                        NO STRAW FOR TODAY</p>
                    </div>
                </div>
                <div class="box" >
                    <div class="img-box">
                        <img src="images/botol.png" style="margin-left:-40px">
                        <p style="margin-left:-40px;margin-top:20px;font-weight:bold;">30% OFF<br>
                        BRING<br>
                        YOUR<br>
                        OWN<br>
                        TUMBLER</p>
                    </div>
                </div>
                <div class="box" >
                    <div class="img-box">
                        <img src="images/botol.png" style="margin-left:-40px">
                        <p style="margin-left:-40px;margin-top:20px;font-weight:bold;">30% OFF<br>
                        BRING<br>
                        YOUR<br>
                        OWN<br>
                        TUMBLER</p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box" style="display: block;justify-content:center;">
                        <img src="images/sedotan.png" style="width:100px; height:100px;" ><br>
                        <p style="font-size: 10pt;font-weight:bold;">SIP & SLURP:<br>
                        NO STRAW FOR TODAY</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="floating-container">
            <a href="/menu1">
                <div class="floating-button">
                    Menu
                </div>
            </a>
        </div>

        <div class="footer">
            <ul>
                <div>
                    <span style="color:#CFB872;font-weight:bold;"><small>© 2023 Le Café, All Rights Reserved.</small></span>
                </div>
            </ul>
        </div>

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script type="text/javascript">
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 0,
                navText: [],
                center: true,
                autoplay: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\lecafe\resources\views/index1.blade.php ENDPATH**/ ?>
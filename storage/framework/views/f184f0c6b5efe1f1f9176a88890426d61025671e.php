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
                position: absolute;
            }
            .vico {
                background-color: rgb(233, 233, 233);
                color: black;
                padding: 30px;
            }
            .vico:hover {
                background-color:#CFB872;
                color: black;
            }
            .feifei {
                background-color: rgb(233, 233, 233);
                color: black;
                padding: 30px;
            }
            .feifei:hover {
                background-color:#90EE90;
                color: black;
            }
        </style>
    </head>

    <body>
        <div class="hero_area">
            <header class="header_section">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container;">
                        <span style="color:white;font-weight:bold;">Login</span>
                    </nav>
                </div>
            </header>
        </div>

        <section class="how_section layout_padding">
            <div class="how_container"'>
                <div class="box">
                    <a href="/home1">
                        <div class="vico">
                            <b>Vico Lomar</b>
                        </div>
                    </a>
                </div>
            </div>

            <div class="how_container" >
                <div class="box">
                    <div class="box">
                        <a href="/home2">
                            <div class="feifei">
                                <b>Fei Fei Liu</b>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer">
            <ul>
                <div>
                    <span style="color:white;font-weight:bold;"><small>© 2023 Le Café, All Rights Reserved.</small></span>
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
<?php /**PATH C:\xampp\htdocs\lecafe\resources\views/login.blade.php ENDPATH**/ ?>
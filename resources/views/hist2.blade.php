<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>history</title>
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
                                echo "<p sty-le='text-align:center;color:#90EE90;'><b>Good morning, Fei Fei</b><p>";
                            elseif ($t >= "12:00" && $t < "17:59"):
                                echo "<p style='text-align:center;color:#90EE90;'><strong>Good afternoon, Fei Fei</strong><p>";
                            elseif ($t >= "18:00" && $t <= "23:59"):
                                echo "<p style='text-align:center;color:#90EE90;'><strong>Good evening, Fei Fei</strong><p>";
                            else:
                                echo "<p style='text-align:center;color:#90EE90;'><strong>Hello, Fei Fei</strong><p>";
                            endif;
                        ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#90EE90;">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/home2"> Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/history2"> History </a>
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
            <div style="display:flex;">
                <div style="margin:20px;font-weight:bold;">
                    <p>Let's see your purchase history!</p>
                </div>
            </div>
            <div style="display:flex;">
                <div style="margin:20px;">
                    <p>Congratulations! You have 50 stars!</p>
                </div>
                <div style="justify-content:flex-end;">
                    <img src="images/progres2.png" style="margin:20px;align:right;width:150px;height:auto">
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-dark mr-auto" style="color:#90EE90; border-radius:100px;margin-top:-50px;margin-left:70%;font-weight:bold;">Redeem</button>
            </div>
            <div class="how_container" >
                @foreach($hist2 as $history2)
                    <div class="boks">
                        <img src="images/{{ $history2["gambar"] }}" style="margin:10px;" >
                        <p style="margin-left:0px;margin-top:20px;"><b> {{ $history2["title1"] }} <br> {{ $history2["title2"] }} </b><br><i><small> {{ $history2["price"] }} <br> {{ $history2["date"] }} </small></i></p>
                    </div>
                @endforeach
            </div>
        </section>

        <div class="footer">
            <ul>
                <div>
                    <span style="color:#90EE90;font-weight:bold;"><small>© 2023 Le Café, All Rights Reserved.</small></span>
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

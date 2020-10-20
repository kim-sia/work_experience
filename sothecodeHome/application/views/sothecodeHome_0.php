<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
    <!--  Required meta tags always come first  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>sothecodeHome</title>
    <!--  Font Awesome  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../../../css/bootstrap.min.css?after" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../../../css/mdb.min.css?after" rel="stylesheet">
    <!-- Custom styles -->
    <link href="../../../css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,600,800');
        html,
        body,
        header,
        .jarallax {
            height: 100px;
        }

        @media (max-width: 740px) {
            html,
            body,
            header,
            .jarallax {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .jarallax {
                height: 100vh;
            }
        }

        @media (min-width: 560px) and (max-width: 650px) {
            header .jarallax h1 {
                margin-bottom: 1.5rem !important;
            }
            header .jarallax h5 {
                margin-bottom: 1.5rem !important;
            }
        }

        .top-nav-collapse {
            background-color: #ffffff;
            height: 81px;
        }
        .navbar:not(.top-nav-collapse) {
            background:transparent;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: transparent;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: transparent;
            }
        }
        .container1140{
            width: 1140px;
            height: 780px;
            margin: auto;
        }
        #background{
            width: 100%;
            height: 1363px;
            background:  url(../../../about_bk_wave.png), url(../../../landing_bk_wave.png);
            background-color: #5165ff;
            background-position: center 101%, center 43.5%;
            background-repeat: repeat-x, no-repeat;
        }
        #background2{
            width: 100%;
            background-color: #f7f9fc;
        }
        #background3{
            width: 100%;
            height: 1100px;
            background-color: #f7f9fc;
        }
        #background4{
            width: 100%;
            height: 1180px;
            background-color: #282b43;
        }
    </style>
</head>
<body>
<!-- Main Navigation -->
<header style="background-color: #5165ff">

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="margin: auto">
            <div class="container smooth-scroll">
                <a href="#" style="padding-top: 23.6px; padding-right: 94px;"><img style="width: 122px; height: 30.3px;" src="../../../gnb_logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav mr-auto" style="padding-top:9px">
                        <li class="nav-item" style="padding-right: 7px; padding-bottom: 1px;">
                            <a class="nav-link" href="#home" id = "Home">Home</a>
                        </li>
                        <li class="nav-item" style="padding-left: 8px; padding-right: 7px; padding-bottom: 1px;">
                            <a class="nav-link" href="#about" id = "About">About</a>
                        </li>
                        <li class="nav-item" style="padding-left: -5px; padding-right: -5px; padding-bottom: 1px;">
                            <a class="nav-link" href="#company" id = "Company">Company</a>
                        </li>
                        <li class="nav-item" style="padding-left:20px; padding-right: 19px; padding-bottom: 1px;">
                            <a class="nav-link" href="#pr" id = "PR">PR</a>
                        </li>
                        <li class="nav-item" style="padding-left:4px; padding-right: 4px; padding-bottom: 1px;">
                            <a class="nav-link" href="#project" id = "Project">Project</a>
                        </li>
                        <li class="nav-item" style="padding-left:1px; padding-right: 1px; padding-bottom: 1px;">
                            <a class="nav-link" href="#contact" id = "Contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<!-- Navbar -->

</header>

<!-- Main Layout -->
<main>

    <div id = background>

    <!-- Home Section -->
    <section id="home" class="view jarallax container1140" data-jarallax='{"speed": 0.2}'>
        <?php include ("home.php"); ?>
    </section>
    <!-- Home Section -->

    <!-- About Section -->
        <section id="about" class="wow fadeIn container1140" data-wow-delay="0.3s">
            <?php include ("about.php"); ?>
        </section>
    <!-- About Section -->
    </div>

    <div id="background2">

            <!-- Section: Features v.1 -->
            <section id="company" class="text-center wow fadeIn container1140" data-wow-delay="0.3s">
                <?php include ("company.php"); ?>
            </section>
            <!-- Section: Features v.1 -->

            <!-- Section: Gallery -->
            <section id="pr" class="section wow fadeIn" data-wow-delay="0.3s">

                <div class="row pb-4">
                    <div class="col-md-12">

                        <div id="mdb-lightbox-ui"></div>

                        <div class="mdb-lightbox">

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(43).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(43).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(41).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(41).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(40).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(40).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(14).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(14).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(42).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(42).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(132).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(132).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                        </div>

                    </div>

                </div>
            </section>
            <!-- /Section: Gallery -->
    </div>

    <div id = "background3">
        <div class = "container1140">
            <section id="project" class="text-center wow fadeIn" data-wow-delay="0.3s">
                <?php include ("project.php"); ?>
            </section>
        </div>
    </div>


<div id = "background4">
    <div class="container1140">

        <!-- Map Section -->
            <iframe src="https://snazzymaps.com/embed/133598" width="1140px" height="559px" style="border:none;"></iframe>
        <!-- Map Section -->

        <!-- contact_us -->
            <section id="contact" class="section pb-5 wow fadeIn" data-wow-delay="0.3s" >
                <?php include ("contact_us.php"); ?>
            </section>

        <!-- contact_us -->
    </div>
    </div>
</main>
<!-- Main Layout -->
<footer>
<!-- Copyright -->
<div class="footer-copyright py-3 text-center">
    <div class="container-fluid" style="color:#2699fb; padding-top: 18px">
        Copyright &copy; NAVER Corp. All Rights Reserved.</a>

    </div>
</div>
<!-- Copyright -->
</footer>

<!--  SCRIPTS  -->
<!-- JQuery -->
<script type="text/javascript" src="../../../js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../../../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../../../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../../../js/mdb.min.js"></script>
<script>
    new WOW().init();

    // MDB Lightbox Init
    $(function () {
        $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
    });

</script>
</body>
</html>
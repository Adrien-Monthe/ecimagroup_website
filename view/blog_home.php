<?php
// include language configuration file based on selected language
$language = null;
$lang = "fr";
if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
}
require_once("../language/lang.".$lang.".php");

?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="<?php echo $lang ?>"><!--<![endif]-->

<!-- Mirrored from demo.wpxpress.net/black/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 08:57:58 GMT -->
<head>
    <base href="http://localhost/ecimagroup_test/"/>
    <!-- META TAG -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- SITE TITLE -->
    <title>ECIMA GROUP</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/png" href="assets/img/ecima/ecima-group-logo.png"/>
    <!-- All CSS -->
    <!-- GOOGLE FONT CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700" rel="stylesheet">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <!-- ET-LINE CSS -->
    <link rel="stylesheet" href="assets/fonts/et-line.css">
    <!-- VENOBOX css -->
    <link rel="stylesheet" href="assets/css/venobox.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- COLOR SWITCHER CSS -->
    <link rel="stylesheet" href="assets/css/switcher/switcher.css">
    <link rel="stylesheet" href="assets/css/switcher/style1.css" id="colors">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- START PRELOADER -->
<div class="preloader"></div>
<!-- / END PRELOADER -->

<style>
    #style-switcher h2 a { background: #151e8d; }
    .section-title h2::after {
        border-bottom: 3px double #151e8d;
    }
    .carousel-indicators .active {
        background-color: #151e8d;
    }
    .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots .owl-dot:hover span {
        background: #151e8d none repeat scroll 0 0;
    }
    .header-top-info {
        background: #151e8d none repeat scroll 0 0;
    }
    .button{
        color: #151e8d;
        border: 2px solid #151e8d;
    }
    .button:before {
        background: #151e8d none repeat scroll 0 0;
    }
    .home-btn-bg {
        background: #151e8d;
    }
    .mainmenu ul.nav.navbar-nav li a:hover { color: #151e8d !important }
    .is-sticky .mainmenu ul.nav.navbar-nav li.active a { color: #151e8d !important }
    .is-sticky .navbar-brand {
        color: #151e8d !important;
    }
    .skills-progress .progress-bar {
        background: #151e8d none repeat scroll 0 0;
    }
    .about-text li i {
        color: #151e8d;
    }
    .single-service i {
        color: #151e8d;
    }
    a.read-more:hover i,
    a.read-more:hover {
        color:#151e8d;
    }
    .count-area:after {
        background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;
    }
    .single-choose i {
        color: #000;
    }
    .single-choose:hover i {
        background: #151e8d;
    }
    .portfolio-filter ul li.active,
    .portfolio-filter ul li:hover { border: 2px solid #151e8d }
    .work-icon a:hover{
        color: #151e8d !important;
    }
    .testimonial-area:after {
        background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;
    }
    .team-social-link a:hover{
        color: #151e8d !important;
    }
    .single_pricing.recommended .price h4,
    .single_pricing:hover .price h4 { color: #151e8d }
    .single-product > a > i {
        background: #151e8d none repeat scroll 0 0;
    }
    .blog-content span i {
        color: #151e8d;
    }
    .subscribe-area:after {
        background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;
    }
    .signup-btn-bg:hover {
        color: #151e8d !important;
    }
    .form-control:hover,
    .form-control:focus {
        border-color: -moz-use-text-color -moz-use-text-color #151e8d;
    }
    .btn-contact-bg:hover,
    .btn-contact-bg:focus {
        background: #151e8d none repeat scroll 0 0;
    }
    .single-contact-info i {
        background: #151e8d;
    }
    .single-latest-post span i {
        color: #151e8d;
    }
    .single-latest-post:hover a h2{
        color: #151e8d;
    }
    .footer-widget ul li a i {
        color: #151e8d;
    }
    .footer-widget ul li a:hover {
        color: #151e8d;
    }
    .social-icon a i:hover {
        color: #151e8d;
    }
    .copyright {
        background: #151e8d;
    }
    .single-blog-info span i,
    .single-comment span i {
        color: #151e8d;
    }
    .search-box input:hover ,
    .search-box input:focus {	border: 1px solid #151e8d }
    .categories li a:hover {
        color: #151e8d;
    }
    .categories li a i {
        color: #151e8d;
    }
    .tags li a:hover {
        background: #151e8d none repeat scroll 0 0;
        border: 1px solid #151e8d;
    }
    .details-single-project li a,
    .details-single-project li i {
        color: #151e8d;
    }
</style>

<!-- START HEADER DESIGN AREA -->
<header id="home" class="header-area">
    <!-- START HEADER TOP DESIGN AREA -->
    <div class="header-top-area">
        <!-- START HEADER TOP INFO DESIGN AREA -->
        <div class="header-top-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <div class="top-info-left">
                            <a href="#"><i class="fa fa-envelope"></i>info@ecimagroup.com</a>
                            <a href="#"><i class="fa fa-phone"></i>+(237) 694-926-164</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <div class="top-info-right">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / END HEADER TOP INFO DESIGN AREA -->
        <!-- START MENU DESIGN AREA -->
        <div class="container">
            <div class="navbar navbar-default mainmenu">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="row hidden-xs hidden-sm">
                        <div class="col-md-4 "><img src="assets/img/ecima/ecima-group-logo.png" alt="" style="width: 80px"></div>
                        <div class="col-md-8"><a class="navbar-brand" href="#">ECIMAGROUP</a></div>
                    </div>
                    <a class="navbar-brand hidden-lg hidden-md" style="font-size: 24px" href="index-2.html">ECIMAGROUP</a>

                </div>
                <div class="navbar-collapse collapse">
                    <nav>
                        <ul class="nav navbar-nav navbar-right">

                            <li><a class="smoth-scroll" href="#investment"><?php echo $language['menu_financial_intermediation'] ?></a></li>
                            <li><a class="smoth-scroll" href="#energy"><?php echo $language['menu_energy_networks'] ?></a></li>
                            <li><a class="smoth-scroll" href="#informatique"><?php echo $language['menu_consulting_it'] ?></a></li>
                            <li><a class="smoth-scroll" href="#training"><?php echo $language['menu_recrutement_training'] ?></a></li>
                            <li>

                                <?php if($lang == 'en'){?>
                                    <a class="smoth-scroll" href="view/home.php?lang=fr">FR</a>

                                <?php } elseif ($lang == 'fr') {?>
                                    <a class="smoth-scroll" href="view/home.php?lang=en">EN</a>
                                <?php }?>

                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- / END MENU DESIGN AREA -->
    </div>
    <!-- / END HEADER TOP DESIGN AREA -->

    <!-- START HEADER SLIDE DESIGN AREA -->
    <div class="home-slide-area">
        <div id="home-carousel" class="carousel slide carousel-fade" data-interval="5000" data-ride="carousel">
            <ol class="carousel-indicators carousel-indicators-slider">
                <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home-carousel" data-slide-to="1"></li>
                <li data-target="#home-carousel" data-slide-to="2"></li>
                <li data-target="#home-carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- START SINGLE SLIDE ITEM DESIGN AREA -->
                <div class="item active">
                    <div class="single-slide-bg slide-bg1" data-stellar-background-ratio="0.7">
                        <div class="home-display-table">
                            <div class="home-display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2><?php echo $language['financial_intermediation'] ?></h2>
                                            <p><?php echo $language['financial_intermediation_slider_text'] ?></p>
                                            <a class="button home-btn-bg smoth-scroll" href="#about"><?php echo $language['learn_more'] ?></a>
                                            <a class="button smoth-scroll" href="#contact"><?php echo $language['get_started'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE SLIDE ITEM DESIGN AREA -->

                <!-- START SINGLE SLIDE ITEM DESIGN AREA -->
                <div class="item">
                    <div class="single-slide-bg slide-bg2" data-stellar-background-ratio="0.7">
                        <div class="home-display-table">
                            <div class="home-display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2><?php echo $language['energy_networks'] ?></h2>
                                            <p><?php echo $language['energy_networks_slider_text'] ?></p>
                                            <a class="button home-btn-bg smoth-scroll" href="#about"><?php echo $language['learn_more'] ?></a>
                                            <a class="button smoth-scroll" href="#contact"><?php echo $language['get_started'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE SLIDE ITEM DESIGN AREA -->

                <!-- START SINGLE SLIDE ITEM DESIGN AREA -->
                <div class="item">
                    <div class="single-slide-bg slide-bg3" data-stellar-background-ratio="0.7">
                        <div class="home-display-table">
                            <div class="home-display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2><?php echo $language['consulting_it'] ?></h2>
                                            <p><?php echo $language['consulting_it_slider_text'] ?></p>
                                            <a class="button home-btn-bg smoth-scroll" href="#about">Learn More</a>
                                            <a class="button smoth-scroll" href="#contact">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE SLIDE ITEM DESIGN AREA -->

                <!-- START SINGLE SLIDE ITEM DESIGN AREA -->
                <div class="item">
                    <div class="single-slide-bg slide-bg4" data-stellar-background-ratio="0.7">
                        <div class="home-display-table">
                            <div class="home-display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2><?php echo $language['recrutement_training'] ?></h2>
                                            <p><?php echo $language['recrutement_training_slider_text'] ?></p>
                                            <a class="button home-btn-bg smoth-scroll" href="#about">Learn More</a>
                                            <a class="button smoth-scroll" href="#contact">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE SLIDE ITEM DESIGN AREA -->
            </div>
        </div>
    </div>
    <!-- / END HEADER SLIDE DESIGN AREA -->
</header>
<!-- / END HEADER DESIGN AREA -->

<!-- START ABOUT DESIGN AREA -->
<section id="investment" class="about-area section-padding">
    <div class="container">
        <div class="row">
            <!-- START SECTION TITLE DESIGN AREA -->
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><?php echo $language['financial_intermediation'] ?></h2>
                    <p><?php echo $language['financial_intermediation_slider_text'] ?></p>
                </div>
            </div>
            <!-- / END SECTION TITLE DESIGN AREA -->
        </div>
        <div class="row">
            <!-- START ABOUT SKILLS DESIGN AREA -->
            <!--<div class="col-md-6">
                <div class="skills-progress">
                    <h3>Our Skills</h3>
                    <div class="progress">
                        <div class="lead">Design</div>
                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 85%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="85%" class="progress-bar wow fadeInLeft">
                            <p><span class="timer">85</span>%</p>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="lead">Development</div>
                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 90%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="90%" class="progress-bar wow fadeInLeft">
                            <p><span class="timer">90</span>%</p>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="lead">Branding</div>
                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 85%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="85%" class="progress-bar wow fadeInLeft">
                            <p><span class="timer">85</span>%</p>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="lead">Copyrighting</div>
                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 70%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="70%" class="progress-bar wow fadeInLeft">
                            <p><span class="timer">70</span>%</p>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="lead">Marketing</div>
                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 75%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="75%" class="progress-bar wow fadeInLeft">
                            <p><span class="timer">75</span>%</p>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="col-md-6">
                <div class="video-area">
                    <img src="assets/img/ecima/img12.jpeg">
                </div>
            </div>
            <!-- / END ABOUT SKILLS DESIGN AREA -->
            <!-- START ABOUT TEXT DESIGN AREA -->
            <div class="col-md-6">
                <div class="about-text">
                    <h3>ECIMA <span>INVESTMENT</span></h3>
                    <p style="text-align: justify"><?php echo $language['ecima_investment_text_1'] ?>
                    </p>
                    <br>
                    <p style="text-align: justify">
                        <?php echo $language['ecima_investment_text_2'] ?>
                    </p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check"></i><?php echo $language['ecima_investment_reason_1'] ?></li>
                        <li><i class="fa fa-check"></i><?php echo $language['ecima_investment_reason_2'] ?></li>
                        <li><i class="fa fa-check"></i><?php echo $language['ecima_investment_reason_3'] ?></li>
                        <li><i class="fa fa-check"></i><?php echo $language['ecima_investment_reason_4'] ?></li>
                        <li><i class="fa fa-check"></i><?php echo $language['ecima_investment_reason_5'] ?></li>
                    </ul>
                    <a href="http://investment.ecimagroup.com/" class="button"><?php echo $language['learn_more'] ?></a>
                </div>
            </div>
            <!-- / END ABOUT TEXT DESIGN AREA -->
        </div>
    </div>
</section>
<!-- /END ABOUT DESIGN AREA -->



<!-- START CHOSSE DESIGN AREA -->
<section id="energy" class="partner-area section-padding">
    <div class="container">
        <div class="row">
            <!-- START SECTION TITLE DESIGN AREA -->
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><?php echo $language['energy_networks'] ?></h2>
                    <p><?php echo $language['energy_networks_text'] ?></p>
                </div>
            </div>
            <!-- / END SECTION TITLE DESIGN AREA -->
        </div>
        <div class="row">
            <!-- START SINGLE CHOOSE DESIGN AREA -->
            <div class="row">
                <div class="col-md-6">
                    <div class="single-choose">
                        <i class="icon-speedometer"></i>
                        <h5><?php echo $language['energy_networks_optic'] ?></h5>
                        <p style="text-align: justify"><?php echo $language['energy_networks_optic_text'] ?></p>
                    </div>
                </div>
                <!-- / END SINGLE CHOOSE DESIGN AREA -->
                <!-- START SINGLE CHOOSE DESIGN AREA -->
                <div class="col-md-6">
                    <div class="single-choose">
                        <i class="icon-globe"></i>
                        <h5><?php echo $language['energy_networks_transmission'] ?></h5>
                        <p style="text-align: justify"><?php echo $language['energy_networks_transmission_text'] ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- START SINGLE CHOOSE DESIGN AREA -->
                <div class="col-md-6">
                    <div class="single-choose">
                        <i class="icon-shield"></i>
                        <h5><?php echo $language['energy_networks_it_solution'] ?></h5>
                        <p style="text-align: justify"><?php echo $language['energy_networks_it_solution_text'] ?></p>
                    </div>
                </div>
                <!-- / END SINGLE CHOOSE DESIGN AREA -->
                <!-- START SINGLE CHOOSE DESIGN AREA -->
                <div class="col-md-6">
                    <div class="single-choose">
                        <i class="icon-lightbulb"></i>
                        <h5><?php echo $language['energy_networks_renewable_energy'] ?></h5>
                        <p style="text-align: justify"><?php echo $language['energy_networks_renewable_energy_text'] ?></p>
                    </div>
                </div>
                <!-- / END SINGLE CHOOSE DESIGN AREA -->
            </div>

            <!-- / END SINGLE CHOOSE DESIGN AREA -->

        </div>
        <div class="portfolio-btn text-center">
            <a href="http://www.cistel-solutions.com/en/" target="_blank" class="button"><i class="fa fa-arrow-right"></i><?php echo $language['menu_visit_site'] ?></a>
        </div>
    </div>
</section>
<!-- / END CHOSSE DESIGN AREA -->



<!-- START INFORMATIQUE AREA -->
<section id="informatique" class="choose-area section-padding">
    <div class="container">
        <div class="row">
            <!-- START SECTION TITLE DESIGN AREA -->
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><?php echo $language['consulting_it'] ?></h2>
                    <p><?php echo $language['recrutement_training_slider_text'] ?></p>
                </div>
            </div>
            <!-- / END SECTION TITLE DESIGN AREA -->
        </div>
        <div class="row">
            <!-- START SINGLE BLOG DESIGN AREA -->
            <div class="col-md-4 col-sm-6">
                <div class="single-blog">
                    <img src="assets/img/ecima/img7.jpeg" class="img-responsive" alt="Blog-Image">
                    <div class="blog-content">
                        <span><i class="icon-map-pin"></i> 329 rue Silvani Akwa – Douala</span>
                        <a href="https://ecimaconsulting.com/" target="_blank"><h2><?php echo $language['ecima_consulting'] ?></h2></a>
                        <p style="text-align: justify"><?php echo $language['ecima_consulting_text'] ?></p>
                        <a href="https://ecimaconsulting.com/" target="_blank" class="read-more"><i class="fa fa-arrow-right"></i><?php echo $language['menu_visit_site'] ?></a>
                    </div>
                </div>
            </div>
            <!-- / END SINGLE BLOG DESIGN AREA -->
            <!-- START SINGLE BLOG DESIGN AREA -->
            <div class="col-md-4 col-sm-6">
                <div class="single-blog">
                    <img src="assets/img/ecima/img8.jpeg" class="img-responsive" alt="Blog-Image">
                    <div class="blog-content">
                        <span><i class="icon-map-pin"></i> 191-195 Avenue Charles De Gaulles</span>
                        <a href="https://cistel-consulting.com/" target="_blank"><h2><?php echo $language['cistel_consulting'] ?></h2></a>
                        <p style="text-align: justify"><?php echo $language['cistel_consulting_text'] ?></p>
                        <a href="https://cistel-consulting.com/" target="_blank" class="read-more"><i class="fa fa-arrow-right"></i><?php echo $language['menu_visit_site'] ?></a>
                    </div>
                </div>
            </div>
            <!-- / END SINGLE BLOG DESIGN AREA -->
            <!-- START SINGLE BLOG DESIGN AREA -->
            <div class="col-md-4 col-sm-6">
                <div class="single-blog">
                    <img src="assets/img/ecima/img11.jpg" class="img-responsive" alt="Blog-Image">
                    <div class="blog-content">
                        <span><i class="icon-map-pin"></i> 329 rue Silvani Akwa – Douala</span>
                        <a href="http://www.ecimadigital.ecimaconsulting.com/" target="_blank"><h2><?php echo $language['ecima_digital'] ?></h2></a>
                        <p style="text-align: justify"><?php echo $language['ecima_digital_text'] ?></p>
                        <a href="http://www.ecimadigital.ecimaconsulting.com/" target="_blank" class="read-more"><i class="fa fa-arrow-right"></i><?php echo $language['menu_visit_site'] ?></a>
                    </div>
                </div>
            </div>
            <!-- / END SINGLE BLOG DESIGN AREA -->
        </div>
        <!-- <div class="blog-btn text-center">
             <a href="#" class="button"><i class="fa fa-refresh"></i>See More Post</a>
         </div>-->
    </div>
</section>
<!-- / END INFORMATIQUE DESIGN AREA -->

<!-- START HOW WORK DESIGN AREA -->
<section id="training" class="partner-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="video-text">
                    <h3><?php echo $language['recrutement_training'] ?></h3>
                    <p><b><?php echo $language['recrutement_training_title_1'] ?></b> <br> <?php echo $language['recrutement_training_title_1_text'] ?> </p>
                    <p><b><?php echo $language['recrutement_training_title_2'] ?></b> <br> <?php echo $language['recrutement_training_title_2_text'] ?> </p>
                </div>
            </div>
            <div class="col-md-6">
                <br>
                <div class="video-area">
                    <img height="300px" src="assets/img/ecima/img13.jpg">
                </div>
            </div>
        </div>
        <div class="portfolio-btn text-center">
            <a href="https://formation.ecimaconsulting.com" class="button"><i class="fa fa-arrow-right"></i><?php echo $language['menu_visit_site'] ?></a>
        </div>
    </div>
</section>
<!-- START HOW WORK DESIGN AREA -->


<!-- START PARTNER DESIGN AREA -->
<!--<div class="choose-area section-padding text-center">
    <div class="container">
        <div class="row">
            <div class="owl-carousel" id="partner-carousel">
                <div class="col-md-2 col-sm-4 item">
                    <img src="assets/img/partner/1.png" class="img-responsive" alt="Partner">
                </div>
                <div class="col-md-2 col-sm-4 item">
                    <img src="assets/img/partner/2.png" class="img-responsive" alt="Partner">
                </div>
                <div class="col-md-2 col-sm-4 item">
                    <img src="assets/img/partner/3.png" class="img-responsive" alt="Partner">
                </div>
                <div class="col-md-2 col-sm-4 item">
                    <img src="assets/img/partner/4.png" class="img-responsive" alt="Partner">
                </div>
                <div class="col-md-2 col-sm-4 item">
                    <img src="assets/img/partner/5.png" class="img-responsive" alt="Partner">
                </div>
                <div class="col-md-2 col-sm-4 item">
                    <img src="assets/img/partner/6.png" class="img-responsive" alt="Partner">
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- / END PARTNER DESIGN AREA -->


<!-- START PORTFOLIO DESIGN AREA -->
<section id="portfolio" class="how-work-area section-padding">
    <div class="container">
        <div class="row">
            <!-- START SECTION TITLE DESIGN AREA -->
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Blog</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.</p>
                </div>
            </div>
            <!-- / END SECTION TITLE DESIGN AREA -->
        </div>
        <div class="row">
            <!-- START PORTFOLIO FILTER-->
            <div class="portfolio-filter text-center">
                <ul class="list-unstyled">
                    <li class="filter active" data-filter="all">all</li>
                    <li class="filter" data-filter="graphic">Graphic</li>
                    <li class="filter" data-filter="print">Print</li>
                    <li class="filter" data-filter="webdesign">webdesign</li>
                </ul>
            </div>
            <!-- / END PORTFOLIO FILTER-->
            <div class="grid">
                <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-md-4 col-sm-6 mix print webdesign">
                    <div class="single-work">
                        <img src="assets/img/portfolio/1.jpg" class="img-responsive" alt="portfolio">
                        <div class="work-overlay">
                            <div class="work-title">
                                <h5>Project Title Here</h5>
                                <p>Web Design</p>
                            </div>
                            <div class="work-icon">
                                <a href="assets/img/portfolio/1.jpg" class="image-popup" data-gall="gall-work">
                                    <i class="icon-camera"></i>
                                </a>
                                <a href="single-project.html" target="_blank">
                                    <i class="icon-attachment"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-md-4 col-sm-6 mix print webdesign">
                    <div class="single-work">
                        <img src="assets/img/portfolio/2.jpg" class="img-responsive" alt="portfolio">
                        <div class="work-overlay">
                            <div class="work-title">
                                <h5>Project Title Here</h5>
                                <p>Web Design</p>
                            </div>
                            <div class="work-icon">
                                <a href="assets/img/portfolio/2.jpg" class="image-popup" data-gall="gall-work">
                                    <i class="icon-camera"></i>
                                </a>
                                <a href="single-project.html" target="_blank">
                                    <i class="icon-attachment"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-md-4 col-sm-6 mix graphic">
                    <div class="single-work">
                        <img src="assets/img/portfolio/3.jpg" class="img-responsive" alt="portfolio">
                        <div class="work-overlay">
                            <div class="work-title">
                                <h5>Project Title Here</h5>
                                <p>Graphic</p>
                            </div>
                            <div class="work-icon">
                                <a href="assets/img/portfolio/3.jpg" class="image-popup" data-gall="gall-work">
                                    <i class="icon-camera"></i>
                                </a>
                                <a href="single-project.html" target="_blank">
                                    <i class="icon-attachment"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-md-4 col-sm-6 mix print">
                    <div class="single-work">
                        <img src="assets/img/portfolio/4.jpg" class="img-responsive" alt="portfolio">
                        <div class="work-overlay">
                            <div class="work-title">
                                <h5>Project Title Here</h5>
                                <p>Print</p>
                            </div>
                            <div class="work-icon">
                                <a href="assets/img/portfolio/4.jpg" class="image-popup" data-gall="gall-work">
                                    <i class="icon-camera"></i>
                                </a>
                                <a href="single-project.html" target="_blank">
                                    <i class="icon-attachment"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-md-4 col-sm-6 mix webdesign graphic">
                    <div class="single-work">
                        <img src="assets/img/portfolio/5.jpg" class="img-responsive" alt="portfolio">
                        <div class="work-overlay">
                            <div class="work-title">
                                <h5>Project Title Here</h5>
                                <p>Web Design</p>
                            </div>
                            <div class="work-icon">
                                <a href="assets/img/portfolio/5.jpg" class="image-popup" data-gall="gall-work">
                                    <i class="icon-camera"></i>
                                </a>
                                <a href="single-project.html" target="_blank">
                                    <i class="icon-attachment"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-md-4 col-sm-6 mix graphic">
                    <div class="single-work">
                        <img src="assets/img/portfolio/6.jpg" class="img-responsive" alt="portfolio">
                        <div class="work-overlay">
                            <div class="work-title">
                                <h5>Project Title Here</h5>
                                <p>Graphic</p>
                            </div>
                            <div class="work-icon">
                                <a href="assets/img/portfolio/6.jpg" class="image-popup" data-gall="gall-work">
                                    <i class="icon-camera"></i>
                                </a>
                                <a href="single-project.html" target="_blank">
                                    <i class="icon-attachment"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- START SINGLE PORTFOLIO DESIGN AREA -->
            </div>
        </div>
        <div class="portfolio-btn text-center">
            <a href="#" class="button"><i class="fa fa-refresh"></i>See More Work</a>
        </div>
    </div>
</section>
<!-- / END PORTFOLIO DESIGN AREA -->

<!-- START FOOTER TOP DESIGN AREA -->
<section class="footer-top-area section-padding">
    <div class="container">
        <div class="row">
            <!-- START SINGLE FOOTER WIDGET DESIGN AREA -->
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h4>ECIMA CONSULTING | CMR</h4>
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-map-pin"></i>
                        <h6><?php echo $language['menu_address'] ?></h6>
                        <p>329 Rue Silvani Akwa, Cameroun</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-phone"></i>
                        <h6><?php echo $language['menu_phone'] ?></h6>
                        <p>+237 694 926 164</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-envelope"></i>
                        <h6><?php echo $language['menu_email'] ?></h6>
                        <p>contact@ecimaconsulting.com</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-global"></i>
                        <h6><?php echo $language['menu_web'] ?></h6>
                        <p>www.ecimaconsulting.com</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                </div>
            </div>
            <!-- / END SINGLE FOOTER WIDGET DESIGN AREA -->
            <!-- START SINGLE FOOTER WIDGET DESIGN AREA -->
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h4>ECIMA CI | CI</h4>
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-map-pin"></i>
                        <h6><?php echo $language['menu_address'] ?></h6>
                        <p>Cocody II Plateaux, Cote d'Ivoire</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-phone"></i>
                        <h6><?php echo $language['menu_phone'] ?></h6>
                        <p>+237 694 926 164</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-envelope"></i>
                        <h6><?php echo $language['menu_email'] ?></h6>
                        <p>contact@ecimaconsulting.com</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-global"></i>
                        <h6><?php echo $language['menu_web'] ?></h6>
                        <p>www.ecimaconsulting.com</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                </div>
            </div>
            <!-- / END SINGLE FOOTER WIDGET DESIGN AREA -->
            <!-- START SINGLE FOOTER WIDGET DESIGN AREA -->
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h4>ECIMA LTD | RWD</h4>
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-map-pin"></i>
                        <h6><?php echo $language['menu_address'] ?></h6>
                        <p>Kigali City, KN 2 AV 270, Rwanda</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-phone"></i>
                        <h6><?php echo $language['menu_phone'] ?></h6>
                        <p>+237 694 926 164</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-envelope"></i>
                        <h6><?php echo $language['menu_email'] ?></h6>
                        <p>contact@ecimaconsulting.com</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-global"></i>
                        <h6><?php echo $language['menu_web'] ?></h6>
                        <p>www.ecimaconsulting.com</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                </div>
            </div>
            <!-- / END SINGLE FOOTER WIDGET DESIGN AREA -->
            <!-- START SINGLE FOOTER WIDGET DESIGN AREA -->
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h4>CISTEL | FR</h4>
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-map-pin"></i>
                        <h6><?php echo $language['menu_address'] ?></h6>
                        <p>92200 Neuilly /Seine, France</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-phone"></i>
                        <h6><?php echo $language['menu_phone'] ?></h6>
                        <p>+33 628 603 272</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-envelope"></i>
                        <h6><?php echo $language['menu_email'] ?></h6>
                        <p>contact@cistel-solutions.com</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                    <!-- START CONTACT INFO DESIGN AREA -->
                    <div class="single-contact-info">
                        <i class="icon-global"></i>
                        <h6><?php echo $language['menu_web'] ?></h6>
                        <p>www.cistel-solutions.com</p>
                    </div>
                    <!-- / END CONTACT INFO DESIGN AREA -->
                </div>
            </div>
            <!-- / END SINGLE FOOTER WIDGET DESIGN AREA -->
        </div>
    </div>
</section>
<!-- / END FOOTER TOP DESIGN AREA -->

<!-- START FOOTER DESIGN AREA -->
<footer class="copyright text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><?php echo $language['ecima_copyright'] ?></p>
                <p><?php echo $language['ecima_design'] ?></p>
            </div>
        </div>
    </div>
</footer>
<!-- / END FOOTER DESIGN AREA -->

<!-- SWITCHER DESIGN -->
<!--<div id="style-switcher">
    <h2>Choose Color<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
    <div>
        <ul class="colors" id="color1">
            <li><a href="#" class="style1"></a></li>
            <li><a href="#" class="style2"></a></li>
            <li><a href="#" class="style3 animated infinite pulse"></a></li>
            <li><a href="#" class="style4"></a></li>
            <li><a href="#" class="style5"></a></li>
            <li><a href="#" class="style6"></a></li>
        </ul>
    </div>
</div>-->
<!-- / END SWITCHER DESIGN -->

<!-- All jQuery -->
<!-- JQUERY LATEST VERSION -->
<script src="assets/js/jquery-1.12.4.min.js"></script>
<!-- BOOTSTRAP JS-->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- OWL CAROUSEL JS -->
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- STEALLER JS -->
<script src="assets/js/jquery.stellar.min.js"></script>
<!-- MIXITUP JS -->
<script src="assets/js/jquery.mixitup.min.js"></script>
<!-- INVIEW JS -->
<script src="assets/js/jquery.inview.min.js"></script>
<!-- VENOBOX JS -->
<script src="assets/js/venobox.min.js"></script>
<!-- SWITCHER JS -->
<script src="assets/js/switcher.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.js"></script>
<!-- STICKY JS -->
<script src="assets/js/jquery.sticky.js"></script>
<!-- CONTACT FORM JS -->
<script src="assets/js/form-contact.js"></script>
<!-- AJAXCHIMP JS -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<!-- GOOGLE MAP JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
<!-- JQUERY MAIN SCRIPTS -->
<script src="assets/js/scripts.js"></script>
</body>

<!-- Mirrored from demo.wpxpress.net/black/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 08:59:10 GMT -->
</html>


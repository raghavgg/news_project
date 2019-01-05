<?php
$server = "http://localhost/news_project";
include_once($server."/common/common.php");
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <!-- <link rel="shortcut icon" href="img/fav.png"> -->
        <!-- Author Meta -->
        <meta name="author" content="sakshi">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Magazine</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
            CSS
            ============================================= -->
        <link rel="stylesheet" href="<?php echo $server; ?>/css/linearicons.css">
        <link rel="stylesheet" href="<?php echo $server; ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $server; ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $server; ?>/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo $server; ?>/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo $server; ?>/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo $server; ?>/css/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo $server; ?>/css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    </head>
    <body>
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
                            <ul>
                                <li><a href="tel:+440 012 3654 896"><span class="fa fa-phone"></span><span> +123 4567890</span></a></li>
                                <li><a href=""><span class="fa fa-envelope"></span><span> magazines@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                            <a href="index.html"> <img class="img-fluid" src="../img/logo.png" alt=""> </a>
                        </div>
                        <!-- <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
                            <img class="img-fluid" src="img/banner-ad.jpg" alt="">
                            </div> -->
                    </div>
                </div>
            </div>
            <div class="main-menu" id="main-menu">
                <div class="row align-items-center justify-content-between menu-center">
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="../index.html">Home</a></li>
                            <li><a href="<?php echo $server; ?>/admin/news.html">News</a></li>
                            <li><a href="<?php echo $server; ?>/articles.html">CPD Articles</a></li>
                            <li><a href="<?php echo $server; ?>/employment.html">Employment</a></li>
                            <li><a href="<?php echo $server; ?>/sale.html">For Sale</a></li>
                            <li><a href="<?php echo $server; ?>/contact.html">Contact Us</a></li>
                            <li class="menu-has-children">
                                <a href="">User</a>
                                <ul>
                                    <li><a href="settings.html">Settings</a></li>
                                    <li><a href="result.html">Results</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- #nav-menu-container -->
                    <div class="navbar-right">
                        <form class="Search">
                            <input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
                            <label for="Search-box" class="Search-box-label"> <span class="lnr lnr-magnifier"></span> </label> <span class="Search-close">
                            <span class="lnr lnr-cross"></span> </span>
                        </form>
                    </div>
                </div>
            </div>
        </header>

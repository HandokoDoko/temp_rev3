<!doctype html>
<html lang="en">

<head>
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/rubick_pres.css" rel="stylesheet"/>

        <!-- use rapido -->
        <!-- start: MAIN CSS -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
        <link rel="stylesheet" href="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
        <link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
        <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.transitions.css">
        <link rel="stylesheet" href="assets/plugins/summernote/dist/summernote.css">
        <link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
        <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
        <link rel="stylesheet" href="assets/plugins/bootstrap-select/bootstrap-select.min.css">
        <link rel="stylesheet" href="assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
        <link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css">
        <link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
        <link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
        <!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <link rel="stylesheet" href="assets/plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="assets/plugins/nvd3/nv.d3.min.css">
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- start: CORE CSS -->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/styles-responsive.css">
        <link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="assets/css/themes/theme-default.css" type="text/css" id="skin_color">
        <link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
        <!-- end: CORE CSS -->
        <link rel="shortcut icon" href="favicon.ico" />

        <!--     Fonts and icons     -->
        <link href="../maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
        <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/css/fonts/Rubik-Fonts.css" rel="stylesheet" />

        <style>
            .section-header .separator {
                margin: 0em auto 2em;
            }
            .space-50{
                height: 50px;
                width: 100%;
                display: block;
                content: "";
            }
            .section .parallax > img{
                width: 100%;
                min-width: 0;
                min-height: 0;
            }
            .pattern-image:after{
                opacity: .2;
/*                 background: #111; */
            }
            .section-header h1{
                text-shadow: -2px 2px 30px rgba(0, 0, 0, 0.25), -2px 4px 14px rgba(0, 0, 0, 0.1);
            }
            .section-header h5{
                  text-shadow: 0px 0px 11px rgba(0, 0, 0, 0.3);
            }
            .section-header .content{
                top: 42%;
            }
            .section-we-are-1 .title{
                max-width: 960px;
            }
            .card .icon ~ h3{
                margin-bottom: 10px;
            }
            .section-with-hover .project .content{
                text-align: center;
            }
            .section-with-hover .project .over-area{
                background: rgba(0, 0, 0, .83);
            }
            .section-clients-2{
                padding: 6em 0 1em;
            }
            .section-clients-2 .nav-text li {
                margin: 0 15px 10px 15px;
            }
            .section-contact-3 .contact-container .address-container{
                width: 28%;
                background-color: #FFFFFF;
                height: 470px;
                top: 50px;
                padding: 20px;
            }
            .section-contact-3 .address{
                margin-top: 40px;
            }
            .section-we-made-3 .content{
                padding: 0 15px;
                text-align: center;
            }
            .section-we-made-3 .over-area .content h3{
                margin: 5px 0 20px;
            }
            .section-we-made-3 .over-area .content p{
                font-size: .9em;
                color: #898989;
            }
            .section-we-made-3 .over-area .content h5{
                margin-bottom: 0px;
                margin-top: 20px;
            }

            .btn-black{
                letter-spacing: 1px;
                margin-top: 20px;
            }

            .copyright a{
                color: #FFFFFF;
            }

            .section-team-2 .team .member p {
              font-size: .9em;
              padding: 0 10px;
            }

            .navbar-default {
                border-color: none;
                background-color: none;
            }

            .card{
                margin-bottom: 30px;
            }
            .section-with-hover .project .over-area.over-area-sm .content p {
              font-size: .85em;
            }
            .section-with-hover .project .over-area.over-area-sm .content h4 {
              font-size: 1.6em;
            }
            .logo{
                display: block;
                margin: 0 auto 10px;
                width: 61px;
                height: 61px;
                border-radius: 50%;
                border: 1px solid #333333;
                overflow: hidden;
            }
            .logo img{
                width: 100%;
                height: 100%;
            }
            .loading .loading-container p {
                font-size: 30px;
                width: 220px;
                margin: 0 auto;
                margin-bottom: 30px;
                height: 35px;
            }
            .loading .logo{
                opacity: 0;
                transition: all 0.9s;
                -webkit-transition: all 0.9s;
                -moz-transition: all 0.9s;
            }
            .loading .logo.visible{
                opacity: 1;
            }
            .sharrre.btn{
                color: #444444;
                border-color: #444444;
                font-weight: 400;
            }
            .address .col-md-6{
                padding-right: 7px;
                padding-left: 7px;
            }
            a.img-class{
                opacity: 1;
            }
            a.img-class:hover{
                opacity: .9;
            }

            .btn-lg{
                padding: 14px 10px;
            }

            @media (max-width: 1200px){
                .section-contact-3 .contact-container .address-container{
                    height: 520px;
                }
            }

            .margin-top-70 {
                margin-top:70px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
            <div class="container">
                <div class="navbar-header">
                    <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                    </button>
                    <a href="<?php echo e(url('/')); ?>" class="navbar-brand">
                    Certivy
                    </a>
                </div>
                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li>
                            <a href="<?php echo e(url('/register')); ?>" data-scroll="true">
                            Sign Up
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/login')); ?>" data-scroll="true">
                            Login
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="dropdown current-user">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                                <img src="assets/images/avatar-1-small.jpg" class="img-circle" alt="">
                                <span class="username hidden-xs"><?php echo e(Auth::user()->name); ?></span> 
                                <i class="fa fa-caret-down "></i>
                            </a>
                            <ul class="dropdown-menu dropdown-dark">
                                <li>
                                    <a href="<?php echo e(url('/home')); ?>">
                                        My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="pages_calendar.html">
                                        My Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="pages_messages.html">
                                        My Messages (3)
                                    </a>
                                </li>
                                <li>
                                    <a href="login_lock_screen.html">
                                        Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/logout')); ?>">
                                        Log Out
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="wrapper">

            
            <!-- start: PAGE CONTENT -->
            
            <?php echo $__env->yieldContent('content'); ?>

            <!-- end: PAGE CONTENT-->
            
            <footer class="footer footer-color-black">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a target="_blank" href="http://www.certivy-tim.com/?ref=presentation-page">
                                Home
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.certivy-tim.com/contact-us">
                                Contact
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="http://blog.certivy-tim.com/">
                                Blog
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.certivy-tim.com/sponsorships">
                                Sponsorships
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="social-area pull-right">
                        <a class="btn btn-social btn-facebook btn-simple" href="https://www.facebook.com/certivyTim">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a class="btn btn-social btn-twitter btn-simple" href="https://twitter.com/certivyTim">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social btn-pinterest btn-simple" href="https://plus.google.com/+certivytimPage">
                            <i class="fa fa-google-plus-square"></i>
                        </a>
                        <a class="btn btn-social btn-pinterest btn-simple" href="https://dribbble.com/certivytim">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </div>
                    <div class="copyright">
                        &copy; 2016 <a target="_blank" href="http://www.certivy-tim.com/?ref=presentation-page"> certivy Tim</a>, page made with <a target="_blank" href="http://demos.certivy-tim.com/rubik">Rubik</a>
                    </div>
                </div>
            </footer>

        </div> <!-- end wrapper -->
    </body>
    <!--   core js files    -->
    <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <!--   file for adding vertical points where we activate the elements animation   -->
    <script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>
    <!--  js library for devices recognition -->
    <script type="text/javascript" src="assets/js/modernizr.js"></script>
    <!--  script for google maps   -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <!--   file where we handle all the script from the Rubik page   -->
    <script type="text/javascript" src="assets/js/rubick_pres.js"></script>


    <?php echo $__env->yieldContent('script'); ?>


<!-- Mirrored from presentation.certivy-tim.com/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 17 Apr 2016 14:32:18 GMT -->
</html>

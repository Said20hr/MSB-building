<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>MSB - Building</title>
    <meta name="keywords" content="Building, MSB, Agence Battlement,Travaux publique">
    <meta name="description" content="MSB - Building, Meilleur solutions Bâtiment">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="{{asset('images/b.gif')}}" alt="#"/></div>
</div>
<!-- end loader -->
<!-- header -->
<header class="full_bg">
    <!-- header inner -->
    <div class="header">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="contat_infoma">
                            <li><i class="fa fa-phone" aria-hidden="true"></i> Tél : {{setting('key.phone')}}</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="social_icon_top text_align_center  ">
                            <li><a href="{{setting('key.facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="{{setting('key.twitter')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="{{setting('key.instagram')}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="contat_infoma text_align_right">
                            <li><a href="Javascript:void(0)"> <i class="fa fa-envelope" aria-hidden="true"></i> {{setting('key.email')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
        <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption  banner_po">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="build_box">
                                        <h2>Nous sommes des bâtisseurs</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority<br> There are many variations of passages of</p>
                                        <a class="read_more conatct_btn" href="contact.html" role="button">Contactez-nous</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption banner_po">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="build_box">
                                        <h2>Nous sommes des bâtisseurs</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority<br> There are many variations of passages of</p>
                                        <a class="read_more conatct_btn" href="contact.html" role="button">Contactez-nous</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption banner_po">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="build_box">
                                        <h2>Nous sommes des bâtisseurs</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority<br> There are many variations of passages of</p>
                                        <a class="read_more conatct_btn" href="contact.html" role="button">Contactez-nous</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
</header>
<!-- end banner -->
<!-- three_box -->
<div class="three_box">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="text_hover" class="const text_align_center">
                    <i><img src="{{asset('images')}}/ser1.png" alt="#"/></i>
                    <span>SERVICES DE CONSTRUCTION</span>
                </div>
            </div>
            <div class="col-md-3">
                <div id="text_hover" class="const text_align_center">
                    <i><img src="{{asset('images')}}/ser2.png" alt="#"/></i>
                    <span>RECONSTRUCTION</span>
                </div>
            </div>
            <div class="col-md-3">
                <div id="text_hover" class="const text_align_center">
                    <i><img src="{{asset('images')}}/ser3.png" alt="#"/></i>
                    <span>Prestations ELECTRIQUES</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end three_box -->
<!-- about -->
<div class="about">
    <div class="container-fluid">
        <div class="row d_flex">
            <div class="col-md-7">
                <div class="titlepage">
                    <h2>À propos de notre entreprise</h2>
                    <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</span>
                    <a class="read_more" href="Javascript:void(0)"> Read More</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about_img">
                    <figure><img src="{{asset('images')}}/about.png" alt="#"/></figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->
<!-- projects -->
<div class="projects">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Nos projets de fonctionnalités</h2>
                    <span>It is a long established fact that a reader will be distracted by the readable</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="proj" class="carousel slide projects_ban" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#proj" data-slide-to="0" class="active"></li>
                        <li data-target="#proj" data-slide-to="1"></li>
                        <li data-target="#proj" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-fluid">
                                <div class="carousel-caption relative3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="project">
                                                <div class="project_img">
                                                    <figure><img src="{{asset('images')}}/project_img.png" alt="#"/></figure>
                                                </div>
                                                <div id="pro_ho" class="project_text">
                                                    <h3>Reader will be<br> distracted by the readable</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="project">
                                                <div class="project_img">
                                                    <figure><img src="{{asset('images')}}/project_img1.png" alt="#"/></figure>
                                                </div>
                                                <div id="pro_ho" class="project_text">
                                                    <h3>Reader will be<br> distracted by the readable</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="project">
                                                <div class="project_img">
                                                    <figure><img src="{{asset('images')}}/project_img2.png" alt="#"/></figure>
                                                </div>
                                                <div id="pro_ho" class="project_text">
                                                    <h3>Reader will be<br> distracted by the readable</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="carousel-caption relative3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="project">
                                                <div class="project_img">
                                                    <figure><img src="{{asset('images')}}/project_img.png" alt="#"/></figure>
                                                </div>
                                                <div id="pro_ho" class="project_text">
                                                    <h3>Reader will be<br> distracted by the readable</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="project">
                                                <div class="project_img">
                                                    <figure><img src="{{asset('images')}}/project_img2.png" alt="#"/></figure>
                                                </div>
                                                <div id="pro_ho" class="project_text">
                                                    <h3>Reader will be<br> distracted by the readable</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="project">
                                                <div class="project_img">
                                                    <figure><img src="{{asset('images')}}/project_img1.png" alt="#"/></figure>
                                                </div>
                                                <div id="pro_ho" class="project_text">
                                                    <h3>Reader will be<br> distracted by the readable</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="carousel-caption relative3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="project">
                                                <div class="project_img">
                                                    <figure><img src="{{asset('images')}}/project_img2.png" alt="#"/></figure>
                                                </div>
                                                <div id="pro_ho" class="project_text">
                                                    <h3>Reader will be<br> distracted by the readable</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="project">
                                                <div class="project_img">
                                                    <figure><img src="{{asset('images')}}/project_img.png" alt="#"/></figure>
                                                </div>
                                                <div id="pro_ho" class="project_text">
                                                    <h3>Reader will be<br> distracted by the readable</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="project">
                                                <div class="project_img">
                                                    <figure><img src="{{asset('images')}}/project_img1.png" alt="#"/></figure>
                                                </div>
                                                <div id="pro_ho" class="project_text">
                                                    <h3>Reader will be<br> distracted by the readable</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#proj" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#proj" role="button" data-slide="next">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end projects -->
<!-- choose -->

<!-- end choose -->
<!--
<div class="staff_main">
    <div class="container_staff">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Expert Staff</h2>
                    <span>There are many variations of passages of Lorem Ipsum available, but the </span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="staff">
                    <div class="man">
                        <i><img src="{{asset('images')}}/man.png" alt="#"/></i>
                    </div>
                    <div class="social_icon_main">
                        <h4>Available</h4>
                        <ul class="social_icon_staff text_align_center  ">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="staff">
                    <div class="man">
                        <i><img src="{{asset('images')}}/man.png" alt="#"/></i>
                    </div>
                    <div class="social_icon_main">
                        <h4>Available</h4>
                        <ul class="social_icon_staff text_align_center  ">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="staff">
                    <div class="man">
                        <i><img src="{{asset('images')}}/man.png" alt="#"/></i>
                    </div>
                    <div class="social_icon_main">
                        <h4>Available</h4>
                        <ul class="social_icon_staff text_align_center  ">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="staff">
                    <div class="man">
                        <i><img src="{{asset('images')}}/man.png" alt="#"/></i>
                    </div>
                    <div class="social_icon_main">
                        <h4>Available</h4>
                        <ul class="social_icon_staff text_align_center  ">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <a class="read_more" href="Javascript:void(0)"> See More</a>
            </div>
        </div>
    </div>
</div>
 -->
<!--  contact -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Contactez-nous</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <form method="post" class="main_form" action="{{route('contact.store')}}">
                  @csrf
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="contactus" name="name" placeholder="Nom" type="type" name="Name">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" name="phone" placeholder="Numéro du téléphone" type="type" name="Phone">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" name="email" placeholder="Email" type="type" name="Email">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" name="message" rows="50" placeholder="Message" type="type" Message="Name">Message</textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 padding_left0">
                <div class="map_main">
                    <div class="map-responsive">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="600" height="472" id="gmap_canvas" style="border-radius: 10px" src="https://maps.google.com/maps?q=kremlin%20b&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- end contact -->
<div class="truck">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 jkhgkj">
                <div class="truck_img1">
                    <img src="{{asset('images')}}/truck.png" alt="#"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="truck_img1">
                    <img src="{{asset('images')}}/jcb.png" alt="#"/>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- clients -->
<div class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text-center">
                    <h2>Paroles de clients</h2>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="testimo_ban_bg">
                    <div id="testimo" class="carousel slide testimo_ban" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#testimo" data-slide-to="0" class="active"></li>
                            <li data-target="#testimo" data-slide-to="1"></li>
                            <li data-target="#testimo" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container parile0">
                                    <div class="carousel-caption relative2">
                                        <div class="row d_flex">
                                            <div class="col-md-12">
                                                <i><img class="qusright" src="{{asset('images')}}/t.png" alt="#"/><img src="{{asset('images')}}/tes.png" alt="#"/><img class="qusleft" src="{{asset('images')}}/t.png" alt="#"/></i>
                                                <div class="consect">
                                                    <span>Consectetur</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container parile0">
                                    <div class="carousel-caption relative2">
                                        <div class="row d_flex">
                                            <div class="col-md-12">
                                                <i><img class="qusright" src="{{asset('images')}}/t.png" alt="#"/><img src="{{asset('images')}}/tes.png" alt="#"/><img class="qusleft" src="{{asset('images')}}/t.png" alt="#"/></i>
                                                <div class="consect">
                                                    <span>Consectetur</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container parile0">
                                    <div class="carousel-caption relative2">
                                        <div class="row d_flex">
                                            <div class="col-md-12">
                                                <i><img class="qusright" src="{{asset('images')}}/t.png" alt="#"/><img src="{{asset('images')}}/tes.png" alt="#"/><img class="qusleft" src="{{asset('images')}}/t.png" alt="#"/></i>
                                                <div class="consect">
                                                    <span>consectetur</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna consectua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d_flex justify-content-center position-absolute">
                            <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end clients -->
<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a class="logo_bottom"><img src="{{asset('images')}}/logo.png" alt="#"/></a>
                    <p class="many">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humou
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 offset-2 pt-5">
                    <h3>Photos</h3>
                    <ul class="insta text_align_left">
                        <li><img src="{{asset('images')}}/inst1.png" alt="#"/></li>
                        <li><img src="{{asset('images')}}/inst2.png" alt="#"/></li>
                        <li><img src="{{asset('images')}}/inst3.png" alt="#"/></li>
                        <li><img src="{{asset('images')}}/inst4.png" alt="#"/></li>
                        <li><img src="{{asset('images')}}/inst4.png" alt="#"/></li>
                        <li><img src="{{asset('images')}}/inst4.png" alt="#"/></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <p>© 2023 All Rights Reserved. MSB BUILDING</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

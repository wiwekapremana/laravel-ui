<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Digilab - SEO & Digital Marketing Agency Template">

    <!-- ========== Page Title ========== -->
    <title>Digilab - SEO & Digital Marketing Agency Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets/enduser/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/enduser/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/enduser/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/enduser/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/enduser/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/enduser/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/enduser/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/enduser/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/enduser/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/enduser/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/enduser/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/enduser/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="assets/js/html5/html5shiv.min.js"></script>
            <script src="assets/js/html5/respond.min.js"></script>
            <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">

</head><!-- Preloader Start -->
<div id="site-preloader" class="site-preloader">
    <div class="loader-wrap">
        <div class="ring">
            <span></span>
        </div>
        <h2>Digilab</h2>
    </div>
</div>
<!-- Preloader Ends -->

<!-- Header
        ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-bg navbar-fixed white no-background bootsnav">

        <div class="container">



            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('assets/enduser/img/logo-light.png') }}" class="logo logo-display"
                        alt="Logo">
                    <img src="{{ asset('assets/enduser/img/logo-cornflower-blue.png') }}" class="logo logo-scrolled"
                        alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li>
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Home</a>

                    </li>

                    <li><a href="case-studies.html">Job</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-standard.html">Blog Standard</a></li>
                            <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                            <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                            <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                            <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                        </ul>
                    </li>
                    @if (Route::has('login'))
                        <li>
                            @auth
                                <a href="{{ url('/home') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            @endauth
                        </li>
                    @endif
                    </li>

                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="ti-close"></i></a>
            <div class="widget">
                <h4 class="title">Get in touch</h4>
                <p>
                    Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy
                    eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means
                    few blind.
                </p>
                <a href="#" class="btn btn-theme effect btn-sm"
                    data-animation="animated slideInUp">Consultation</a>
            </div>
            <div class="widget">
                <h4 class="title">Additional Links</h4>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </div>
            <div class="widget social">
                <h4 class="title">Connect With Us</h4>
                <ul class="link">
                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->

<!-- Start Banner
        ============================================= -->
<div class="banner-area bg-shape text-light with-fixed-nav bg-cover-bottom heading-capitalized"
    style="background-image: url('assets/enduser/img/shape/bg-5.png');">
    <div class="container">
        <div class="double-items">
            <div class="row align-center">
                <div class="col-lg-7 info">
                    <h4 class="wow fadeInLeft">Marketing Agency</h4>
                    <h2 class="wow fadeInDown" data-wow-duration="1s">We make the path <strong>For your
                            Agency</strong></h2>
                    <a class="btn circle btn-md btn-light effect wow fadeInUp" data-wow-duration="1.8s"
                        href="#">Get
                        Started Now</a>
                </div>
                <div class="col-lg-5 thumb width-120 wow fadeInRight" data-wow-duration="1s">
                    <div class="thumb-innner">
                        <img src="{{ asset('') }}assets/enduser/img/illustration/3.png" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start Process
        ============================================= -->
<div class="our-process-area features-area box-less default-padding bottom-less">
    <div class="container">
        <div class="process-box text-center">
            <div class="row">
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Research</h4>
                        <p>
                            Welcome fat who window. Removing welcomed civility or hastened.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay="600ms">
                        <div class="icon">
                            <i class="fas fa-hdd"></i>
                        </div>
                        <h4>Data Collection</h4>
                        <p>
                            Welcome fat who window. Removing welcomed civility or hastened.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay="700ms">
                        <div class="icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h4>Targeting</h4>
                        <p>
                            Welcome fat who window. Removing welcomed civility or hastened.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Process -->

<!-- Start Our Benefits
        ============================================= -->
<div class="benifits-area reverse bg-gray default-padding">
    <!-- Fixed Shape -->
    <div class="shape-top">
        <img src="{{ asset('assets/enduser/img/shape/10.png') }}" alt="Shape">
    </div>
    <!-- Fixed Shape -->
    <div class="container">
        <div class="row">

            <div class="col-lg-6 wow fadeInDown thumb">
                <img src="{{ asset('assets/enduser/img/illustration/13.png') }}" alt="Thumb">
            </div>

            <div class="col-lg-6 wow fadeInUp info">
                <h5>Our Benefits</h5>
                <h2>Get More Trafic <strong>On Your Website</strong></h2>
                <p>
                    Ignorant branched humanity led now marianne too strongly entrance. Rose to shew bore no ye of
                    paid rent form. Old design are dinner better nearer silent excuse. She which are maids boy sense
                    her shade. Considered reasonable we affronting on expression in. So cordial anxious mr delight.
                    Shot his has must wish from sell nay. Remark fat set why are sudden depend change entire wanted.
                    Performed remainder attending led fat residence far.
                </p>
                <ul>
                    <li>
                        <h5>Global Reach</h5>
                    </li>
                    <li>
                        <h5>Big Experience</h5>
                    </li>
                    <li>
                        <h5>Convenience</h5>
                    </li>
                    <li>
                        <h5>Team Strength</h5>
                    </li>
                </ul>
                <a class="btn circle btn-md btn-gradient">Get Started Now</a>
            </div>

        </div>
    </div>
</div>
<!-- End Our Benefits -->

<!-- Start Tabs
        ============================================= -->
<div class="tabs-content-area default-padding-top">
    <div class="container">
        <div class="center-tabs">
            <div class="row">
                <div class="col-lg-4">
                    <ul id="tabs" class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">Our
                                Mission</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">Our
                                Vission</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#tab3" data-toggle="tab" class="nav-link">Success
                                Rate</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">
                        <div id="tab1" class="tab-pane fade active show">
                            <div class="row align-center">
                                <div class="col-lg-12 info">
                                    <h5>Our Mission</h5>
                                    <h2>Data Visualization Research <br> technique & Solution</h2>
                                    <p>
                                        Delightful unreserved impossible few estimating men favourable see
                                        entreaties. She propriety immediate was improving. He or entrance humoured
                                        likewise moderate. Much nor game son say feel. Fat make met can must form
                                        into gate. Me we offending prevailed discovery.
                                    </p>
                                    <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                            <div class="row align-center">
                                <div class="col-lg-12 info">
                                    <h5>Our Vission</h5>
                                    <h3>Collect Ongoing Big Data <br> Design And Strategy</h3>
                                    <p>
                                        Delightful unreserved impossible few estimating men favourable see
                                        entreaties. She propriety immediate was improving. He or entrance humoured
                                        likewise moderate. Much nor game son say feel. Fat make met can must form
                                        into gate. Me we offending prevailed discovery.
                                    </p>
                                    <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="tab-pane fade">
                            <div class="row align-center">
                                <div class="col-lg-12 info">
                                    <h5>Success Rate</h5>
                                    <h2>These entrepreneurs feel <br> bright and full of hope. </h2>
                                    <p>
                                        Delightful unreserved impossible few estimating men favourable see
                                        entreaties. She propriety immediate was improving. He or entrance humoured
                                        likewise moderate. Much nor game son say feel. Fat make met can must form
                                        into gate. Me we offending prevailed discovery.
                                    </p>
                                    <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Tabs -->

<!-- Start Services Area
        ============================================= -->
<div class="services-area carousel-shadow default-padding">
    <!-- Fixed Shape  -->
    <div class="shape-left-bottom shape opacity-default">
        <img src="{{ asset('assets/enduser/img/shape/4.png') }}" alt="Shape">
    </div>
    <!-- Fixed Shape  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5>What we do</h5>
                    <h2>
                        Let’s Check our scientific Digital <br>Marketing solutions
                    </h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg">
        <div class="services-items wow fadeInUp services-stage-carousel owl-carousel owl-theme text-center">
            <!-- Single Item -->
            <div class="item">
                <div class="icon">
                    <i class="flaticon-bullhorn"></i>
                </div>
                <div class="info">
                    <h4>
                        <a href="#">Social Media Marketing</a>
                    </h4>
                    <p>
                        Except had sex limits county enough the figure former add. Do sang my he next mr soon. It
                        merely waited do unable.
                    </p>
                    <a href="#"><i class="fas fa-arrow-right"></i> Read More</a>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
                <div class="icon">
                    <i class="flaticon-keyword-1"></i>
                </div>
                <div class="info">
                    <h4>
                        <a href="#">Keyward Research</a>
                    </h4>
                    <p>
                        Except had sex limits county enough the figure former add. Do sang my he next mr soon. It
                        merely waited do unable.
                    </p>
                    <a href="#"><i class="fas fa-arrow-right"></i> Read More</a>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
                <div class="icon">
                    <i class="flaticon-marketing"></i>
                </div>
                <div class="info">
                    <h4>
                        <a href="#">Content Marketing</a>
                    </h4>
                    <p>
                        Except had sex limits county enough the figure former add. Do sang my he next mr soon. It
                        merely waited do unable.
                    </p>
                    <a href="#"><i class="fas fa-arrow-right"></i> Read More</a>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
                <div class="icon">
                    <i class="flaticon-ppc"></i>
                </div>
                <div class="info">
                    <h4>
                        <a href="#">PPC Advertising</a>
                    </h4>
                    <p>
                        Except had sex limits county enough the figure former add. Do sang my he next mr soon. It
                        merely waited do unable.
                    </p>
                    <a href="#"><i class="fas fa-arrow-right"></i> Read More</a>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
                <div class="icon">
                    <i class="flaticon-competition"></i>
                </div>
                <div class="info">
                    <h4>
                        <a href="#">Competitor Research</a>
                    </h4>
                    <p>
                        Except had sex limits county enough the figure former add. Do sang my he next mr soon. It
                        merely waited do unable.
                    </p>
                    <a href="#"><i class="fas fa-arrow-right"></i> Read More</a>
                </div>
            </div>
            <!-- End Single Item -->
        </div>
    </div>
</div>
<!-- End Services Area -->

<!-- Start Why Choose Us
        ============================================= -->
<div class="choose-us-area">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6 thumb wow fadeInLeft">
                <img src="{{ asset('assets/enduser/img/illustration/7.png') }}" alt="Thumb">
            </div>
            <div class="col-lg-6 info wow fadeInUp" data-wow-delay="0.5s">
                <h2>We Offer a Full Range of <br> <strong>Digital Marketing</strong> Services!</h2>
                <p>
                    Greatly explain attempt perhaps in feeling he. House men taste bed not drawn joy. Through
                    enquire however do equally herself at. Greatly way old may you present improve. Wishing the
                    feeling village him musical.
                </p>
                <ul>
                    <li>
                        <h5>Global Reach</h5>
                        <p>
                            Upto 100%
                        </p>
                    </li>
                    <li>
                        <h5>Big Experience</h5>
                        <p>
                            Expert worker
                        </p>
                    </li>
                    <li>
                        <h5>Convenience</h5>
                        <p>
                            To reach your target
                        </p>
                    </li>
                    <li>
                        <h5>Team Strength</h5>
                        <p>
                            Clients satisfaction
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us -->

<!-- Start Team
        ============================================= -->
<div class="team-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5>Our Team</h5>
                    <h2>
                        Meet our professional & Expert <br>Team Members
                    </h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>
        <div class="team-items text-center">
            <div class="row">
                <!-- Single Item -->
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay="500ms">
                        <div class="thumb">
                            <img src="{{ asset('assets/enduser/img/800x700.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <span>Senior Marketer</span>
                            <h4>Jonathom Ahem</h4>
                            <div class="contact">
                                <i class="fab fa-twitter"></i>
                                <a href="#">twitter.com/digilab46</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay="600ms">
                        <div class="thumb">
                            <img src="{{ asset('assets/enduser/img/800x700.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <span>Sales Manager</span>
                            <h4>Donald Busri</h4>
                            <div class="contact">
                                <i class="fab fa-twitter"></i>
                                <a href="#">twitter.com/digilab46</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay="700ms">
                        <div class="thumb">
                            <img src="{{ asset('assets/enduser/img/800x700.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <span>Data Analyst</span>
                            <h4>Sami Adham</h4>
                            <div class="contact">
                                <i class="fab fa-twitter"></i>
                                <a href="#">twitter.com/digilab46</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay="800ms">
                        <div class="thumb">
                            <img src="{{ asset('assets/enduser/img/800x700.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <span>Managing Director</span>
                            <h4>Munns Tenul</h4>
                            <div class="contact">
                                <i class="fab fa-twitter"></i>
                                <a href="#">twitter.com/digilab46</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Team -->

<!-- Start Case Studies
        ============================================= -->
<div class="case-studies-area circle-shape-right default-padding-top bg-gray bottom-less">
    <!-- Fixed Shape  -->
    <div class="shape-bottom">
        <img src="{{ asset('assets/enduser/img/shape/1.svg') }}" alt="Shape">
    </div>
    <!-- Fixed Shape  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5>Recent Case Studies</h5>
                    <h2>Take a look some of our recent <br> case studies</h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>
        <div class="case-items">
            <div class="row">
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item wow fadeInDown" data-wow-delay="500ms">
                        <div class="thumb">
                            <img src="{{ asset('assets/enduser/img/800x600.png') }}" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="cats">
                                <p>
                                    Sales, Web
                                </p>
                            </div>
                            <h5>
                                <a href="#">Community Engagement</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item wow fadeInDown" data-wow-delay="600ms">
                        <div class="thumb">
                            <img src="{{ asset('assets/enduser/img/800x600.png') }}" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="cats">
                                <p>
                                    Marketing
                                </p>
                            </div>
                            <h5>
                                <a href="#">Income growth</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item wow fadeInDown" data-wow-delay="700ms">
                        <div class="thumb">
                            <img src="{{ asset('') }}assets/enduser/img/800x600.png" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="cats">
                                <p>
                                    SEO, Optimize
                                </p>
                            </div>
                            <h5>
                                <a href="#">Traffic Management</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Case Studies -->

<!-- Start Subscribe
        ============================================= -->
<div class="subscribe-area default-padding-top text-center">
    <div class="container">
        <div class="sebscribe-items wow fadeInUp">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 form">
                    <h2>Try Digilab free for <strong>14 days</strong></h2>
                    <form action="#">
                        <input type="email" placeholder="Enter your email" class="form-control" name="email">
                        <button type="submit">Get Started</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Subscribe -->

<!-- Start Blog
        ============================================= -->
<div class="blog-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5>Latest News</h5>
                    <h2>Stay Update with Anada from <br> latest & popular News</h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>
        <div class="blog-items">
            <div class="row">
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay="500ms">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('assets/enduser/img/800x600.png') }}"
                                    alt="Thumb"></a>
                        </div>
                        <div class="info">
                            <div class="tags">
                                <a href="#">SEO</a>
                                <a href="#">Analysis</a>
                            </div>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 18 Nov, 2020</li>
                                    <li>By <a href="#">Park Lee</a></li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Consulted admitting is power acuteness. </a>
                            </h4>
                            <p>
                                Own hence views two ask right whole ten seems. What near kept met call old west
                                dine. Our announcing sufficient...
                            </p>
                            <a class="btn circle btn-theme border btn-sm" href="#">Read More <i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay="600ms">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('assets/enduser/img/800x600.png') }}"
                                    alt="Thumb"></a>
                        </div>
                        <div class="info">
                            <div class="tags">
                                <a href="#">Performance</a>
                                <a href="#">High</a>
                            </div>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 05 Dec, 2020</li>
                                    <li>By <a href="#">Park Lee</a></li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Unsatiable entreaties may collecting Power.</a>
                            </h4>
                            <p>
                                Own hence views two ask right whole ten seems. What near kept met call old west
                                dine. Our announcing sufficient...
                            </p>
                            <a class="btn circle btn-theme border btn-sm" href="#">Read More <i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay="700ms">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('assets/enduser/img/800x600.png') }}"
                                    alt="Thumb"></a>
                        </div>
                        <div class="info">
                            <div class="tags">
                                <a href="#">Affiliate</a>
                                <a href="#">Process</a>
                            </div>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 26 Sep, 2020</li>
                                    <li>By <a href="#">Park Lee</a></li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Consulted admitting is power acuteness. </a>
                            </h4>
                            <p>
                                Own hence views two ask right whole ten seems. What near kept met call old west
                                dine. Our announcing sufficient...
                            </p>
                            <a class="btn circle btn-theme border btn-sm" href="#">Read More <i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area -->

<!-- Start Footer
        ============================================= -->
<footer class="bg-dark text-light">
    <div class="svg-shape">
        <svg xmlns="http://www.w3.org/2000/svg" class="light" preserveAspectRatio="none" viewBox="0 0 1070 52">
            <path d="M0,0S247,91,505,32c261.17-59.72,565-13,565-13V0Z"></path>
        </svg>
    </div>
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item about">
                        <img src="{{ asset('assets/enduser/img/logo-light.png') }}" alt="Logo">
                        <div class="address">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Email:</h5>
                                        <span>support@validtemplates.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Phone:</h5>
                                        <span>+44-20-7328-4499</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Company</h4>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">About us</a>
                            </li>
                            <li>
                                <a href="#">Compnay History</a>
                            </li>
                            <li>
                                <a href="#">Features</a>
                            </li>
                            <li>
                                <a href="#">Blog Page</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Useful Link</h4>
                        <ul>
                            <li>
                                <a href="#">Career</a>
                            </li>
                            <li>
                                <a href="#">Leadership</a>
                            </li>
                            <li>
                                <a href="#">Strategy</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">History</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item recent-post">
                        <h4 class="widget-title">Latest News</h4>
                        <div class="item">
                            <a href="#">Delighted prevailed supported too not remainder perpetual who
                                furnished.</a>
                            <span><i class="fas fa-calendar-alt"></i> 22 Aug, 2020 - <a
                                    href="#">Admin</a></span>
                        </div>
                        <div class="item">
                            <a href="#">Speaking trifling an to unpacked moderate debating learnin
                                management. </a>
                            <span><i class="fas fa-calendar-alt"></i> 15 Nov, 2020 - <a href="#">User</a></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright &copy; 2020. Designed by <a href="#">validtemplatess</a></p>
                </div>
                <div class="col-md-6 text-right link">
                    <ul>
                        <li>
                            <a href="#">Terms</a>
                        </li>
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer -->

<!-- jQuery Frameworks
        ============================================= -->
<script src="{{ asset('assets/enduser/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/enduser/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/enduser/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/enduser/js/equal-height.min.js') }}"></script>
<script src="{{ asset('assets/enduser/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/enduser/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/enduser/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/enduser/js/modernizr.custom.13711.js') }}"></script>
<script src="{{ asset('assets/enduser/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/enduser/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/enduser/js/progress-bar.min.js') }}"></script>
<script src="{{ asset('assets/enduser/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/enduser/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/enduser/js/count-to.js') }}"></script>
<script src="{{ asset('assets/enduser/js/YTPlayer.min.js') }}"></script>
<script src="{{ asset('assets/enduser/js/progresscircle.js') }}"></script>
<script src="{{ asset('assets/enduser/js/bootsnav.js') }}"></script>
<script src="{{ asset('assets/enduser/js/main.js') }}"></script>


{{-- </body>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body> --}}

</html>

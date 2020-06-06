﻿<!DOCTYPE html>
<html lang="en">
<head>
    <title>Assets BD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="site-loader"></div>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-4">
                    <a href="{{route('root')}}" class="h5 text-uppercase text-black">
                        <img class="header-logo" src="{{asset('images/logo.png')}}" alt="assetsBD">
                    </a>
                </div>
                <div class="col-4 col-md-4 col-lg-8">
                    <nav class="site-navigation text-right text-md-right" role="navigation">

                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                                                                      class="site-menu-toggle js-menu-toggle text-black"><span
                                    class="icon-menu h3"></span></a></div>

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li><a href="{{route('root')}}">Home</a>
                            </li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li>
                                <a href="{{route('properties')}}">Properties</a>
                            </li>
                            <li><a href="{{route('blog')}}">Blog</a></li>

                            <li class="active"><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);"
     data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <h1 class="mb-2">Contact Us</h1>
                <div><a href="{{route('root')}}">Home</a> <span class="mx-2 text-white">&bullet;</span> <strong
                        class="text-white">Contact</strong></div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5">


                <form action="{{route('contact-post')}}" method="post" class="p-5 bg-white border">
                    {{ @csrf_field() }}
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Full Name</label>
                            <input type="text" name="name" id="fullname" class="form-control" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="email">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                                      placeholder="Say hello to us"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary  py-2 px-4 rounded-0">
                        </div>
                    </div>


                </form>
            </div>

            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h6 text-black mb-3 text-uppercase">Contact Info</h3>
                    <p class="mb-0 font-weight-bold">Address</p>
                    <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                    <p class="mb-0 font-weight-bold">Email Address</p>
                    <p class="mb-0"><a href="#">youremail@domain.com</a></p>

                </div>

            </div>
        </div>
    </div>
</div>


<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7">
                <div class="site-section-title text-center">
                    <h2>Testimonies</h2>
                </div>
            </div>
        </div>
        <div class="row block-13">

            <div class="nonloop-block-13 owl-carousel">

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                            <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                                dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>

                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                            <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                                dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>

                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                            <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                                dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>

                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                            <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                                dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>

                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                            <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                                dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>

                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                            <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                                dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>

                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                            <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                                dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>

                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                            <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                                dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>

                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                            <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                                dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<div class="site-section site-section-sm bg-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="text-white">Wide Range of Properties Just For You</h2>
                <p class="lead text-white-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <a href="#" class="btn btn-outline-primary btn-block py-3 btn-lg">See Properties</a>
            </div>
        </div>
    </div>
</div>


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5">
                    <h3 class="footer-heading mb-4">About HomeSpace</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero
                        atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis
                        blanditiis, minima minus odio!</p>
                </div>


            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Navigations</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Buy</a></li>
                            <li><a href="#">Rent</a></li>
                            <li><a href="#">Properties</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>


            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>


            </div>

        </div>

    </div>
</footer>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mediaelement-and-player.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>
</html>

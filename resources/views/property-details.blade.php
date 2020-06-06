﻿<!DOCTYPE html>
<html lang="en">

<head>
    <title>Assets BD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

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
                            <li class="active">
                                <a href="{{route('properties')}}">Properties</a>
                            </li>
                            <li><a href="{{route('blog')}}">Blog</a></li>

                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade"
     data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
                <h1 class="mb-2">625 S. Berendo St</h1>
                <p class="mb-5"><strong class="h2 text-success font-weight-bold">$1,000,500</strong></p>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="margin-top: -150px;">
                <div class="mb-5">
                    <div class="slide-one-item home-slider owl-carousel">
                        <div><img src="images/img_1.jpg" alt="Image" class="img-fluid"></div>
                        <div><img src="images/img_2.jpg" alt="Image" class="img-fluid"></div>
                        <div><img src="images/img_3.jpg" alt="Image" class="img-fluid"></div>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <strong class="text-success h1 mb-3">$1,000,500</strong>
                        </div>
                        <div class="col-md-6">
                            <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">2 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">2</span>

                                </li>
                                <li>
                                    <span class="property-specs">SQ FT</span>
                                    <span class="property-specs-number">7,000</span>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Home Type</span>
                            <strong class="d-block">Condo</strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Year Built</span>
                            <strong class="d-block">2018</strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Price/Sqft</span>
                            <strong class="d-block">$520</strong>
                        </div>
                    </div>
                    <h2 class="h4 text-black">More Info</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti
                        vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt
                        tempora molestias quo deserunt similique sequi.</p>
                    <p>Nisi voluptatum error ipsum repudiandae, autem deleniti, velit dolorem enim quaerat rerum
                        incidunt sed, qui ducimus! Tempora architecto non, eligendi vitae dolorem laudantium dolore
                        blanditiis assumenda in eos hic unde.</p>
                    <p>Voluptatum debitis cupiditate vero tempora error fugit aspernatur sint veniam laboriosam eaque
                        eum, et hic odio quibusdam molestias corporis dicta! Beatae id magni, laudantium nulla iure ea
                        sunt aliquam.</p>

                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="h4 text-black mb-3">Property Gallery</h2>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <a href="images/img_1.jpg" class="image-popup gal-item"><img src="images/img_1.jpg"
                                                                                         alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <a href="images/img_2.jpg" class="image-popup gal-item"><img src="images/img_2.jpg"
                                                                                         alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <a href="images/img_3.jpg" class="image-popup gal-item"><img src="images/img_3.jpg"
                                                                                         alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <a href="images/img_4.jpg" class="image-popup gal-item"><img src="images/img_4.jpg"
                                                                                         alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <a href="images/img_5.jpg" class="image-popup gal-item"><img src="images/img_5.jpg"
                                                                                         alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <a href="images/img_6.jpg" class="image-popup gal-item"><img src="images/img_6.jpg"
                                                                                         alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <a href="images/img_7.jpg" class="image-popup gal-item"><img src="images/img_7.jpg"
                                                                                         alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <a href="images/img_8.jpg" class="image-popup gal-item"><img src="images/img_8.jpg"
                                                                                         alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <a href="images/img_1.jpg" class="image-popup gal-item"><img src="images/img_1.jpg"
                                                                                         alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <a href="images/img_2.jpg" class="image-popup gal-item"><img src="images/img_2.jpg"
                                                                                         alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <a href="images/img_3.jpg" class="image-popup gal-item"><img src="images/img_3.jpg"
                                                                                         alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <a href="images/img_4.jpg" class="image-popup gal-item"><img src="images/img_4.jpg"
                                                                                         alt="Image" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pl-md-5">

                <div class="bg-white widget border rounded">

                    <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
                    <form action="" class="form-contact-agent">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control">
                        </div>

                        <div class="bg-white widget border rounded">
                            <h3 class="h4 text-black widget-title mb-3">Message box</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>


                        <div class="form-group">
                            <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-phone"
                                                                                         style="color: white"></i>
                            </button>
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-envelope"
                                                                                         style="color: white"></i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="site-section site-section-sm bg-light">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="site-section-title mb-5">
                    <h2>Related Properties</h2>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">$1,930,000</span>
                            <h3 class="title">853 S Lucerne Blvd</h3>
                            <p class="location">Los Angeles, CA 90005</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Beds:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garages:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">$2,438,000</span>
                            <h3 class="title">853 S Lucerne Blvd</h3>
                            <p class="location">Los Angeles, CA 90005</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Beds:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garages:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">$5,320,000</span>
                            <h3 class="title">853 S Lucerne Blvd</h3>
                            <p class="location">Los Angeles, CA 90005</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Beds:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garages:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
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

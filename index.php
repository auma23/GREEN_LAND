<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Green land - Liquor Store </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +254 705 553 860</a>
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span>greenland@gmail.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media mr-4">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
                <div class="reg">
                    <p class="mb-0"><a href="signup.php" class="mr-2">Sign Up</a> <a href="logout.php">Log out</a> </p>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">Green <span>Land</span></a>
        <div class="order-lg-last btn-group">
            <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="flaticon-shopping-bag"></span>
                <div class="d-flex justify-content-center align-items-center"><small>3</small></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-item d-flex align-items-start" href="#">
                    <div class="img" style="background-image: url(images/prod-1.jpg);"></div>
                    <div class="text pl-3">
                        <h4>Bacardi 151</h4>
                        <p class="mb-0"><a href="#" class="price">Ksh 3,000</a><span class="quantity ml-3">Quantity: 01</span></p>
                    </div>
                </div>
                <div class="dropdown-item d-flex align-items-start" href="#">
                    <div class="img" style="background-image: url(images/prod-2.jpg);"></div>
                    <div class="text pl-3">
                        <h4>Jim Beam Kentucky Straight</h4>
                        <p class="mb-0"><a href="#" class="price">Ksh 3,800</a><span class="quantity ml-3">Quantity: 02</span></p>
                    </div>
                </div>
                <div class="dropdown-item d-flex align-items-start" href="#">
                    <div class="img" style="background-image: url(images/prod-3.jpg);"></div>
                    <div class="text pl-3">
                        <h4>Citadelle</h4>
                        <p class="mb-0"><a href="#" class="price">ksh 2,500</a><span class="quantity ml-3">Quantity: 01</span></p>
                    </div>
                </div>
                <a class="dropdown-item text-center btn-link d-block w-100" href="cart.html">
                    View All
                    <span class="ion-ios-arrow-round-forward"></span>
                </a>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="product.html">Products</a>
                        <a class="dropdown-item" href="product-single.html">Single Product</a>
                        <a class="dropdown-item" href="cart.html">Cart</a>
                        <a class="dropdown-item" href="checkout.php">Checkout</a>
                    </div>
                </li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-8 ftco-animate d-flex align-items-end">
                <div class="text w-100 text-center">
                    <h1 class="mb-4">Good <span>Drink</span> for Good <span>Moments</span>.</h1>
                    <p><a href="product.html" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="blog.html" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-intro">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex">
                <div class="intro d-lg-flex w-100 ftco-animate">
                    <div class="icon">
                        <span class="flaticon-support"></span>
                    </div>
                    <div class="text">
                        <h2>Online Support 24/7</h2>
                        <p>we accept online oders any time of your choice. Make an order anytime you feel like and we shall reach you in time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="intro color-1 d-lg-flex w-100 ftco-animate">
                    <div class="icon">
                        <span class="flaticon-cashback"></span>
                    </div>
                    <div class="text">
                        <h2>Money Back Guarantee</h2>
                        <p>We rarely disappoint but incase of any desatisfaction you will have your money paid back in full effect.
                            We look forward to serving you the best way.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="intro color-2 d-lg-flex w-100 ftco-animate">
                    <div class="icon">
                        <span class="flaticon-free-delivery"></span>
                    </div>
                    <div class="text">
                        <h2>Free Shipping &amp; Return</h2>
                        <p>For any location in Nairobi town shipping is free.
                            But areas away from town we charge a small shipping fee according to your location in distance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
            </div>
            <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
                <div class="heading-section">
                    <span class="subheading">Since 1920</span>
                    <h2 class="mb-4">Desire Meets A New Taste</h2>

                    <p>Made since 1858, Canadian Club was first distilled by Hirem Walker and quickly became of
                        the worlds most recognisable brands. Delivering a smooth, light flavor, it is the embodiment
                        of a whisky with the widest appeal, so much so Queen Victoria was known to enjoy Canadian Club, as
                        does fictitious secret agent, James Bond. Blended before aging in white oak barrels for a full six years,
                        Canadian Club, is a benchmark whisky with an extremely smooth, approachable, & versatile taste profile.
                        Best served mixed, with Dry Ginger Ale and fresh squeeze of Lime, Cola or Lemonade </p>
                    <p>Brewed using straight pilsen spring barley malt, this beer is crisp, golden,
                        has mild hop bitterness and moderate effervescence. An easy drinking lager with exceptional balance.
                        Bottled beer </p>
                    <p class="year">
                        <strong class="number" data-number="102">0</strong>
                        <span>Years of Experience In Business</span>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/kind-1.jpg);"></div>
                    <h3>Brandy</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/kind-2.jpg);"></div>
                    <h3>Gin</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/kind-3.jpg);"></div>
                    <h3>Rum</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/kind-4.jpg);"></div>
                    <h3>Tequila</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/kind-5.jpg);"></div>
                    <h3>Vodka</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/kind-6.jpg);"></div>
                    <h3>Whiskey</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Our Delightful offerings</span>
                <h2>Tastefully Yours</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex">
                <div class="product ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-1.jpg);">
                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="text text-center">
                        <span class="sale">Sale</span>
                        <span class="category">Brandy</span>
                        <h2>Bacardi 151</h2>
                        <p class="mb-0"><span class="price price-sale">ksh 8,000</span> <span class="price">ksh 6,000</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="product ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-2.jpg);">
                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="text text-center">
                        <span class="seller">Best Seller</span>
                        <span class="category">Gin</span>
                        <h2>Jim Beam Kentucky Straight</h2>
                        <span class="price">ksh 8,000</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="product ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-3.jpg);">
                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="text text-center">
                        <span class="new">New Arrival</span>
                        <span class="category">Rum</span>
                        <h2>Citadelle</h2>
                        <span class="price">Ksh 8,200</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="product ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-4.jpg);">
                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="text text-center">
                        <span class="category">Rum</span>
                        <h2>The Glenlivet</h2>
                        <span class="price">ksh 8,000</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex">
                <div class="product ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-5.jpg);">
                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="text text-center">
                        <span class="category">Whiskey</span>
                        <h2>Black Label</h2>
                        <span class="price">ksh 7,999</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="product ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-6.jpg);">
                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="text text-center">
                        <span class="category">Tequila</span>
                        <h2>Macallan</h2>
                        <span class="price">ksh 7,999</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="product ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-7.jpg);">
                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="text text-center">
                        <span class="category">Vodka</span>
                        <h2>Old Monk</h2>
                        <span class="price">ksh 8,100</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="product ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-8.jpg);">
                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="text text-center">
                        <span class="category">Whiskey</span>
                        <h2>Jameson Irish Whiskey</h2>
                        <span class="price">ksh 6,500</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="product.html" class="btn btn-primary d-block">View All Products <span class="fa fa-long-arrow-right"></span></a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section img" style="background-image: url(images/bg_4.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-3">Happy Clients</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Your services are one of a kind. I can't stop thinkng about what i just had.
                                    Every time i will drop by for sure.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">marketing maneger</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Impressed by your quick delivery. Perfect timing and the best services ever.
                                    You don't want to turn down this. </p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Alexa Braun</p>
                                        <span class="position"> Business Consultant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">The only online liqour store taht fits right in my busy schedule.
                                    Iam really impresed by your performance. A good value for my taste and money</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">John Gerrit</p>
                                        <span class="position">Financial officer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">One of my best weekend zone. Long live the mighty green land.
                                    Nobody gives me joy than being around your premises. But the orders are just on fire</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Cooper Dean</p>
                                        <span class="position">Football coach</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">my first experince feels quite good special and the best i ever had.
                                    Kindness, this is you are perfect in it. I can't forget the good treat.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Jones Jeana</p>
                                        <span class="position">office secretary</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Blog</span>
                <h2>Recent Blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
                <div class="blog-entry d-flex">
                    <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text p-4 bg-light">
                        <div class="meta">
                            <p><span class="fa fa-calendar"></span> 29 January 2022</p>
                        </div>
                        <h3 class="heading mb-3"><a href="#">The Recipe from a Winemaker’s Restaurent</a></h3>
                        <p>Distilled from fine French grapes is a prestigious ultra-premium wine that is perfect for all stylish occasions. Crafted using centuries old winemaking techniques, CÎROC is exceptionally smooth and can be enjoyed sipped for in many premium winess.</p>
                        <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
                <div class="blog-entry d-flex">
                    <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text p-4 bg-light">
                        <div class="meta">
                            <p><span class="fa fa-calendar"></span> 31 December 2021</p>
                        </div>
                        <h3 class="heading mb-3"><a href="#">Tia Maria </a></h3>
                        <p>With its intiguing blend of smooth coffee and vanilla tones, Tia Maria's secret Jamaican recipe reveals a timeless allure. Enjoy the deliciously versatile taste of Tia Maria mixed with milk or cola, splashed over ice or enjoyed it in coffee.

                        </p>
                        <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
                <div class="blog-entry d-flex">
                    <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text p-4 bg-light">
                        <div class="meta">
                            <p><span class="fa fa-calendar"></span> 2 February 2022</p>
                        </div>
                        <h3 class="heading mb-3"><a href="#">metaxa Best drink</a></h3>
                        <p>Close to 2000 hours of sunshine in every bottle, METAXA is Greeces leading export spirit. METAXA 7 Stars is the senior expression of the Metaxa style. Featuring Muscat wines from the Aegean Islands and fine wine distillates matured up to seven years in oak casks, METAXA 7 Stars is best enjoyed neat, or over ice.</p>
                        <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
                <div class="blog-entry d-flex">
                    <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_4.jpg');">
                    </a>
                    <div class="text p-4 bg-light">
                        <div class="meta">
                            <p><span class="fa fa-calendar"></span> 14 February 2022</p>
                        </div>
                        <h3 class="heading mb-3"><a href="#"></a>Here comes Sailor Jerry Spiced</h3>
                        <p> Norman 'Sailor Jerry' Collins was the father of old school tattooing and was a master craftsman whose artistry and integrity remain as timeless as the liquid that bears his signature. Sailor Jerry Caribbean Rum is blended with local natural spices, namely Vanilla and Lime. Most definitely a rum that is "strong, but goes down smooth. </p>
                        <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 logo"><a href="#">Green <span>Land</span></a></h2>
                    <p>The best of legendary liquor store in town. Old is gold they say.</p>
                    <ul class="ftco-footer-social list-unstyled mt-2">
                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">My Accounts</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Account</a></li>
                        <li><a href="signup.php"><span class="fa fa-chevron-right mr-2"></span>Register</a></li>
                        <li><a href="login.php"><span class="fa fa-chevron-right mr-2"></span>Log In</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Order</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="about.html"><span class="fa fa-chevron-right mr-2"></span>About us</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Catalog</a></li>
                        <li><a href="contact.php"><span class="fa fa-chevron-right mr-2"></span>Contact us</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Quick Link</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>New User</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Help Center</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Report Spam</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Faq's</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span class="text">211 Green land plaza,St. Moi avenue, Nairobi, Kenya</span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+254 705 553 860</span></a></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">greenland@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 py-5 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">dee.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>

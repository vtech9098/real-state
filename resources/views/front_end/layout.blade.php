<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Realstate - Real Estate Full HTML Template</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <link href="{{ asset('assets/css/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/css/css/style.css')}}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/css/css/plugin.css')}}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/css/fonts/flaticon.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="fonts/line-icons.css" type="text/css">
</head>

<body>

    <!-- <div id="preloader">
        <div id="status"></div>
    </div> -->


    <header class="main_header_area headerstye-1">

        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">

                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('assets/upload/setting/header_logo/logo-white.png')}}" alt="image">
                                <img src="images/logo.png" alt="image">
                            </a>
                        </div>

                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Near By</a></li>
                                <li><a href="#">Amenities</a></li>
                                <li><a href="#">Blog</a></li>

                                <!-- <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Blog <i class="icon-arrow-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-haspopup="true" aria-expanded="false">Blog Grid<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Blog Grid 1</a></li>
                                                <li><a href="post-grid-2.html">Blog Grid 2</a></li>
                                                <li><a href="post-grid-3.html">Blog Grid 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-haspopup="true" aria-expanded="false">Blog List<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="post-list-1.html">Blog List 1</a></li>
                                                <li><a href="post-list-2.html">Blog List 2</a></li>
                                                <li><a href="post-list-3.html">Blog List 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-haspopup="true" aria-expanded="false">Blog Single<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Blog Single 1</a></li>
                                                <li><a href="detail-2.html">Blog Single 2</a></li>
                                                <li><a href="detail-3.html">Blog Single 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <li><a href="#">Contact Us</a></li>
                                <li class="search-main"><a href="#search1" class="mt_search"><i
                                            class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                        <!-- <div class="register-login d-flex align-items-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-2 white">
                                <i class="fa fa-user"></i> Login/Register
                            </a>
                            <div class="header_sidemenu me-3">
                                <div class="mhead">
                                    <span class="menu-ham">
                                        <a href="#" class="cart-icon d-flex align-items-center ms-1"><i
                                                class="fa fa-th-large fs-5 black bg-grey p-2"></i></a>
                                    </span>
                                </div>
                            </div>
                            <a href="#" class="nir-btn white">Add Listing</a>
                        </div> -->
                        <div id="slicknav-mobile"></div>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <section class="banner overflow-hidden">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url(images/slider/1.jpg)"></div>
                            <div class="swiper-content">
                                <div class="entry-meta mb-0">
                                    <span class="entry-category"><a href="#" class="white"> Real
                                            Estate Agency</a></span>
                                </div>
                                <h1 class="mb-1"><a href="#" class="white">Find Your Dream House By
                                        Us</a></h1>
                                <p class="white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url(images/slider/2.jpg)"></div>
                            <div class="swiper-content">
                                <div class="entry-meta mb-0">
                                    <span class="entry-category"><a href="#" class="white"> Real
                                            Estate Agency</a></span>
                                </div>
                                <h1 class="mb-1"><a href="#" class="white">Find Your Dream
                                        Apartment</a></h1>
                                <p class="white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url(images/slider/4.jpg)"></div>
                            <div class="swiper-content">
                                <div class="entry-meta mb-0">
                                    <span class="entry-category"><a href="#" class="white"> Real
                                            Estate Agency</a></span>
                                </div>
                                <h1 class="mb-1"><a href="#" class="white">Search Properties for Sale
                                        and To Rent</a></h1>
                                <p class="white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>


    <div class="form-main">
        <div class="container">
            <div class="form-content">
                <!-- <div class="form-navtab text-center">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Buy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Rent</button>
                        </li>
                    </ul>
                </div> -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-lg">
                                <div class="form-group mb-0">
                                    <label>Search Property</label>
                                    <div class="input-box">
                                        <i class="fa fa-search"></i>
                                        <input type="text" placeholder="Search Property">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group mb-0">
                                    <label>Location</label>
                                    <div class="input-box">
                                        <i class="fa fa-map-marker-alt"></i>
                                        <select class="niceSelect">
                                            <option value="1">Input Location</option>
                                            <option value="2">Argentina</option>
                                            <option value="3">Belgium</option>
                                            <option value="4">Canada</option>
                                            <option value="5">Denmark</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group mb-0">
                                    <label>Property Type</label>
                                    <div class="input-box">
                                        <i class="fa fa-building"></i>
                                        <select class="niceSelect">
                                            <option value="1">Luxury</option>
                                            <option value="2">Deluxe</option>
                                            <option value="3">Premium</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group mb-0 mt-4">
                                    <a href="#" class="nir-btn w-100"><i class="fa fa-search mr-2"></i> Search Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-lg">
                                <div class="form-group mb-0">
                                    <label>Search Property</label>
                                    <div class="input-box">
                                        <i class="flaticon-search"></i>
                                        <input type="text" placeholder="Search Property">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group mb-0">
                                    <label>Location</label>
                                    <div class="input-box">
                                        <i class="flaticon-placeholder"></i>
                                        <select class="niceSelect">
                                            <option value="1">Input Location</option>
                                            <option value="2">Argentina</option>
                                            <option value="3">Belgium</option>
                                            <option value="4">Canada</option>
                                            <option value="5">Denmark</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group mb-0">
                                    <label>Property Type</label>
                                    <div class="input-box">
                                        <i class="flaticon-add-user"></i>
                                        <select class="niceSelect">
                                            <option value="1">Luxury</option>
                                            <option value="2">Deluxe</option>
                                            <option value="3">Premium</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group mb-0 mt-4">
                                    <a href="#" class="nir-btn w-100"><i class="fa fa-search mr-2"></i> Search Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="category-main pb-6">
        <div class="container">
            <div class="section-title mb-2 pb-1 w-75 mx-auto text-center">
                <h2 class="m-0">Choose Your <span>Category</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="category-main-inner">
                <div class="row side-slider">
                    <div class="col-lg-3 col-md-6 my-4">
                        <div class="category-item box-shadow p-4 py-6 text-center">
                            <i class="fa fa-archive mb-2"></i>
                            <div class="trending-topic-content">
                                <h4 class="mb-1"><a href="#">Offices & Studios</a></h4>
                                <span>22 Properties</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-4">
                        <div class="category-item box-shadow p-4 py-6 text-center">
                            <i class="fa fa-industry mb-2"></i>
                            <div class="trending-topic-content">
                                <h4 class="mb-1"><a href="#">Industrail</a></h4>
                                <span>18 Properties</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-4">
                        <div class="category-item box-shadow p-4 py-6 text-center">
                            <i class="fa fa-dumpster mb-2"></i>
                            <div class="trending-topic-content">
                                <h4 class="mb-1"><a href="#">Commercial</a></h4>
                                <span>36 Properties</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-4">
                        <div class="category-item box-shadow p-4 py-6 text-center">
                            <i class="fa fa-building mb-2"></i>
                            <div class="trending-topic-content">
                                <h4 class="mb-1"><a href="#">Buildings</a></h4>
                                <span>58 Properties</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-4">
                        <div class="category-item box-shadow p-4 py-6 text-center">
                            <i class="fa fa-home mb-2"></i>
                            <div class="trending-topic-content">
                                <h4 class="mb-1"><a href="#">Home & Villas</a></h4>
                                <span>45 Properties</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-4">
                        <div class="category-item box-shadow p-4 py-6 text-center">
                            <i class="fa fa-warehouse mb-2"></i>
                            <div class="trending-topic-content">
                                <h4 class="mb-1"><a href="#">Garages</a></h4>
                                <span>31 Properties</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-us pt-0 pb-6">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-7 col-sm-12 mb-4">
                        <div class="about-content text-center text-lg-start">
                            <h4 class="theme d-inline-block">About Us</h4>
                            <h2 class="border-b mb-2 pb-2">The Leading Real Estate Rental Marketplace.</h2>
                            <p class="border-b mb-2 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                <br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.
                            </p>
                            <div class="about-listing">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fa fa-building theme"></i> Smart Home Design</li>
                                    <li><i class="fa fa-building theme"></i> Beautiful Scene Around</li>
                                    <li><i class="fa fa-building theme"></i> Complete 24/7 Security</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 mb-4">
                        <div class="about-image p-3 box-shadow position-relative">
                            <img src="images/destination/destination3.jpg" alt class="w-100">
                            <div class="video-button text-center">
                                <div class="call-button text-center">
                                    <button type="button" class="play-btn js-video-button" data-video-id="152879427"
                                        data-channel="vimeo">
                                        <i class="fa fa-play bg-blue"></i>
                                    </button>
                                </div>
                                <div class="video-figure"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="counter-main pb-0 pt-0">
        <div class="container">
            <div class="counter text-center bg-lgrey p-5 pb-1 border">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="counter-item d-flex align-items-center text-start border-end px-4">
                            <i class="fa fa-users theme2 me-4"></i>
                            <div class="counter-content">
                                <h3 class="value mb-0">560</h3>
                                <span class="m-0">Total Area Square</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="counter-item d-flex align-items-center text-start border-end px-4">
                            <i class="fa fa-plane theme2 me-4"></i>
                            <div class="counter-content">
                                <h3 class="value mb-0">530</h3>
                                <span class="m-0">Apartments Sold</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="counter-item d-flex align-items-center text-start border-end px-4">
                            <i class="fa fa-chart-bar theme2 me-4"></i>
                            <div class="counter-content">
                                <h3 class="value mb-0">624</h3>
                                <span class="m-0">Total Constructions</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="counter-item d-flex align-items-center text-start px-4">
                            <i class="fa fa-support theme2 me-4"></i>
                            <div class="counter-content">
                                <h3 class="value mb-0">340</h3>
                                <span class="m-0">Apartio Rooms</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="trending">
        <div class="container">
            <div class="section-title mb-6 pb-1 w-75 mx-auto text-center">
                <h2 class="m-0">More Featured <span>Property</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="trend-box">
                <div class="row item-slider">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image">
                                <img src="images/trending/trending2.jpg" alt="image">
                                <a href="#" class="flash bg-theme1 white px-3 py-2"><i class="fa fa-flash"></i></a>
                                <div class="trend-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author">
                                        <img src="images/reviewer/2.jpg" alt class="rounded-circle me-1">
                                        <span>Jenny Lofar</span>
                                    </div>
                                    <a href="#" class="tags bg-theme2 white px-3 py-1">For Rent</a>
                                </div>
                            </div>
                            <div class="trend-content p-4">
                                <h5 class="theme">Apartment</h5>
                                <h4><a href="#">7012 Shine Sehu Street, Liverpool London, LC345AC</a>
                                </h4>
                                <div
                                    class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                    <div class="entry-author">
                                        <p>Start From<span class="d-block theme fw-bold">$63,000.00</span></p>
                                    </div>
                                    <div class="entry-metalist d-flex align-items-center">
                                        <ul>
                                            <li class="me-2"><i class="fa fa-eye"></i></li>
                                            <li class="me-2"><i class="fa fa-heart"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                </p>
                            </div>
                            <ul class="d-flex align-items-center justify-content-between bg-grey p-3 px-4">
                                <li class="me-2"><i class="fa fa-eye"></i> 3 Beds</li>
                                <li class="me-2"><i class="fa fa-heart"></i> 2 Baths</li>
                                <li><i class="fa fa-comments"></i> 600 Sq Ft</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image">
                                <img src="images/trending/trending1.jpg" alt="image">
                                <a href="#" class="flash bg-theme1 white px-3 py-2"><i class="fa fa-flash"></i></a>
                                <div class="trend-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author">
                                        <img src="images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                        <span>Jenny Lofar</span>
                                    </div>
                                    <a href="#" class="tags bg-theme2 white px-3 py-1">For Sold</a>
                                </div>
                            </div>
                            <div class="trend-content p-4">
                                <h5 class="theme">Villa</h5>
                                <h4><a href="#">425 Vine 012 Street, Montreal Canada, UHW45Q</a></h4>
                                <div
                                    class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                    <div class="entry-author">
                                        <p>Start From<span class="d-block theme fw-bold">$20,000.00</span></p>
                                    </div>
                                    <div class="entry-metalist d-flex align-items-center">
                                        <ul>
                                            <li class="me-2"><i class="fa fa-eye"></i></li>
                                            <li class="me-2"><i class="fa fa-heart"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                </p>
                            </div>
                            <ul class="d-flex align-items-center justify-content-between bg-grey p-3 px-4">
                                <li class="me-2"><i class="fa fa-eye"></i> 3 Beds</li>
                                <li class="me-2"><i class="fa fa-heart"></i> 2 Baths</li>
                                <li><i class="fa fa-comments"></i> 600 Sq Ft</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image">
                                <img src="images/trending/trending3.jpg" alt="image">
                                <div
                                    class="trend-meta d-flex align-items-center justify-content-between box-shadow rounded">
                                    <div class="entry-author">
                                        <img src="images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                        <span>Jenny Lofar</span>
                                    </div>
                                    <a href="#" class="tags bg-theme2 white px-3 py-1">For Sold</a>
                                </div>
                            </div>
                            <div class="trend-content p-4">
                                <h5 class="theme">House</h5>
                                <h4><a href="#">1244 Vansh Market, Mise Mizkel Australia, AU456HA</a>
                                </h4>
                                <div
                                    class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                    <div class="entry-author">
                                        <p>Start From<span class="d-block theme fw-bold">$20,000.00</span></p>
                                    </div>
                                    <div class="entry-metalist d-flex align-items-center">
                                        <ul>
                                            <li class="me-2"><i class="fa fa-eye"></i></li>
                                            <li class="me-2"><i class="fa fa-heart"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                </p>
                            </div>
                            <ul class="d-flex align-items-center justify-content-between bg-grey p-3 px-4">
                                <li class="me-2"><i class="fa fa-eye"></i> 3 Beds</li>
                                <li class="me-2"><i class="fa fa-heart"></i> 2 Baths</li>
                                <li><i class="fa fa-comments"></i> 600 Sq Ft</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image">
                                <img src="images/trending/trending4.jpg" alt="image">
                                <div
                                    class="trend-meta d-flex align-items-center justify-content-between box-shadow rounded">
                                    <div class="entry-author">
                                        <img src="images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                        <span>Jenny Lofar</span>
                                    </div>
                                    <a href="#" class="tags bg-theme2 white px-3 py-1">For Sold</a>
                                </div>
                            </div>
                            <div class="trend-content p-4">
                                <h5 class="theme">House</h5>
                                <h4><a href="#">1244 Vansh Market, Mise Mizkel Australia, AU456HA</a>
                                </h4>
                                <div
                                    class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                    <div class="entry-author">
                                        <p>Start From<span class="d-block theme fw-bold">$20,000.00</span></p>
                                    </div>
                                    <div class="entry-metalist d-flex align-items-center">
                                        <ul>
                                            <li class="me-2"><i class="fa fa-eye"></i></li>
                                            <li class="me-2"><i class="fa fa-heart"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                </p>
                            </div>
                            <ul class="d-flex align-items-center justify-content-between bg-grey p-3 px-4">
                                <li class="me-2"><i class="fa fa-eye"></i> 3 Beds</li>
                                <li class="me-2"><i class="fa fa-heart"></i> 2 Baths</li>
                                <li><i class="fa fa-comments"></i> 600 Sq Ft</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="trend-btn text-center"><a href="#" class="nir-btn">View All Listings</a></div>
            </div>
        </div>
    </section>


    <section class="trending bg-grey pt-9">
        <div class="container">
            <div class="section-title mb-6 pb-1 w-75 mx-auto text-center">
                <h2 class="m-0">Our Best <span>Deals</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="trend-box">
                <div class="row">
                    <div class="col-lg-5 mb-4">
                        <div class="trend-item box-shadow rounded bg-white mb-4">
                            <div class="trend-image">
                                <img src="images/trending/trending2.jpg" alt="image">
                                <a href="#" class="flash bg-theme1 white px-3 py-2"><i class="fa fa-flash"></i></a>
                                <div class="trend-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author">
                                        <img src="images/reviewer/2.jpg" alt class="rounded-circle me-1">
                                        <span>Jenny Lofar</span>
                                    </div>
                                    <a href="#" class="tags bg-theme2 white px-3 py-1">For Rent</a>
                                </div>
                            </div>
                            <div class="trend-content p-4 pb-2">
                                <h5 class="theme">Apartment</h5>
                                <h4><a href="#">7012 Shine Sehu Street, Liverpool London, LC345AC</a>
                                </h4>
                                <div
                                    class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                    <div class="entry-author">
                                        <p>Start From<span class="d-block theme fw-bold">$63,000.00</span></p>
                                    </div>
                                    <div class="entry-metalist d-flex align-items-center">
                                        <ul>
                                            <li class="me-2"><i class="fa fa-eye"></i></li>
                                            <li class="me-2"><i class="fa fa-heart"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="d-flex align-items-center justify-content-between">
                                    <li class="me-2"><i class="fa fa-eye"></i> 3 Beds</li>
                                    <li class="me-2"><i class="fa fa-heart"></i> 2 Baths</li>
                                    <li><i class="fa fa-comments"></i> 600 Sq Ft</li>
                                </ul>
                            </div>
                        </div>
                        <div class="trend-item box-shadow rounded bg-white">
                            <div class="trend-image">
                                <img src="images/trending/trending5.jpg" alt="image">
                                <a href="#" class="flash bg-theme1 white px-3 py-2"><i class="fa fa-flash"></i></a>
                                <div class="trend-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author">
                                        <img src="images/reviewer/2.jpg" alt class="rounded-circle me-1">
                                        <span>Jenny Lofar</span>
                                    </div>
                                    <a href="#" class="tags bg-theme2 white px-3 py-1">For Rent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="trend-item box-shadow rounded bg-white">
                                    <div class="trend-image">
                                        <img src="images/trending/trending1.jpg" alt="image">
                                        <a href="#" class="flash bg-theme1 white px-3 py-2"><i
                                                class="fa fa-flash"></i></a>
                                        <div class="trend-meta d-flex align-items-center justify-content-between">
                                            <div class="entry-author">
                                                <img src="images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                                <span>Jenny Lofar</span>
                                            </div>
                                            <a href="#" class="tags bg-theme2 white px-3 py-1">For Sold</a>
                                        </div>
                                    </div>
                                    <div class="trend-content p-4 pb-2">
                                        <h5 class="theme">Villa</h5>
                                        <h4><a href="#">425 Vine 012 Street, Montreal Canada,
                                                UHW45Q</a></h4>
                                        <div
                                            class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                            <div class="entry-author">
                                                <p>Start From<span class="d-block theme fw-bold">$20,000.00</span></p>
                                            </div>
                                            <div class="entry-metalist d-flex align-items-center">
                                                <ul>
                                                    <li class="me-2"><i class="fa fa-eye"></i></li>
                                                    <li class="me-2"><i class="fa fa-heart"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="d-flex align-items-center justify-content-between">
                                            <li class="me-2"><i class="fa fa-eye"></i> 3 Beds</li>
                                            <li class="me-2"><i class="fa fa-heart"></i> 2 Baths</li>
                                            <li><i class="fa fa-comments"></i> 600 Sq Ft</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="trend-item box-shadow rounded bg-white">
                                    <div class="trend-image">
                                        <img src="images/trending/trending3.jpg" alt="image">
                                        <div
                                            class="trend-meta d-flex align-items-center justify-content-between box-shadow rounded">
                                            <div class="entry-author">
                                                <img src="images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                                <span>Jenny Lofar</span>
                                            </div>
                                            <a href="#" class="tags bg-theme2 white px-3 py-1">For
                                                Sold</a>
                                        </div>
                                    </div>
                                    <div class="trend-content p-4 pb-2">
                                        <h5 class="theme">House</h5>
                                        <h4><a href="#">1244 Vansh Market, Mise Mizkel Australia,
                                                AU456HA</a></h4>
                                        <div
                                            class="entry-meta d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                            <div class="entry-author">
                                                <p>Start From<span class="d-block theme fw-bold">$20,000.00</span></p>
                                            </div>
                                            <div class="entry-metalist d-flex align-items-center">
                                                <ul>
                                                    <li class="me-2"><i class="fa fa-eye"></i></li>
                                                    <li class="me-2"><i class="fa fa-heart"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="d-flex align-items-center justify-content-between">
                                            <li class="me-2"><i class="fa fa-eye"></i> 3 Beds</li>
                                            <li class="me-2"><i class="fa fa-heart"></i> 2 Baths</li>
                                            <li><i class="fa fa-comments"></i> 600 Sq Ft</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="trend-item box-shadow rounded bg-white">
                                    <div class="trend-image">
                                        <img src="images/trending/trending6.jpg" alt="image">
                                        <a href="#" class="flash bg-theme1 white px-3 py-2"><i
                                                class="fa fa-flash"></i></a>
                                        <div class="trend-meta d-flex align-items-center justify-content-between">
                                            <div class="entry-author">
                                                <img src="images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                                <span>Jenny Lofar</span>
                                            </div>
                                            <a href="#" class="tags bg-theme2 white px-3 py-1">For
                                                Sold</a>
                                        </div>
                                    </div>
                                    <div class="trend-content p-4 pb-2">
                                        <h5 class="theme">Villa</h5>
                                        <h4><a href="#">425 Vine 012 Street, Montreal Canada,
                                                UHW45Q</a></h4>
                                        <div class="entry-meta d-flex align-items-center justify-content-between">
                                            <div class="entry-author">
                                                <p>Start From<span class="d-block theme fw-bold">$20,000.00</span></p>
                                            </div>
                                            <div class="entry-metalist d-flex align-items-center">
                                                <ul>
                                                    <li class="me-2"><i class="fa fa-eye"></i></li>
                                                    <li class="me-2"><i class="fa fa-heart"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="trend-item box-shadow rounded bg-white">
                                    <div class="trend-image">
                                        <img src="images/trending/trending3.jpg" alt="image">
                                        <div
                                            class="trend-meta d-flex align-items-center justify-content-between box-shadow rounded">
                                            <div class="entry-author">
                                                <img src="images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                                <span>Jenny Lofar</span>
                                            </div>
                                            <a href="#" class="tags bg-theme2 white px-3 py-1">For
                                                Sold</a>
                                        </div>
                                    </div>
                                    <div class="trend-content p-4 pb-2">
                                        <h5 class="theme">House</h5>
                                        <h4><a href="#">1244 Vansh Market, Mise Mizkel Australia,
                                                AU456HA</a></h4>
                                        <div class="entry-meta d-flex align-items-center justify-content-between">
                                            <div class="entry-author">
                                                <p>Start From<span class="d-block theme fw-bold">$20,000.00</span></p>
                                            </div>
                                            <div class="entry-metalist d-flex align-items-center">
                                                <ul>
                                                    <li class="me-2"><i class="fa fa-eye"></i></li>
                                                    <li class="me-2"><i class="fa fa-heart"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trend-btn text-center"><a href="#" class="nir-btn">View All Listings</a></div>
            </div>
        </div>
    </section>


    <!-- <section class="discount-action pt-0 bg-grey">
        <div class="container">
            <div class="call-banner" style="background-image: url(images/bg/bg1.jpg);">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-8 p-0 pt-10">
                        <div class="call-banner-inner bg-theme1 p-5">
                            <div class="trend-content-main">
                                <div class="trend-content p-5">
                                    <h5 class="mb-1 white">Wanna to Sell Or Rent??</h5>
                                    <h2 class="mb-4"><a href="detail-fullwidth.html" class="white">Looking to Buy a New
                                            Property or Sell an Existing One?</a></h2>
                                    <div class="section-btns d-flex align-items-center">
                                        <a href="#" class="nir-btn me-4">Rent Properties <i
                                                class="fa fa-arrow-right white pl-1"></i></a>
                                        <a href="#" class="nir-btn">Buy Properties <i
                                                class="fa fa-arrow-right white pl-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 p-0"></div>
                </div>
            </div>
            <div class="partner-wrapper bg-white p-4">
                <ul class="attract-slider">
                    <li class="px-3"><a href="#"><img src="images/logo1.jpg" alt></a></li>
                    <li class="px-3"><a href="#"><img src="images/logo2.jpg" alt></a></li>
                    <li class="px-3"><a href="#"><img src="images/logo3.jpg" alt></a></li>
                    <li class="px-3"><a href="#"><img src="images/logo4.jpg" alt></a></li>
                    <li class="px-3"><a href="#"><img src="images/logo1.jpg" alt></a></li>
                    <li class="px-3"><a href="#"><img src="images/logo2.jpg" alt></a></li>
                    <li class="px-3"><a href="#"><img src="images/logo3.jpg" alt></a></li>
                    <li class="px-3"><a href="#"><img src="images/logo4.jpg" alt></a></li>
                </ul>
            </div>
        </div>
    </section> -->


    <section class="top-post pb-5 pt-9">
        <div class="container">
            <div class="section-title mb-6 pb-1 w-75 text-center mx-auto">
                <h2 class="m-0">Find Properties in <span>Popular Cities</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4">
                    <div class="trend-item">
                        <div class="trend-image">
                            <img src="images/destination/destination17.jpg" alt="image">
                            <div class="trend-content p-3 bg-grey">
                                <h4 class="mb-0"><a href="#">Miami</a></h4>
                                <span>22 Properties</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="trend-item">
                                <div class="trend-image">
                                    <img src="images/destination/destination13.jpg" alt="image">
                                    <div class="trend-content p-3 bg-grey">
                                        <h4 class="mb-0"><a href="#">Los Angeles</a></h4>
                                        <span>28 Properties</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="trend-item">
                                <div class="trend-image">
                                    <img src="images/destination/destination14.jpg" alt="image">
                                    <div class="trend-content p-3 bg-grey">
                                        <h4 class="mb-0"><a href="#">New York</a></h4>
                                        <span>45 Properties</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="trend-item">
                                <div class="trend-image">
                                    <img src="images/destination/destination15.jpg" alt="image">
                                    <div class="trend-content p-3 bg-grey">
                                        <h4 class="mb-0"><a href="#">Florida</a></h4>
                                        <span>32 Properties</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="trend-item">
                                <div class="trend-image">
                                    <img src="images/destination/destination16.jpg" alt="image">
                                    <div class="trend-content p-3 bg-grey">
                                        <h4 class="mb-0"><a href="#">Texas</a></h4>
                                        <span>51 Properties</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-us bg-white pb-6 pt-0">
        <div class="container">
            <div class="row align-items-center mb-6 text-center text-lg-start">
                <div class="col-lg-8">
                    <div class="section-title section-title-l pb-1">
                        <h2 class="m-0">Why <span>Choose</span> Us?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href="#" class="nir-btn float-lg-end float-none">View All Categories</a>
                </div>
            </div>

            <div class="why-us">
                <div class="why-us-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon">
                                    <i class="flaticon-call theme"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">Trusted By Thousands</a></h4>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon">
                                    <i class="flaticon-global theme"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">Wide Renge Properties</a></h4>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon">
                                    <i class="flaticon-building theme"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">Financing Made Easy</a></h4>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon">
                                    <i class="flaticon-location-pin theme"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">We are here near you</a></h4>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- <section class="our-team pt-9" style="background-image: url(images/shape-1.png);">
        <div class="container">
            <div class="section-title mb-6 pb-1 w-75 text-center mx-auto">
                <h2 class="m-0">Meet Our <span>Excellent Agents</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="team-main">
                <div class="row shop-slider">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list">
                            <div class="team-image">
                                <img src="images/team/img1.jpg" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-white">
                                <h4 class="mb-0">Salmon Thuir</h4>
                                <p class="mb-0">Senior Agent</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list">
                            <div class="team-image">
                                <img src="images/team/img2.jpg" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-white">
                                <h4 class="mb-0">Horke Pels</h4>
                                <p class="mb-0">Head Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list">
                            <div class="team-image">
                                <img src="images/team/img4.jpg" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-white">
                                <h4 class="mb-0">Solden kalos</h4>
                                <p class="mb-0">Supervisor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list">
                            <div class="team-image">
                                <img src="images/team/img3.jpg" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-white">
                                <h4 class="mb-0">Nelson Bam</h4>
                                <p class="mb-0">Quality Assurance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list">
                            <div class="team-image">
                                <img src="images/team/img5.jpg" alt="team">
                            </div>
                            <div class="team-content text-center bg-white p-3">
                                <h4 class="mb-0">Cacics Coold</h4>
                                <p class="mb-0">Asst. Chef</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="testimonial pb-5 pt-9">
        <div class="container">
            <div class="section-title mb-4 pb-1 w-75 mx-auto text-center">
                <h2 class="m-0">Good Reviews By <span>Clients</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="row review-slider">
                <div class="col-sm-4 item">
                    <div class="testimonial-item1 text-center">
                        <div class="details">
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry.
                                Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem.
                                Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="images/testimonial/img1.jpg" alt></a>
                            <div class="author-title">
                                <h4 class="m-0 theme2">Jared Erondu</h4>
                                <span>Supervisor</span>
                            </div>
                        </div>
                        <i class="fa fa-quote-left mb-2"></i>
                    </div>
                </div>
                <div class="col-sm-4 item">
                    <div class="testimonial-item1 text-center">
                        <div class="details">
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry.
                                Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem.
                                Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="images/testimonial/img2.jpg" alt></a>
                            <div class="author-title">
                                <h4 class="m-0 theme2">Cadic Vegeta</h4>
                                <span>Sr. Consultant</span>
                            </div>
                        </div>
                        <i class="fa fa-quote-left mb-2"></i>
                    </div>
                </div>
                <div class="col-sm-4 item">
                    <div class="testimonial-item1 text-center">
                        <div class="details">
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry.
                                Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem.
                                Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="images/testimonial/img3.jpg" alt></a>
                            <div class="author-title">
                                <h4 class="m-0 theme2">Jonathan Beri</h4>
                                <span>Sales Manager</span>
                            </div>
                        </div>
                        <i class="fa fa-quote-left mb-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section class="trending recent-articles pb-8 pt-0">
        <div class="container">
            <div class="section-title mb-4 pb-1 w-75 mx-auto text-center">
                <h2 class="m-0">Recent Articles & <span>Posts</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="recent-articles-inner">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="trend-item box-shadow bg-white p-4 mb-2">
                            <div class="trend-image">
                                <img src="images/trending/trending10.jpg" alt="image">
                            </div>
                            <div class="trend-content-main pt-3">
                                <div class="trend-content">
                                    <h5 class="theme">Technology</h5>
                                    <h4><a href="#">How a developer and designer duo at Deutsche Bank keep
                                            remote alive.</a></h4>
                                    <p class="mb-3">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet
                                        mornings of spring which I enjoy.
                                    </p>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author">
                                            <img src="images/reviewer/2.jpg" alt class="rounded-circle me-1">
                                            <span>Sollmond Nell</span>
                                        </div>
                                        <div class="entry-metalist d-flex align-items-center">
                                            <ul>
                                                <li class="me-2"><i class="fa fa-eye"></i> 5k</li>
                                                <li class="me-2"><i class="fa fa-heart"></i> 5k</li>
                                                <li><i class="fa fa-comments"></i> 5k</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-item d-flex align-items-center box-shadow p-3 mb-2 bg-white">
                            <div class="trend-image w-25 me-4">
                                <img src="images/trending/trending2.jpg" alt="image">
                            </div>
                            <div class="trend-content-main w-75">
                                <div class="trend-content">
                                    <h4 class="mb-1"><a href="#">3 Easy Ways To Make Your iPhone Faster</a>
                                    </h4>
                                    <div class="entry-meta">
                                        <div class="entry-metalist d-flex align-items-center">
                                            <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 29 Mar
                                                    2021</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-item d-flex align-items-center box-shadow p-3 mb-2 bg-white">
                            <div class="trend-image w-25 me-3">
                                <img src="images/trending/trending3.jpg" alt="image">
                            </div>
                            <div class="trend-content-main w-75">
                                <div class="trend-content">
                                    <h4 class="mb-1"><a href="#">5 Kinds of Food-Shamers You Will
                                            Encounter</a></h4>
                                    <div class="entry-meta">
                                        <div class="entry-metalist d-flex align-items-center">
                                            <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 10 Apr
                                                    2021</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="trend-item box-shadow bg-white p-4 mb-2">
                            <div class="trend-image">
                                <img src="images/trending/trending12.jpg" alt="image">
                            </div>
                            <div class="trend-content-main pt-3">
                                <div class="trend-content">
                                    <h5 class="theme">Inspiration</h5>
                                    <h4><a href="#">Inspire Runner with Autism Graces the Latest Cover of
                                            Women's Running</a></h4>
                                    <p class="mb-3">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet
                                        mornings of spring which I enjoy.
                                    </p>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author">
                                            <img src="images/reviewer/1.jpg" alt class="rounded-circle me-1">
                                            <span>David Scott</span>
                                        </div>
                                        <div class="entry-metalist d-flex align-items-center">
                                            <ul>
                                                <li class="me-2"><i class="fa fa-eye"></i> 5k</li>
                                                <li class="me-2"><i class="fa fa-heart"></i> 5k</li>
                                                <li><i class="fa fa-comments"></i> 5k</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-item d-flex align-items-center box-shadow p-3 mb-2 bg-white">
                            <div class="trend-image w-25 me-4">
                                <img src="images/trending/trending1.jpg" alt="image">
                            </div>
                            <div class="trend-content-main w-75">
                                <div class="trend-content">
                                    <h4 class="mb-1"><a href="#">3 Easy Ways To Make Your iPhone Faster</a>
                                    </h4>
                                    <div class="entry-meta">
                                        <div class="entry-metalist d-flex align-items-center">
                                            <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 29 Mar
                                                    2021</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-item d-flex align-items-center box-shadow p-3 mb-2 bg-white">
                            <div class="trend-image w-25 me-3">
                                <img src="images/trending/trending2.jpg" alt="image">
                            </div>
                            <div class="trend-content-main w-75">
                                <div class="trend-content">
                                    <h4 class="mb-1"><a href="#">5 Kinds of Food-Shamers You Will
                                            Encounter</a></h4>
                                    <div class="entry-meta">
                                        <div class="entry-metalist d-flex align-items-center">
                                            <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 10 Apr
                                                    2021</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="trend-item box-shadow bg-white p-4 mb-2">
                            <div class="trend-image">
                                <img src="images/trending/trending13.jpg" alt="image">
                            </div>
                            <div class="trend-content-main pt-3">
                                <div class="trend-content">
                                    <h5 class="theme">Public</h5>
                                    <h4><a href="#">We Provide Services To Grow Your Business Sell Affiliate
                                            Products for you</a></h4>
                                    <p class="mb-3">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet
                                        mornings of spring which I enjoy.
                                    </p>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author">
                                            <img src="images/reviewer/3.jpg" alt class="rounded-circle me-1">
                                            <span>John Bolden</span>
                                        </div>
                                        <div class="entry-metalist d-flex align-items-center">
                                            <ul>
                                                <li class="me-2"><i class="fa fa-eye"></i> 5k</li>
                                                <li class="me-2"><i class="fa fa-heart"></i> 5k</li>
                                                <li><i class="fa fa-comments"></i> 5k</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-item d-flex align-items-center box-shadow p-3 mb-2 bg-white">
                            <div class="trend-image w-25 me-4">
                                <img src="images/trending/trending4.jpg" alt="image">
                            </div>
                            <div class="trend-content-main w-75">
                                <div class="trend-content">
                                    <h4 class="mb-1"><a href="#">3 Easy Ways To Make Your iPhone Faster</a>
                                    </h4>
                                    <div class="entry-meta">
                                        <div class="entry-metalist d-flex align-items-center">
                                            <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 29 Mar
                                                    2021</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-item d-flex align-items-center box-shadow p-3 mb-2 bg-white">
                            <div class="trend-image w-25 me-3">
                                <img src="images/trending/trending5.jpg" alt="image">
                            </div>
                            <div class="trend-content-main w-75">
                                <div class="trend-content">
                                    <h4 class="mb-1"><a href="#">5 Kinds of Food-Shamers You Will
                                            Encounter</a></h4>
                                    <div class="entry-meta">
                                        <div class="entry-metalist d-flex align-items-center">
                                            <small><a href="#" class="grey"><i class="fa fa-calendar"></i> 10 Apr
                                                    2021</a></small>
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
    <div class="content-line">
        <div class="container">
            <div class="content-line-inner bg-theme2 pb-6 pt-6 p-5">
                <div class="row d-md-flex align-items-center justify-content-between text-lg-start text-center">
                    <div class="col-lg-9">
                        <h2 class="mb-0 white">
                            Looking for a dream home?
                        </h2>
                        <p class="white">We can help you realize your dream of a new home</p>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="nir-btn-black float-none float-lg-end">Fine More
                            Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <section class="insta-main pt-0">
        <div class="container">
            <div class="insta-inner">
                <div class="follow-button">
                    <h5 class="m-0"><i class="fab fa-instagram"></i> Follow on Instagram</h5>
                </div>
                <div class="row attract-slider">
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="gallery.html"><img src="images/insta/ins-3.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="gallery.html"><img src="images/insta/ins-4.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="gallery.html"><img src="images/insta/ins-5.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="gallery.html"><img src="images/insta/ins-1.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="gallery.html"><img src="images/insta/ins-7.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="gallery.html"><img src="images/insta/ins-8.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="gallery.html"><img src="images/insta/ins-2.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="gallery.html"><img src="images/insta/ins-6.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="gallery.html"><img src="images/insta/ins-9.jpg" alt="insta"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <footer class="pt-10 footermain">
        <div class="footer-upper pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="footer-about">
                            <img src="images/logo-white.png" alt>
                            <p class="mt-3 mb-3 white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio suspendisse leo neque
                                iaculis molestie sagittis maecenas aenean eget molestie sagittis.
                            </p>
                            <ul>
                                <li class="white"><strong>PO Box:</strong> +47-252-254-2542</li>
                                <li class="white"><strong>Location:</strong> Collins Street, sydney, Australia</li>
                                <li class="white"><strong>Email:</strong> <a href="/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="650c0b030a2517000409160d0c0009014b060a08">[email&#160;protected]</a>
                                </li>
                                <li class="white"><strong>Website:</strong> www.Realstate.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Quick link</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="##">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Popular Tags</h3>
                            <div class="tagcloud">
                                <a class="tag-cloud-link bg-white black p-2 mb-1" href="#">Beautiful</a>
                                <a class="tag-cloud-link bg-white black p-2 mb-1" href="#">Public</a>
                                <a class="tag-cloud-link bg-white black p-2 mb-1" href="#">Technology</a>
                                <a class="tag-cloud-link bg-white black p-2 mb-1" href="#">Travel</a>
                                <a class="tag-cloud-link bg-white black p-2 mb-1"
                                    href="#">Entertainment</a>
                                <a class="tag-cloud-link bg-white black p-2 mb-1" href="#">Blog</a>
                                <a class="tag-cloud-link bg-white black p-2 mb-1" href="#">Sports </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Popular Posts</h3>
                            <div class="trend-main">
                                <div class="trend-item d-flex align-items-center mb-2">
                                    <div class="trend-image w-25 me-4">
                                        <img src="images/trending/trending4.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main w-75">
                                        <div class="trend-content">
                                            <h5 class="mb-1"><a href="#">3 Easy Ways To Make Your iPhone
                                                    Faster</a></h5>
                                            <div class="entry-meta">
                                                <div class="entry-metalist d-flex align-items-center">
                                                    <small><a href="#" class="white"><i
                                                                class="fa fa-calendar"></i> 22 Mar 2021</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="trend-item d-flex align-items-center mb-2">
                                    <div class="trend-image w-25 me-4">
                                        <img src="images/trending/trending5.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main w-75">
                                        <div class="trend-content">
                                            <h5 class="mb-1"><a href="#">Facts About Business That Will Help
                                                    You Success</a></h5>
                                            <div class="entry-meta">
                                                <div class="entry-metalist d-flex align-items-center">
                                                    <small><a href="#" class="white"><i
                                                                class="fa fa-calendar"></i> 22 Mar 2021</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="trend-item d-flex align-items-center mb-2">
                                    <div class="trend-image w-25 me-4">
                                        <img src="images/trending/trending6.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main w-75">
                                        <div class="trend-content">
                                            <h5 class="mb-1"><a href="#">Your Light Is About To Stop Being
                                                    Relevant</a></h5>
                                            <div class="entry-meta">
                                                <div class="entry-metalist d-flex align-items-center">
                                                    <small><a href="#" class="white"><i
                                                                class="fa fa-calendar"></i> 22 Mar 2021</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright pt-2 pb-2">
            <div class="container">
                <div class="copyright-inner d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0 white">2022 Realstate. All rights reserved.</p>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div id="back-to-top">
        <a href="#"></a>
    </div>


    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <div class="modal fade log-reg" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="post-tabs">

                        <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button aria-controls="login" aria-selected="false" class="nav-link active"
                                    data-bs-target="#login" data-bs-toggle="tab" id="login-tab" role="tab"
                                    type="button">Login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button aria-controls="register" aria-selected="true" class="nav-link"
                                    data-bs-target="#register" data-bs-toggle="tab" id="register-tab" role="tab"
                                    type="button">Register</button>
                            </li>
                        </ul>

                        <div class="tab-content blog-full" id="postsTabContent">

                            <div aria-labelledby="login-tab" class="tab-pane fade active show" id="login"
                                role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-image">
                                            <a href="#"
                                                style="background-image: url(images/trending/trending5.jpg);"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="text-center border-b pb-2">Login</h4>
                                        <div class="log-reg-button d-flex align-items-center justify-content-between">
                                            <button type="submit" class="btn btn-fb">
                                                <i class="fab fa-facebook"></i> Login with Facebook
                                            </button>
                                            <button type="submit" class="btn btn-google">
                                                <i class="fab fa-google"></i> Login with Google
                                            </button>
                                        </div>
                                        <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                        <form method="post" action="#" name="contactform" id="contactform">
                                            <div class="form-group mb-2">
                                                <input type="text" name="user_name" class="form-control" id="fname"
                                                    placeholder="User Name or Email Address">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="password" name="password_name" class="form-control"
                                                    id="lpass" placeholder="Password">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck">
                                                <label class="custom-control-label mb-0" for="exampleCheck1">Remember
                                                    me</label>
                                                <a class="float-end" href="#">Lost your password?</a>
                                            </div>
                                            <div class="comment-btn mb-2 pb-2 text-center border-b">
                                                <input type="submit" class="nir-btn w-100" id="submit" value="Login">
                                            </div>
                                            <p class="text-center">Don't have an account? <a href="#"
                                                    class="theme">Register</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div aria-labelledby="register-tab" class="tab-pane fade" id="register" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-image">
                                            <a href="#"
                                                style="background-image: url(images/trending/trending5.jpg);"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="text-center border-b pb-2">Register</h4>
                                        <div class="log-reg-button d-flex align-items-center justify-content-between">
                                            <button type="submit" class="btn btn-fb">
                                                <i class="fab fa-facebook"></i> Login with Facebook
                                            </button>
                                            <button type="submit" class="btn btn-google">
                                                <i class="fab fa-google"></i> Login with Google
                                            </button>
                                        </div>
                                        <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                        <form method="post" action="#" name="contactform1" id="contactform1">
                                            <div class="form-group mb-2">
                                                <input type="text" name="user_name" class="form-control" id="fname1"
                                                    placeholder="User Name">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" name="user_name" class="form-control" id="femail"
                                                    placeholder="Email Address">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="password" name="password_name" class="form-control"
                                                    id="lpass1" placeholder="Password">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="password" name="password_name" class="form-control"
                                                    id="lrepass" placeholder="Re-enter Password">
                                            </div>
                                            <div class="form-group mb-2 d-flex">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                                <label class="custom-control-label mb-0 ms-1 lh-1" for="exampleCheck1">I
                                                    have read and accept the Terms and Privacy Policy?</label>
                                            </div>
                                            <div class="comment-btn mb-2 pb-2 text-center border-b">
                                                <input type="submit" class="nir-btn w-100" id="submit1"
                                                    value="Register">
                                            </div>
                                            <p class="text-center">Already have an account? <a href="#"
                                                    class="theme">Login</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header_sidemenu">
        <div class="header_sidemenu_in">
            <div class="menu py-5 px-4">
                <div class="close-menu">
                    <i class="fa fa-times"></i>
                </div>
                <div class="m-contentmain">
                    <div class="m-contentmain">
                        <div class="m-logo mb-5">
                            <img src="images/logo.png" alt="m-logo">
                        </div>
                        <div class="content-box mb-5">
                            <h3 class>Get In Touch</h3>
                            <p class="mb-2">We must explain to you how all seds this mistakens idea off denouncing
                                pleasures and praising pain was born and I will give you a completed accounts..</p>
                            <a href="#" class="nir-btn">Consultation</a>
                        </div>
                        <div class="contact-info1">
                            <h3 class>Contact Info</h3>
                            <ul>
                                <li class="d-block mb-1"><i class="fa fa-map-marker-alt me-2"></i> Brozon Mall 26,
                                    Newyrok NY 10005</li>
                                <li class="d-block mb-1"><i class="fa fa-phone-alt me-2"></i>555 626-0234</li>
                                <li class="d-block mb-1"><i class="fa fa-envelope-open me-2"></i><a
                                        href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="11626461617e6365516374707d627978747d753f727e7c">[email&#160;protected]</a>
                                </li>
                                <li class="d-block"><i class="fa fa-clock me-2"></i> Open Time: 09.00 to 18.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay hide"></div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/css/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('assets/css/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/css/js/plugin.js')}}"></script>
    <script src="{{ asset('assets/css/js/main.js')}}"></script>
    <script src="{{ asset('assets/css/js/custom-swiper.js')}}"></script>
    <script src="{{ asset('assets/css/js/custom-nav.js')}}"></script>
    <script>(function () { if (!document.body) return; var js = "window['__CF$cv$params']={r:'87f622888963d39f',t:'MTcxNDk2ODc3Ny4wOTMwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);"; var _0xh = document.createElement('iframe'); _0xh.height = 1; _0xh.width = 1; _0xh.style.position = 'absolute'; _0xh.style.top = 0; _0xh.style.left = 0; _0xh.style.border = 'none'; _0xh.style.visibility = 'hidden'; document.body.appendChild(_0xh); function handler() { var _0xi = _0xh.contentDocument || _0xh.contentWindow.document; if (_0xi) { var _0xj = _0xi.createElement('script'); _0xj.innerHTML = js; _0xi.getElementsByTagName('head')[0].appendChild(_0xj); } } if (document.readyState !== 'loading') { handler(); } else if (window.addEventListener) { document.addEventListener('DOMContentLoaded', handler); } else { var prev = document.onreadystatechange || function () { }; document.onreadystatechange = function (e) { prev(e); if (document.readyState !== 'loading') { document.onreadystatechange = prev; handler(); } }; } })();</script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vedd3670a3b1c4e178fdfb0cc912d969e1713874337387"
        integrity="sha512-EzCudv2gYygrCcVhu65FkAxclf3mYM6BCwiGUm6BEuLzSb5ulVhgokzCZED7yMIkzYVg65mxfIBNdNra5ZFNyQ=="
        data-cf-beacon='{"rayId":"87f622888963d39f","r":1,"version":"2024.4.1","token":"e2e296138d64407b8469055f5cbf0b42"}'
        crossorigin="anonymous"></script>
</body>

</html>
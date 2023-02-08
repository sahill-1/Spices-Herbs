<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HomePage</title>
    <!--/google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!--//Template-CSS -->
    <?php include 'modal.php'; ?>
    <style>
        .right-side {
            margin-top: 70px;
        }
        .w3l-footer-16 {
            background: var(--footer-bg);
            height: 490px;
        }
        .goog-logo-link {
            display: none !important;
        }
        .goog-te-gadget {
            color: transparent !important;
        }
        .goog-te-gadget .goog-te-combo {
            margin: 7px 5px;
            width: 120px;
            border-radius: 4px;
        }
        .btn-enquiry{
            background-color: #ff7800;
            color: white;
        }
        
        @media(max-width: 991px){
            .email-address{
                display: none;
            }
            .language{
                display: none;
            }
        }
        
    </style>
</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand" href="index.html">
                        <span class="w3yellow">GKM</span>MASALE
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <div class="language">
                            <a id="google_translate_element"></a>
                        </div>

                    </ul>
                    <!--/search-right-->
                    <ul class="header-search me-lg-4">
                        <li class="nav-item search-right">
                            <!-- <a href="#search" class="btn search-btn btn-primary" title="search"><span class="fas fa-search me-2" aria-hidden="true"></span> Search</a> -->
                            <!-- search popup -->
                            <!-- <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <h3 class="title-w3l two mb-4 text-left">Search Here</h3>
                                    <form action="#" method="GET" class="search-box d-flex position-relative">
                                        <input type="search" placeholder="Enter Keyword here" name="search" required="required" autofocus="">
                                        <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                                    </form>
                                </div>
                                <a class="close" href="#close">×</a>
                            </div> -->
                            <!-- /search popup -->
                            <p class="email-address" style="text-align: center; color: grey;">+91-9893693303 <br> rgkm.avv@gmail.com</p>
                        </li>
                    </ul>
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <!-- <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div> -->
                <!-- //toggle switch for light and dark theme -->

            </nav>
        </div>
    </header>
    <!--//Header-->
    <!--/Banner-Start-->
    <!-- main-slider -->
    <section class="w3l-main-slider banner-slider" id="home">
        <div class="owl-one owl-carousel owl-theme">
                <div class="slider-info banner-view banner-top1">
                    <div class="container">
                        <div class="w3banner-grids">
                            <div class="banner-info header-hero-19">
                                <p class="w3hny-tag">Fresh & Organic</p>
                                <h3 class="title-hero-19">Healthy & Fresh FARM SPICES</h3>
                                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                                <!-- <a href="about.html" class="btn btn-style btn-primary mt-4">Read More </a> -->
                            </div>
                            <div class="banner-left position-relative mt-5">
                                <!-- <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                                    <span class="video-play-icon">
                                        <span class="fa fa-play"></span>
                                    </span>
                                </a> -->
                                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                                <!-- <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                  <iframe src="https://player.vimeo.com/video/26489864?h=0cb4432fb5" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                </div> -->
								<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </section>
    <!-- //main-slider -->

    <!--/grids-->
    <section class="w3l-grids-3 py-5" id="about">
        <div class="container py-md-5 py-3">
            <div class="row w3home-ab-grids">
                <div class="w3ab-right-top col-lg-6 pe-lg-5">
                    <img src="assets/images/g2.jpg" alt="" class="img-fluid radius-image">
                </div>
                <div class="w3ab-left-top col-lg-6 mt-lg-0 mt-4 pt-lg-0 pt-2">
                    <h6 class="title-subw3hny mb-1">Get rather healthy.</h6>
                    <h3 class="title-w3l mb-2">Organic Spices Wholesaler in India</h3>
                    <p class="my-3"> Organic Spices is the leading wholesaler in India providing the highest quality organic spices for your everyday cooking needs. Get access to the freshest, purest, and most flavorful ingredients from us!</p>
                    <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                    <!-- <a href="about.html" class="btn btn-style btn-primary mt-4">Read More</a> -->
                </div>

            </div>
        </div>
    </section>
    <!--//grids-->
    <!-- features-section -->
    <section class="w3l-features py-5" id="features">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-lg-3 mb-4">
                <h6 class="title-subw3hny mb-1">What We Do</h6>
                <h3 class="title-w3l">Our Services</h3>
            </div>
            <div class="main-cont-wthree-2">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Quality Matters</a></h4>
                            <p class="text-para">100% Organic ingredients </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Free Shipping</a></h4>
                            <p class="text-para">Safest & Quickest Delivery</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Customer Satisfaction</a></h4>
                            <p class="text-para">Unbeatable prices</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//features-section -->

    <!--/w3-grids-->
    <section class="w3l-passion-mid-sec py-5">
        <div class="container py-md-5 py-3">
                <div class="row w3l-passion-mid-grids">

                    <div class="col-lg-6 passion-grid-item-info pe-lg-5 mb-lg-0 mb-5">
                        <h6 class="title-subw3hny mb-1">Our invention</h6>
                        <h3 class="title-w3l mb-4">Your Health & Safety Is Our Priority</h3>
                        <p class="mt-3 pe-lg-5">Our spices are grown in India sustainably and certified organic. We source only top grade, gluten-free, non-GMO and free of any artificial preservatives or flavors.</p>
                        <div class="w3banner-content-btns">
                        <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                            <!-- <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4 me-2">Read More </a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 passion-grid-item-info ps-lg-4">
                        <div class="w3lgrids-1 box-wrap">
                            <div class="icon">
                                <i class="fab fa-buromobelexperte"></i>
                            </div>
                            <div class="icon-text">
                                <h4><a href="#service" class="title-head">Clean Inventories</a></h4>
                                <p class="text-para mt-2">Inventory management involves ordering, stocking and using a business’s products.</p>
                            </div>
                        </div>
                        <div class="w3lgrids-1 box-wrap mt-4">
                            <div class="icon">
                                <i class="fas fa-american-sign-language-interpreting"></i>
                            </div>
                            <div class="icon-text">
                                <h4><a href="#service" class="title-head">Hygienic Manufacturing</a></h4>
                                <p class="text-para mt-2">Hygiene in manufacturing is vital for protecting public health & ensuring product quality.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!--//w3-grids-->


    <!--/Gallery-Section-->
    <section class="w3l-gallery-main py-5" id="gallery">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mx-auto">
                <h6 class="title-subw3hny mb-1">Gallery</h6>
                <h3 class="title-w3l mb-4">Latest Gallery
                </h3>
            </div>
            <div class="row gal-page-grids text-center">
                <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                    <a href="#gal">
                        <div class="w3layouts_team_grid">
                            <img src="assets/images/index-g (1).jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_team_grid_pos">
                                <div class="wthree_text">
                                    <!-- <i class="fas fa-search-plus"></i> -->
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                      <a href="#gal">
                        <div class="w3layouts_team_grid">
                            <img src="assets/images/index-g (2).jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_team_grid_pos">
                                <div class="wthree_text">
                                    <!-- <i class="fas fa-search-plus"></i> -->
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                    <a href="#gal">
                        <div class="w3layouts_team_grid">
                            <img src="assets/images/index-g (3).jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_team_grid_pos">
                                <div class="wthree_text">
                                    <!-- <i class="fas fa-search-plus"></i> -->
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                     <a href="#gal">
                        <div class="w3layouts_team_grid">
                            <img src="assets/images/index-g (4).jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_team_grid_pos">
                                <div class="wthree_text">
                                    <!-- <i class="fas fa-search-plus"></i> -->
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                     <a href="#gal">
                        <div class="w3layouts_team_grid">
                            <img src="assets/images/index-g (5).jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_team_grid_pos">
                                <div class="wthree_text">
                                    <!-- <i class="fas fa-search-plus"></i> -->
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                      <a href="#gal">
                        <div class="w3layouts_team_grid">
                            <img src="assets/images/index-g (6).jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_team_grid_pos">
                                <div class="wthree_text">
                                    <!-- <i class="fas fa-search-plus"></i> -->
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!--//Gallery-Section-->
    <!--/testimonials-->
    <section class="w3l-clients py-5" id="testimonials">
        <div class="container pt-md-5 pt-4">
            <div class="w3-testimonial-grids align-items-center py-lg-5">
                <div class="w3-testimonial-content-top">
                        <div class="item mb-4">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q><i class="fas fa-quote-left me-2"></i>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                            Dolores molestias adipisci dolor sit amet! by the Desire to achieve
                                            Success.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="assets/images/team1.jpg" class="img-fluid" alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>John wilson</h3>
                                            <p class="indentity">Subtitle goes here</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>
    <!--//testimonials-->
    <!--/w3l-blog-->
    <!-- <section class="w3l-blog">
        <div class="blog py-5" id="Newsblog">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="title-content text-center mb-lg-3 mb-4">
                    <h6 class="title-subw3hny mb-1">Our Article</h6>
                    <h3 class="title-w3l mb-5">Our Recent News</h3>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="assets/images/g1.jpg" alt="Card image cap">
                                </a>

                            </div>
                            <div class="card-body blog-details">
                                <div class="author align-items-center">
                                    <div href="#" class="blog_item_date">
                                        <h5>14.01.2022</h5>
                                    </div>
                                    <ul class="blog-meta d-flex mb-2">
                                        <li>
                                            <a href="#author" class="post-author">
                                                <i class="fas fa-user-alt"></i>
                                            </a> <span class="meta-value">by</span><a href="#author"> David </a>
                                        </li>
                                        <li>
                                            <a href="#author" class="post-author">
                                                <i class="fas fa-comments"></i>
                                            </a> <a href="#author"> 03 Comments</a>
                                        </li>
                                    </ul>

                                </div>
                                <a href="#blog" class="blog-desc">It is good for health to eat light Chicken Wings.</a>
                                <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.</p>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 item mt-md-0 mt-5">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="assets/images/g2.jpg" alt="Card image cap">
                                </a>

                            </div>
                            <div class="card-body blog-details">
                                <div class="author align-items-center">
                                    <div href="#" class="blog_item_date">
                                        <h5>16.01.2022</h5>
                                    </div>
                                    <ul class="blog-meta d-flex mb-2">
                                        <li>
                                            <a href="#author" class="post-author">
                                                <i class="fas fa-user-alt"></i>
                                            </a> <span class="meta-value">by</span><a href="#author"> David </a>
                                        </li>
                                        <li>
                                            <a href="#author" class="post-author">
                                                <i class="fas fa-comments"></i>
                                            </a> <a href="#author"> 05 Comments</a>
                                        </li>
                                    </ul>

                                </div>
                                <a href="#blog" class="blog-desc">Having fresh eggs with the unsurpassed price </a>
                                <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.</p>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 item mt-lg-0 mt-5">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="assets/images/g3.jpg" alt="Card image cap">
                                </a>

                            </div>
                            <div class="card-body blog-details">
                                <div class="author align-items-center">
                                    <div href="#" class="blog_item_date">
                                        <h5>17.01.2022</h5>
                                    </div>
                                    <ul class="blog-meta d-flex mb-2">
                                        <li>
                                            <a href="#author" class="post-author">
                                                <i class="fas fa-user-alt"></i>
                                            </a> <span class="meta-value">by</span><a href="#author"> Marks</a>
                                        </li>
                                        <li>
                                            <a href="#author" class="post-author">
                                                <i class="fas fa-comments"></i>
                                            </a> <a href="#author"> 06 Comments</a>
                                        </li>
                                    </ul>

                                </div>
                                <a href="#blog" class="blog-desc">It is good for health to eat light Chicken Wings.</a>
                                <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--//w3l-blog-->
    <!--/w3l-newsletter-->
    <section class="w3l-newsletter" style="margin-top: 50px;">
        <div class="container">
            <div class="uphny-w3l-newsletter-inf">
                <div class="row uphny-w3l-newsletter align-items-center">
                    <div class="col-lg-6 w3l-newsletter-left text-left">
                        <h3 class="titlehny">Don't miss our future updates! Get Enquiry Now!</h3>
                    </div>
                    <div class="col-lg-6 w3l-newsletter-form ps-lg-5 mt-lg-0 mt-md-5 mt-4">
                        <form action="#" method="post" class="subscribe-wthree">
                            <div class="flex-wrap subscribe-wthree-field">
                                <input class="form-control" type="email" placeholder="Type Your Email Address" name="email" required="">
                                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                                <!-- <button class="btn btn-style btn-primary" type="submit">Enquire</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-newsletter-->
    <!--/footer-->
    <footer class="w3l-footer">
        <div class="w3l-footer-16 py-5">
            <div class="container py-md-5 py-3 pb-0">
                <div class="row footer-p right-side">
                    <div class="col-lg-4 col-md-6 pe-lg-5">
                        <h2 class="footerw3l-logo"><a class="navbar-brand" href="index.php">
                                <span class="w3yellow">GKM</span> MASALE
                            </a></h2>
                        <p class="mt-3">We know how valuable your time is which is why we've made it easy for you to shop with us. Our simple and user-friendly website makes it easy to find what you need in just a few clicks!</p>
                        <div class="columns-2 mt-lg-5 mt-4">
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <!-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li> -->
                                <li><a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                        <div class="row">
                            <div class="col-xl-5 col-6 column">
                                <h3>Information</h3>
                                <ul class="footer-gd-16">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.php">Gallery</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- <div class="col-6 column">
                                <h3>Services</h3>
                                <ul class="footer-gd-16">

                                    <li><a href="#care">
                                            Brown Eggs</a></li>
                                    <li><a href="#meal">Chicken Broiler</a></li>
                                    <li><a href="#clean">
                                            Free Shipping</a></li>
                                    <li><a href="#medicine">
                                            Quality Matters</a></li>
                                    <li><a href="#setting">
                                            Poultry Cages</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 column mt-lg-0 mt-4 pl-xl-0">
                        <h3>Instagram Feed</h3>
                        <div class="end-column row">
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g1.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g2.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g3.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g4.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g5.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g6.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>


                        </div>
                    </div> -->
                    <div class="bwt-logo" style="width: 300px; height: 100px;">
                        <img src="./assets/images/bwt-white.png" alt="" style="width: 300px; height: 100px; margin-top: 50px;">
                    </div>
                </div>
                <!-- <div class="below-section text-center pt-lg-4 mt-5">
                    <p class="copy-text">&copy; 2022 Poultry Field. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
                    </p>
                    <ul class="footer-gd-16 d-flex justify-content-center">
                        <li><a href="#terms">Terms
                            </a></li>
                        <li class="mx-2">/
                        </li>
                        <li><a href="#policy">Privacy Policy</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-arrow-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
    <!-- //move top -->
    <!--//footer-9 -->
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
   

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>





    <!-- Language Converter -->
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'en'
			}, 'google_translate_element');
		}
	</script>
	<script type="text/javascript">
		(function () {
			var gtConstEvalStartTime = new Date();
			/*
	  	
			 Copyright The Closure Library Authors.
			 SPDX-License-Identifier: Apache-2.0
			*/
			var h = this || self,
				l = /^[\w+/_-]+[=]{0,2}$/,
				m = null;

			function n(a) {
				return (a = a.querySelector && a.querySelector("script[nonce]")) && (a = a.nonce || a.getAttribute("nonce")) && l.test(a) ? a : ""
			}

			function p(a, b) {
				function c() { }
				c.prototype = b.prototype;
				a.i = b.prototype;
				a.prototype = new c;
				a.prototype.constructor = a;
				a.h = function (g, f, k) {
					for (var e = Array(arguments.length - 2), d = 2; d < arguments.length; d++) e[d - 2] = arguments[d];
					return b.prototype[f].apply(g, e)
				}
			}

			function q(a) {
				return a
			};

			function r(a) {
				if (Error.captureStackTrace) Error.captureStackTrace(this, r);
				else {
					var b = Error().stack;
					b && (this.stack = b)
				}
				a && (this.message = String(a))
			}
			p(r, Error);
			r.prototype.name = "CustomError";

			function u(a, b) {
				a = a.split("%s");
				for (var c = "", g = a.length - 1, f = 0; f < g; f++) c += a[f] + (f < b.length ? b[f] : "%s");
				r.call(this, c + a[g])
			}
			p(u, r);
      
			u.prototype.name = "AssertionError";

			function v(a, b) {
				throw new u("Failure" + (a ? ": " + a : ""), Array.prototype.slice.call(arguments, 1));
			};
			var w;

			function x(a, b) {
				this.g = b === y ? a : ""
			}
			x.prototype.toString = function () {
				return this.g + ""
			};
			var y = {};

			function z(a) {
				var b = document.getElementsByTagName("head")[0];
				b || (b = document.body.parentNode.appendChild(document.createElement("head")));
				b.appendChild(a)
			}

			function _loadJs(a) {
				var b = document;
				var c = "SCRIPT";
				"application/xhtml+xml" === b.contentType && (c = c.toLowerCase());
				c = b.createElement(c);
				c.type = "text/javascript";
				c.charset = "UTF-8";
				if (void 0 === w) {
					b = null;
					var g = h.trustedTypes;
					if (g && g.createPolicy) {
						try {
							b = g.createPolicy("goog#html", {
								createHTML: q,
								createScript: q,
								createScriptURL: q
							})
						} catch (t) {
							h.console && h.console.error(t.message)
						}
						w = b
					} else w = b
				}
				a = (b = w) ? b.createScriptURL(a) : a;
				a = new x(a, y);
				a: {
					try {
						var f = c && c.ownerDocument,
							k = f && (f.defaultView || f.parentWindow);
						k = k || h;
						if (k.Element && k.Location) {
							var e = k;
							break a
						}
					} catch (t) { }
					e = null
				}
				if (e && "undefined" != typeof e.HTMLScriptElement && (!c || !(c instanceof e.HTMLScriptElement) && (c instanceof e.Location || c instanceof e.Element))) {
					e = typeof c;
					if ("object" == e && null != c || "function" == e) try {
						var d = c.constructor.displayName || c.constructor.name || Object.prototype.toString.call(c)
					} catch (t) {
						d = "<object could not be stringified>"
					} else d = void 0 === c ? "undefined" : null === c ? "null" : typeof c;
					v("Argument is not a %s (or a non-Element, non-Location mock); got: %s",
						"HTMLScriptElement", d)
				}
				a instanceof x && a.constructor === x ? d = a.g : (d = typeof a, v("expected object of type TrustedResourceUrl, got '" + a + "' of type " + ("object" != d ? d : a ? Array.isArray(a) ? "array" : d : "null")), d = "type_error:TrustedResourceUrl");
				c.src = d;
				(d = c.ownerDocument && c.ownerDocument.defaultView) && d != h ? d = n(d.document) : (null === m && (m = n(h.document)), d = m);
				d && c.setAttribute("nonce", d);
				z(c)
			}

			function _loadCss(a) {
				var b = document.createElement("link");
				b.type = "text/css";
				b.rel = "stylesheet";
				b.charset = "UTF-8";
				b.href = a;
				z(b)
			}

			function _isNS(a) {
				a = a.split(".");
				for (var b = window, c = 0; c < a.length; ++c)
					if (!(b = b[a[c]])) return !1;
				return !0
			}

			function _setupNS(a) {
				a = a.split(".");
				for (var b = window, c = 0; c < a.length; ++c) b.hasOwnProperty ? b.hasOwnProperty(a[c]) ? b = b[a[c]] : b = b[a[c]] = {} : b = b[a[c]] || (b[a[c]] = {});
				return b
			}
			window.addEventListener && "undefined" == typeof document.readyState && window.addEventListener("DOMContentLoaded", function () {
				document.readyState = "complete"
			}, !1);
			if (_isNS('google.translate.Element')) {
				return
			} (function () {
				var c = _setupNS('google.translate._const');
				c._cest = gtConstEvalStartTime;
				gtConstEvalStartTime = undefined;
				c._cl = 'en';
				c._cuc = 'googleTranslateElementInit';
				c._cac = '';
				c._cam = '';
				c._ctkk = '449532.3786053938';
				var h = 'translate.googleapis.com';
				var s = (true ? 'https' : window.location.protocol == 'https:' ? 'https' : 'http') + '://';
				var b = s + h;
				c._pah = h;
				c._pas = s;
				c._pbi = b + '/translate_static/img/te_bk.gif';
				c._pci = b + '/translate_static/img/te_ctrl3.gif';
				c._pli = b + '/translate_static/img/loading.gif';
				c._plla = h + '/translate_a/l';
				c._pmi = b + '/translate_static/img/mini_google.png';
				c._ps = b + '/translate_static/css/translateelement.css';
				c._puh = 'translate.google.com';
				_loadCss(c._ps);
				_loadJs(b + '/translate_static/js/element/main.js');
			})();
		})();
	</script>
	<!-- End Language Converter -->
    <script src="assets/js/vendor/jquery-min.js"  defer></script>
    <script src="assets/js/vendor/js.cookie.js"  defer></script>
    <!--Including Javascript-->
    <script src="assets/js/plugins.js " defer></script>
    <script src="assets/js/main.js"  defer></script>
	<!--Newsletter Popup Cookies-->
	<script>
		function newsletter_popup() {
			var cookieSignup = "cookieSignup", date = new Date();
			if ($.cookie(cookieSignup) != 'true' && window.location.href.indexOf("challenge#newsletter-modal") <= -1) {
				setTimeout(function () {
					$.magnificPopup.open({
						items: {
							src: '#newsletter-modal'
						}
						, type: 'inline', removalDelay: 300, mainClass: 'mfp-zoom-in'
					}
					);
				}
					, 5000);
			}
			$.magnificPopup.instance.close = function () {
				if ($("#dontshow").prop("checked") == true) {
					$.cookie(cookieSignup, 'true', {
						expires: 1, path: '/'
					}
					);
				}
				$.magnificPopup.proto.close.call(this);
			}
		}
		newsletter_popup();
    <script/>

</body>

</html>

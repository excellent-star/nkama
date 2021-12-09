@extends('user.userlayout')


@section('page_title','home')
@section('content')

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57SQS65"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Main header start -->
@include('user.header')
<!-- Main header end -->

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100" src="img/banner/banner-3.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">

                        {{--  <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>  --}}



                        @if(session('message_home_page'))

                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>{{ session('message_home_page') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        @endif
                        <div class="text-center">
                            <h3 class="text-uppercase" data-animation="animated fadeInDown delay-05s">299,457 available rentals</h3>
                            <p data-animation="animated fadeInUp delay-10s">
                                {{--  This is real estate website template based on Bootstrap 4 framework.  --}}

                                 Popular searches
                            </p>

                            <a style="color:white; text-decoration:underline;" href="">United Kingdom</a>,
                            <a style="color:white; text-decoration:underline;" href="">France</a>,
                            <a style="color:white; text-decoration:underline;" href="">Australia</a>,
                            <a style="color:white; text-decoration:underline;" href="">Sweden</a>,
                            <a style="color:white; text-decoration:underline;" href="">Belgium</a>,
                            <a style="color:white; text-decoration:underline;" href="">Spain</a><br><br>

                            <div class="inline-search-area ml-auto mr-auto d-none d-md-block d-xl-block d-lg-block">
                                <div class="row animated fadeInUp">
                                    {{--  <div class="col-xl-4 col-sm-4 col-6 search-col">
                                        <i class="fa fa fa-dot-circle-o icon-append"></i>
                                        <input type="text" name="search" class="form-control has-icon" placeholder="I'm looking for a ...">
                                    </div>
                                    <div class="col-xl-3 col-sm-3 col-6 search-col middle-col-1">
                                        <select class="selectpicker search-fields" name="property-status">
                                            <option>Property Status</option>
                                            <option>For Sale</option>
                                            <option>For Rent</option>
                                        </select>
                                    </div>  --}}
                                    <div class="col-xl-8 col-sm-8 col-8 search-col middle-col-2">
                                        <i class="fa fa-map-marker icon-append"></i>
                                        <input type="text" name="location" class="form-control has-icon" placeholder="Location">
                                    </div>
                                    <div class="col-xl-3 col-sm-3 col-4 search-col">
                                        <button class="btn button-theme btn-search btn-block">
                                            <i class="fa fa-search"></i><strong>Find</strong>
                                        </button>
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
<!-- banner end -->

<!-- Search Section start -->
<div class="search-section search-area-2 sr-3 bg-grea d-md-none d-lg-none d-xl-none">
    <div class="container">
        <div class="search-section-area">
            <div class="search-area-inner">
                <div class="search-contents">
                    <form method="GET">
                        <div class="row">
                            {{--  <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <input type="text" name="search" class="form-control" placeholder="I'm looking for a ...">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-status">
                                        <option>Property Status</option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                            </div>  --}}
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <input type="text" name="location" class="form-control" placeholder="location">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <button class="search-button">Find</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Section end -->

<!-- Featured properties start -->
<div class="featured-properties content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Featured Properties</h1>
            <p>Find Your Properties In Your City</p>
        </div>
        <ul class="list-inline-listing filters filteriz-navigation">
            <li class="active btn filtr-button filtr" data-filter="all">All</li>
            <li data-filter="1" class="btn btn-inline filtr-button filtr">Apartment</li>
            <li data-filter="2" class="btn btn-inline filtr-button filtr">House</li>
            <li data-filter="3" class="btn btn-inline filtr-button filtr">Office</li>
        </ul>
        <div class="row filter-portfolio">
            <div class="cars">
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3">
                    <div class="property-box-3">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                </div>
                                <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Masons Villas</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html" tabindex="0">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square"></i>
                                <p>Sq Ft:3400</p>
                            </li>
                            <li>
                                <i class="flaticon-furniture"></i>
                                <p>3 Beds</p>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <p>2 Bath</p>
                            </li>
                        </ul>
                        <div class="footer clearfix">
                            <div class="pull-left days">
                                <p>$540,000</p>
                            </div>
                            <div class="pull-right">
                                <a href="properties-details.html" class="btn btn-outline">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2, 1">
                    <div class="property-box-3">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-time opening">For Sale</div>
                                <img class="d-block w-100" src="img/properties/properties-2.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Big Head House</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html" tabindex="0">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square"></i>
                                <p>Sq Ft:3400</p>
                            </li>
                            <li>
                                <i class="flaticon-furniture"></i>
                                <p>3 Beds</p>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <p>2 Bath</p>
                            </li>
                        </ul>
                        <div class="footer clearfix">
                            <div class="pull-left days">
                                <p>$540,000</p>
                            </div>
                            <div class="pull-right">
                                <a href="properties-details.html" class="btn btn-outline">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="1, 2">
                    <div class="property-box-3">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                </div>
                                <img class="d-block w-100" src="img/properties/properties-3.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Park Avenue</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html" tabindex="0">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square"></i>
                                <p>Sq Ft:3400</p>
                            </li>
                            <li>
                                <i class="flaticon-furniture"></i>
                                <p>3 Beds</p>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <p>2 Bath</p>
                            </li>
                        </ul>
                        <div class="footer clearfix">
                            <div class="pull-left days">
                                <p>$540,000</p>
                            </div>
                            <div class="pull-right">
                                <a href="properties-details.html" class="btn btn-outline">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2">
                    <div class="property-box-3">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                </div>
                                <img class="d-block w-100" src="img/properties/properties-3.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Sweet Family Home</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html" tabindex="0">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square"></i>
                                <p>Sq Ft:3400</p>
                            </li>
                            <li>
                                <i class="flaticon-furniture"></i>
                                <p>3 Beds</p>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <p>2 Bath</p>
                            </li>
                        </ul>
                        <div class="footer clearfix">
                            <div class="pull-left days">
                                <p>$540,000</p>
                            </div>
                            <div class="pull-right">
                                <a href="properties-details.html" class="btn btn-outline">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="2, 1">
                    <div class="property-box-3">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                </div>
                                <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Masons Villas</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html" tabindex="0">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square"></i>
                                <p>Sq Ft:3400</p>
                            </li>
                            <li>
                                <i class="flaticon-furniture"></i>
                                <p>3 Beds</p>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <p>2 Bath</p>
                            </li>
                        </ul>
                        <div class="footer clearfix">
                            <div class="pull-left days">
                                <p>$540,000</p>
                            </div>
                            <div class="pull-right">
                                <a href="properties-details.html" class="btn btn-outline">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 1">
                    <div class="property-box-3">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-time opening">For Sale</div>
                                <img class="d-block w-100" src="img/properties/properties-2.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Big Head House</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html" tabindex="0">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square"></i>
                                <p>Sq Ft:3400</p>
                            </li>
                            <li>
                                <i class="flaticon-furniture"></i>
                                <p>3 Beds</p>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <p>2 Bath</p>
                            </li>
                        </ul>
                        <div class="footer clearfix">
                            <div class="pull-left days">
                                <p>$540,000</p>
                            </div>
                            <div class="pull-right">
                                <a href="properties-details.html" class="btn btn-outline">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- Services 3 start -->

<!-- Services 3 end -->

<!-- Categories strat -->
<div class="categories content-area-8">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Most Popular Places</h1>
            <p>Find Property In Your Country</p>
        </div>

        <div class="row wow">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-4 col-sm-6 wow fadeInLeft delay-04s col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-1-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Florida</a>
                                        </h3>
                                        <div class="category-subtitle">14 Properties</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInLeft delay-04s col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">California</a>
                                        </h3>
                                        <div class="category-subtitle">98 Properties</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInRight delay-04s col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">California</a>
                                        </h3>
                                        <div class="category-subtitle">98 Properties</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInRight delay-04s col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">California</a>
                                        </h3>
                                        <div class="category-subtitle">98 Properties</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInRight delay-04s col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">California</a>
                                        </h3>
                                        <div class="category-subtitle">98 Properties</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 wow fadeInRight delay-04s col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">California</a>
                                        </h3>
                                        <div class="category-subtitle">98 Properties</div>
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
<!-- Categories end-->

<!-- Our team 2 start -->

<!-- Our team 2 end -->

<!-- Testimonial 2 start -->
<div class="testimonial-2 t2 overview-bgi" style="background-image: url(img/testimonial.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="testimonial-inner">
                    <header class="testimonia-header">
                        <h1>Our Testimonial</h1>
                    </header>
                    <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p class="lead">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="avatar">
                                    <img src="img/avatar/avatar-1.jpg" alt="testimonial-user">
                                </div>
                                {{--  <ul class="rating">
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-half-full"></i>
                                    </li>
                                </ul>  --}}
                                <div class="author-name">
                                    John Antony
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p class="lead">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="avatar">
                                    <img src="img/avatar/avatar-2.jpg" alt="testimonial-user">
                                </div>
                                {{--  <ul class="rating">
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-half-full"></i>
                                    </li>
                                </ul>  --}}
                                <div class="author-name">
                                    John Mery
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p class="lead">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="avatar">
                                    <img src="img/avatar/avatar-3.jpg" alt="testimonial-user">
                                </div>
                                {{--  <ul class="rating">
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-half-full"></i>
                                    </li>
                                </ul>  --}}
                                <div class="author-name">
                                    Karen Paran
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 2 end -->
<div class="clearfix"></div>

<!-- Blog start -->
<div class="blog content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>See other Searches</h1>
            <p>Expand your search and see available rentals in popular countries.</p>
        </div>

        <div class="slick-slider-area">

             {{-- <div class="row"> --}}

                  {{-- <div class="col-md-6"> --}}

                             <div id="accordion">

                                 {{-- <div class="row"> --}}

                                    <div   class="card">
                                        <div style="background-color:#7ED9C7" class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button style="color:white;width:100%;height:40px;text-decoration:none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Australia (20000000)
                                            </button>
                                        </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">

                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">Adelaide (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">libreville (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">mouila (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">lambarene (117)</a><p>
                                        </div>
                                        </div>
                                    </div>
                                    <div  class="card">
                                        <div style="background-color:#7ED9C7" class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button style="color:white;width:100%;height:40px;text-decoration:none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Belgium (24200000)
                                            </button>
                                        </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">

                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">Adelaide (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">libreville (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">mouila (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">lambarene (117)</a><p>
                                        </div>
                                        </div>
                                    </div>
                                    <div  class="card">
                                        <div style="background-color:#7ED9C7" class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button style="color:white;width:100%;height:40px;text-decoration:none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            France ( 495559)
                                            </button>
                                        </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">

                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">Adelaide (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">libreville (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">mouila (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">lambarene (117)</a><p>
                                        </div>
                                        </div>
                                    </div>

                                {{-- </div> --}}

                                    </div>

                  {{-- </div> --}}

                  {{-- <div class="col-md-6">



                   <div id="accordion">
                                    <div   class="card">
                                        <div style="background-color:#7ED9C7" class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button style="color:white;width:100%;height:40px;text-decoration:none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Australia (20000000)
                                            </button>
                                        </h5>
                                        </div>

                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">

                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">Adelaide (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">libreville (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">mouila (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">lambarene (117)</a><p>
                                        </div>
                                        </div>
                                    </div>
                                    <div  class="card">
                                        <div style="background-color:#7ED9C7" class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button style="color:white;width:100%;height:40px;text-decoration:none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Belgium (24200000)
                                            </button>
                                        </h5>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body">

                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">Adelaide (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">libreville (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">mouila (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">lambarene (117)</a><p>
                                        </div>
                                        </div>
                                    </div>
                                    <div  class="card">
                                        <div style="background-color:#7ED9C7" class="card-header" id="headingSix">
                                        <h5 class="mb-0">
                                            <button style="color:white;width:100%;height:40px;text-decoration:none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            France ( 495559)
                                            </button>
                                        </h5>
                                        </div>
                                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                        <div class="card-body">

                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">Adelaide (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">libreville (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">mouila (117)</a><p>
                                                   <p style="text-align:center;"><a style="color:#7ed9c7;" href="#">lambarene (117)</a><p>
                                        </div>
                                        </div>
                                    </div>
                                    </div>


                  </div> --}}

             {{-- </div> --}}

        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Partners strat -->

<!-- Partners end -->

<!-- Footer start -->


@include('user.footer')

<!-- Footer end -->




@endsection

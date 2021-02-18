<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:15:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Davix - Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.html">
    <link rel="apple-touch-icon" href="icon.html">
    <!-- Place favicon.ico in the root directory -->

    <!-- bootstrap v4.0.0 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- fontawesome-icons css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- themify-icons css -->
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- elegant css -->
    <link rel="stylesheet" href="assets/css/elegant.css">
    <!-- elegant css -->
    <link rel="stylesheet" href="assets/css/jquery.mmenu.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- perfect-scrollbar css -->
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="assets/css/venobox.css">
    <!-- slick css -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- slick-theme css -->
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- cssanimation css -->
    <link rel="stylesheet" href="assets/css/cssanimation.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- helper css -->
    <link rel="stylesheet" href="assets/css/helper.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--header-area start-->
<header class="header-area">
    <div class="desktop-header">
        <!--header-top-->
        <div class="header-top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="topbar-left">
                            <ul class="list-none">
                                <li>SHOP EVENTS & SAVE UP TO <span>65% OFF!</span></li>
                                <li>Call Us: <span>001-1234-88888</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="topbar-right">
                            <div class="social-icons pull-right">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header-bottom-->
        <div class="sticker header-bottom">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="assets/images/LOGO.png" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mainmenu">
                            <nav>
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{url('shop')}}">
                                            <span class="text-label label-featured">New</span>
                                            Shop
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            About
                                        </a>
                                    </li>
                                    <li><a href="#">Services</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Printing</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-fullwidth.html">Blog Full Width</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="#">Track Order</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <div class="col-lg-2">
                            <div class="register-login pull-right">
                                <a href="#" data-toggle="modal" data-target="#auth">{{\Illuminate\Support\Facades\Auth::user()->first_name}} {{\Illuminate\Support\Facades\Auth::user()->last_name}}</a>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-2">
                            <div class="register-login pull-right">
                                <a href="#" data-toggle="modal" data-target="#auth">Register</a>
                                <span>/</span>
                                <a href="#">Sign in</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!--products-search-->
        <div class="products-search">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-xl-2 col-lg-3">
                        <div class="collapse-menu mt-0">
                            <ul>
                                <li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>All Departments</span></a>
                                    <ul class="vm-dropdown">
                                        <li><a href="#"><i class="fa fa-umbrella"></i>Promotional Items</a></li>
                                        <li><a href="#"><i class="fa fa-indent"></i>Interior Decor</a></li>
                                        <li><a href="#"><i class="fa fa-book"></i>Cash/Receipt Books</a></li>
                                        <li><a href="#"><i class="fa fa-print"></i>Corporate Branding</a></li>
                                        <li><a href="#"><i class="fa fa-print"></i>Digital & Offset Printing</a></li>
                                        <li><a href="#"><i class="fa fa-print"></i>Large Format Printing</a></li>
                                        <li><a href="#"><i class="fa fa-print"></i>Screen Printing</a></li>
                                        <li><a href="#"><i class="fa fa-print"></i>UV Printing</a></li>
                                        <li><a href="#"><i class="fa fa-print"></i>Embroidery Services</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="search-box">
                            <select>
                                <option>All Categories</option>
                                <option>Large Format Printing</option>
                                <option>Corporate Branding</option>
                                <option>Screen Printing</option>
                                <option>Digital & Offset Printing</option>
                                <option>Cash/Receipt Books</option>
                            </select>
                            <input type="text" placeholder="What do you need?" />
                            <button>Search</button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3">
                        <div class="mini-cart pull-right">
                            <ul>
                                <li><a href="#" title="Track Your Order"><i class="ti-truck"></i></a></li>
                                <li><a href="#"><i class="icon_heart_alt"></i><span></span></a></li>
                                <li><a href="javascript:void(0);" class="minicart-icon"><i class="icon_bag_alt"></i>Ksh {{$totalPrice}}<span>{{\Illuminate\Support\Facades\Session::has('cart') ? \Illuminate\Support\Facades\Session::get('cart')->totalQty: ''}}</span></a>
                                    <div class="cart-dropdown">
                                        <ul>
                                            @if(isset($products))
                                                @foreach($products as $product)
                                                    <li>
                                                        <div class="mini-cart-thumb">
                                                            <a href="#"><img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="" /></a>
                                                        </div>
                                                        <div class="mini-cart-heading">
                                                            <span>Ksh {{$product['item']['product_price']}} x {{$product['quantity']}}</span>
                                                            <h5><a href="#">{{$product['item']['product_name']}}</a></h5>
                                                        </div>
                                                        <div class="mini-cart-remove">
                                                            <a href="{{url('cartRemove',$product['item']['id'])}}"><button><i class="ti-close"></i></button></a>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                        <div class="minicart-total fix">
                                            <span class="pull-left">total:</span>
                                            @if(isset($totalPrice))
                                                <span class="pull-right">Ksh {{$totalPrice}}</span>
                                            @endif
                                        </div>
                                        <div class="mini-cart-checkout">
                                            <a href="{{url('cart')}}" class="btn-common view-cart">VIEW CART</a>
                                            <a href="{{url('checkout')}}" class="btn-common checkout mt-10">CHECKOUT</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--mobile-header-->
    <div class="sticker mobile-header">
        <div class="container-fluid">
            <!--logo and cart-->
            <div class="row align-items-center">
                <div class="col-sm-4 col-6">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="assets/images/logo.png" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-sm-8 col-6">
                    <div class="mini-cart text-right">
                        <ul>
                            <li><a href="#"><i class="icon_heart_alt"></i><span>1</span></a></li>
                            <li class="minicart-icon"><a href="#"><i class="icon_bag_alt"></i><span>{{\Illuminate\Support\Facades\Session::has('cart') ? \Illuminate\Support\Facades\Session::get('cart')->totalQty: ''}}</span></a>
                                <div class="cart-dropdown">
                                    <ul>
                                        @if(isset($products))
                                            @foreach($products as $product)
                                                <li>
                                                    <div class="mini-cart-thumb">
                                                        <a href="#"><img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="" /></a>
                                                    </div>
                                                    <div class="mini-cart-heading">
                                                        <span>Ksh {{$product['item']['product_price']}} x {{$product['quantity']}}</span>
                                                        <h5><a href="#">{{$product['item']['product_name']}}</a></h5>
                                                    </div>
                                                    <div class="mini-cart-remove">
                                                        <a href="{{url('cartRemove',$product['item']['id'])}}"><button><i class="ti-close"></i></button></a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                    <div class="minicart-total fix">
                                        <span class="pull-left">total:</span>
                                        @if(isset($totalPrice))
                                            <span class="pull-right">Ksh {{$totalPrice}}</span>
                                        @endif
                                    </div>
                                    <div class="mini-cart-checkout">
                                        <a href="{{url('cart')}}" class="btn-common view-cart">VIEW CART</a>
                                        <a href="{{url('checkout')}}" class="btn-common checkout mt-10">CHECKOUT</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--search-box-->
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="search-box mt-sm-15">
                        <select>
                            <option>All Categories</option>
                            <option>Computer</option>
                            <option>TV & Smart box</option>
                            <option>Camera & Photography</option>
                            <option>Headphones</option>
                        </select>
                        <input type="text" placeholder="What do you need?" />
                        <button>Search</button>
                    </div>
                </div>
            </div>
            <!--site-menu-->
            <div class="row mt-sm-10">
                <div class="col-lg-12">
                    <a href="#my-menu" class="mmenu-icon pull-left"><i class="fa fa-bars"></i></a>

                    <div class="mainmenu">
                        <nav id="my-menu">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{url('shop')}}">
                                        <span class="text-label label-featured">Featured</span>
                                        Shop
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('about')}}">
                                        About
                                    </a>
                                </li>
                                <li><a href="{{url('services')}}">Services</a>
                                </li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                                <li><a href="{{url('track')}}">Track Order</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!--category-->
                    <div class="collapse-menu mt-0 pull-right">
                        <ul>
                            <li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>All Departments</span></a>
                                <ul class="vm-dropdown">
                                    <li><a href="#"><i class="fa fa-laptop"></i>Computer <b class="caret"></b></a>
                                        <ul class="mega-menu">
                                            <li class="megamenu-single">
                                                <span class="mega-menu-title">Shop Page</span>
                                                <ul>
                                                    <li><a href="#">Products Block Top</a></li>
                                                    <li><a href="#">Products Block Bottom</a></li>
                                                    <li><a href="#">Shop Grid 5 Column</a></li>
                                                    <li><a href="#">Shop List</a></li>
                                                    <li><a href="#">Shop width Normal</a></li>
                                                    <li><a href="#">Shop List Normal</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-single">
                                                <span class="mega-menu-title">Featured</span>
                                                <ul>
                                                    <li><a href="#">Thumbnails Left</a></li>
                                                    <li><a href="#">Thumbnails Right</a></li>
                                                    <li><a href="#">Thumbnails Bottom</a></li>
                                                    <li><a href="#">Thumbnails Full</a></li>
                                                    <li><a href="#">Single 2 Colums</a></li>
                                                    <li><a href="#">Tabs Content</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-single">
                                                <span class="mega-menu-title">Shop Page</span>
                                                <ul>
                                                    <li><a href="#">Simple Product</a></li>
                                                    <li><a href="#">Grouped Product</a></li>
                                                    <li><a href="#">Variable Product</a></li>
                                                    <li><a href="#">External Product</a></li>
                                                    <li><a href="#">My account</a></li>
                                                    <li><a href="#">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-single">
                                                <span class="mega-menu-title">Features</span>
                                                <ul>
                                                    <li><a href="#">Detail with Video</a></li>
                                                    <li><a href="#">Variations Swatches</a></li>
                                                    <li><a href="#">With Countdown Timer</a></li>
                                                    <li><a href="#">Catalog Mode</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-desktop"></i>TV & Smart box <b class="caret"></b></a>
                                        <ul class="mega-menu">
                                            <li class="megamenu-single">
                                                <span class="mega-menu-title">Shop Page</span>
                                                <ul>
                                                    <li><a href="#">Products Block Top</a></li>
                                                    <li><a href="#">Products Block Bottom</a></li>
                                                    <li><a href="#">Shop Grid 5 Column</a></li>
                                                    <li><a href="#">Shop List</a></li>
                                                    <li><a href="#">Shop width Normal</a></li>
                                                    <li><a href="#">Shop List Normal</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-single">
                                                <span class="mega-menu-title">Featured</span>
                                                <ul>
                                                    <li><a href="#">Thumbnails Left</a></li>
                                                    <li><a href="#">Thumbnails Right</a></li>
                                                    <li><a href="#">Thumbnails Bottom</a></li>
                                                    <li><a href="#">Thumbnails Full</a></li>
                                                    <li><a href="#">Single 2 Colums</a></li>
                                                    <li><a href="#">Detail with Accessories</a></li>
                                                    <li><a href="#">Tabs Content</a></li>
                                                    <li><a href="#">Accordion Tabs</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-camera"></i>Camera & Photography</a></li>
                                    <li><a href="#"><i class="fa fa-headphones"></i>Headphones</a></li>
                                    <li><a href="#"><i class="fa fa-music"></i>Musical Instruments</a></li>
                                    <li><a href="#"><i class="fa fa-mobile"></i>Smart phone & Tablets</a></li>
                                    <li><a href="#"><i class="fa fa-flash"></i>Accessories</a></li>
                                    <li><a href="#"><i class="fa fa-microphone"></i>Home Audio & Theater</a></li>
                                    <li><a href="#"><i class="fa fa-print"></i>Printer</a></li>
                                    <li><a href="#"><i class="fa fa-fax"></i>Fax machine</a></li>
                                    <li><a href="#"><i class="fa fa-spoon"></i>Household goods</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Watch</a></li>
                                    <li><a href="#"><i class="fa fa-random"></i>Other</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header-area end-->

<!--slider-area start-->
<div class="slider-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 offset-xl-2">
                <div class="main-slider mt-30 mt-sm-0">
                    <div class="slider-single bg-1">
                        <div class="d-table">
                            <div class="slider-caption">
                            </div>
                        </div>
                    </div>
                    <div class="slider-single bg-2">
                        <div class="d-table">
                            <div class="slider-caption">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="row mt-30">
                    <div class="col-lg-6 col-sm-6 pl-05">
                        <div class="banner-sm hover-effect">
                            <img src="assets/images/banners/small/1.jpg" alt="" />
                            <div class="banner-info">
                                <h4>Clothing</h4>
                                <p>Extra <strong>30%</strong> <br/>  <strong>Off</strong> All <br/> Sale Styles</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 pl-05">
                        <div class="banner-sm hover-effect mt-sm-20">
                            <img src="assets/images/banners/small/2.jpg" alt="" />
                            <div class="banner-info">
                                <h4>Tech</h4>
                                <p>Riley <strong>Smart</strong> <br/>  <strong>Home</strong> Patrol <br/> Robot</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 pl-05">
                        <div class="banner-sm hover-effect mt-20">
                            <img src="assets/images/banners/small/3.jpg" alt="" />
                            <div class="banner-info">
                                <h4>Beauty</h4>
                                <p>20% Off or <br/> more <strong>Beauty <br/> Product</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 pl-05">
                        <div class="banner-sm hover-effect mt-20">
                            <img src="assets/images/banners/small/4.jpg" alt="" />
                            <div class="banner-info">
                                <h4>Electronics</h4>
                                <p>Globe Electric <br/> <strong>House & <br/> Appliances</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--slider-area end-->

<!--products-area start-->
<div class="products-area mt-47 mt-sm-37">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-lg-3">
                <div class="sidebar">
                    <!--product-deal-->
                    <div class="sidebar-single">
                        <div class="section-title">
                            <h3>Deal off the week</h3>
                        </div>
                        <div class="row product-deals">
                            <!--single-deal-->
                            <div class="col-lg-12">
                                <div class="product-single product-deal">
                                    <div class="product-title">
                                        <small><a href="#">Camera</a></small>
                                        <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                                    </div>
                                    <div class="product-thumb">
                                        <a href="#"><img src="assets/images/products/deals/1.jpg" alt="" /></a>
                                        <div class="downsale"><span>-</span>$25</div>
                                        <div class="product-quick-view">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-price-rating">
                                        <div class="pull-left">
                                            <span>$195.00</span>
                                        </div>
                                        <div class="pull-right">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="product-availability">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
                                            </div>
                                        </div>
                                        <span>Already Sold: <span>20</span></span>
                                        <span>Available: <span>35</span></span>
                                    </div>
                                    <div class="product-countdown">
                                        <div data-countdown="2010/08/01"></div>
                                    </div>
                                </div>
                            </div>
                            <!--single-deal-->
                            <div class="col-lg-12">
                                <div class="product-single product-deal">
                                    <div class="product-title">
                                        <small><a href="#">Camera</a></small>
                                        <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                                    </div>
                                    <div class="product-thumb">
                                        <a href="#"><img src="assets/images/products/1.jpg" alt="" /></a>
                                        <div class="downsale"><span>-</span>$25</div>
                                        <div class="product-quick-view">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-price-rating">
                                        <div class="pull-left">
                                            <span>$195.00</span>
                                        </div>
                                        <div class="pull-right">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="product-availability">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
                                            </div>
                                        </div>
                                        <span>Already Sold: <span>20</span></span>
                                        <span>Available: <span>35</span></span>
                                    </div>
                                    <div class="product-countdown">
                                        <div data-countdown="2010/08/01"></div>
                                    </div>
                                </div>
                            </div>
                            <!--single-deal-->
                            <div class="col-lg-12">
                                <div class="product-single product-deal">
                                    <div class="product-title">
                                        <small><a href="#">Camera</a></small>
                                        <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                                    </div>
                                    <div class="product-thumb">
                                        <a href="#"><img src="assets/images/products/3.jpg" alt="" /></a>
                                        <div class="downsale"><span>-</span>$25</div>
                                        <div class="product-quick-view">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-price-rating">
                                        <div class="pull-left">
                                            <span>$195.00</span>
                                        </div>
                                        <div class="pull-right">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="product-availability">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
                                            </div>
                                        </div>
                                        <span>Already Sold: <span>20</span></span>
                                        <span>Available: <span>35</span></span>
                                    </div>
                                    <div class="product-countdown">
                                        <div data-countdown="2010/08/01"></div>
                                    </div>
                                </div>
                            </div>
                            <!--single-deal-->
                            <div class="col-lg-12">
                                <div class="product-single product-deal">
                                    <div class="product-title">
                                        <small><a href="#">Camera</a></small>
                                        <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                                    </div>
                                    <div class="product-thumb">
                                        <a href="#"><img src="assets/images/products/4.jpg" alt="" /></a>
                                        <div class="downsale"><span>-</span>$25</div>
                                        <div class="product-quick-view">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-price-rating">
                                        <div class="pull-left">
                                            <span>$195.00</span>
                                        </div>
                                        <div class="pull-right">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="product-availability">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
                                            </div>
                                        </div>
                                        <span>Already Sold: <span>20</span></span>
                                        <span>Available: <span>35</span></span>
                                    </div>
                                    <div class="product-countdown">
                                        <div data-countdown="2010/08/01"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--product-ad-->
                    <div class="sidebar-single mt-30 d-none d-xl-block">
                        <a href="#"><img src="assets/images/ad/1.jpg" alt="" /></a>
                    </div>
                    <!--latest-products-->
                    <div class="single-sidebar products-list mt-35">
                        <div class="section-title mb-30">
                            <h3>Latest Items</h3>
                        </div>
                        <div class="one-carousel dots-none">
                            <div>
                                <ul class="list-none">
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="assets/images/products/latest/1.jpg" alt="" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="assets/images/products/latest/2.jpg" alt="" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="assets/images/products/latest/3.jpg" alt="" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="assets/images/products/latest/4.jpg" alt="" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="assets/images/products/latest/5.jpg" alt="" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="list-none">
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="assets/images/products/latest/1.jpg" alt="" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="assets/images/products/latest/2.jpg" alt="" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="assets/images/products/latest/3.jpg" alt="" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="assets/images/products/latest/4.jpg" alt="" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="assets/images/products/latest/5.jpg" alt="" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--store-supports-->
                    <div class="single-sidebar mt-30">
                        <div class="store-supports">
                            <ul class="list-none">
                                <li>
                                    <div class="support-icon">
                                        <img src="assets/images/icons/bank-loan.jpg" alt="" />
                                    </div>
                                    <div class="support-text">
                                        <strong>Free Delivery</strong>
                                        <p>For all order over 99$</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="support-icon">
                                        <img src="assets/images/icons/bank-liquidity.jpg" alt="" />
                                    </div>
                                    <div class="support-text">
                                        <strong>30 Days Return</strong>
                                        <p>If goods have Problems</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="support-icon">
                                        <img src="assets/images/icons/bank-credit-card.jpg" alt="" />
                                    </div>
                                    <div class="support-text">
                                        <strong>Secure Payment</strong>
                                        <p>100% secure payment</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="support-icon">
                                        <img src="assets/images/icons/bank-support.jpg" alt="" />
                                    </div>
                                    <div class="support-text">
                                        <strong>24/7 Support</strong>
                                        <p>Dedicated support</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-10 col-lg-9 fix">
                <!--product-categories-->
                <div class="product-categories mt-sm-40">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h3>Top Categories</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row product-categories-carousel mt-30">
                        <div class="col-lg-3">
                            <div class="single-product-cat">
                                <a href="#"><img src="assets/images/products/category/1.png" alt="" /></a>
                                <h4><a href="#">Sports & Outdoors</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single-product-cat">
                                <a href="#"><img src="assets/images/products/category/2.png" alt="" /></a>
                                <h4><a href="#">Headphones</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single-product-cat">
                                <a href="#"><img src="assets/images/products/category/3.png" alt="" /></a>
                                <h4><a href="#">Smart phone & Tablets</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single-product-cat">
                                <a href="#"><img src="assets/images/products/category/4.png" alt="" /></a>
                                <h4><a href="#">Camera & Photography </a></h4>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single-product-cat">
                                <a href="#"><img src="assets/images/products/category/3.png" alt="" /></a>
                                <h4><a href="#">Smart phone & Tablets</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single-product-cat">
                                <a href="#"><img src="assets/images/products/category/4.png" alt="" /></a>
                                <h4><a href="#">Camera & Photography </a></h4>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single-product-cat">
                                <a href="#"><img src="assets/images/products/category/3.png" alt="" /></a>
                                <h4><a href="#">Smart phone & Tablets</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single-product-cat">
                                <a href="#"><img src="assets/images/products/category/4.png" alt="" /></a>
                                <h4><a href="#">Camera & Photography </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--products-tab-->
                <div class="products-tab mt-35">
                    <div class="product-nav-tabs">
                        <ul class="nav nav-tabs">
                            <li><a class="active" data-toggle="tab" href="#new-arrivals">Large Format Printing</a></li>
                        </ul>
                    </div>
                    <div class="tab-content pb-40">
                        <div id="new-arrivals" class="tab-pane fade in show active">
                            <div class="row product-carousel cv-visible">
                                @foreach($larges as $large)
                                <div class="col-lg-3">
                                    <!--single-product-->
                                    <div class="product-single">
                                        <div class="product-title">
                                            <h4><a href="#">{{$large->product_name}}</a></h4>
                                        </div>
                                        <div class="product-thumb">
                                            <a href="{{url('productDetail',$large->id)}}"><img src="{{asset('uploads/product/'.$large->product_image)}}" alt="" /></a>
                                            <div class="downsale"><span>-</span>$25</div>
                                            <div class="product-quick-view">
                                                <a href="javascript:void(0);" class="view" id="{{$large->id}}" data-toggle="modal" data-target="#basic1">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-price-rating">
                                            <span>Ksh: {{$large->product_price}}</span>
                                            <del>Ksh: {{$large->product_cancel_price}}</del>
                                        </div>
                                        <form id="productDetailForm">
                                        <div class="product-action">
                                            <input type="hidden" value="{{$large->id}}" name="productId" id="productDetail">
                                            <a href="javascript:void(0);" class="product-com


                                            pare"><i class="ti-control-shuffle"></i></a>
                                            <a href="javascript:document.getElementById('productDetailForm').submit()" class="add-to-cart">Add to Cart</a>
                                            <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                        </div>
                                        </form>
                                    </div>
                                    <!--single-product-->
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <!--best sellers-->
                <div class="best-sellers mt-minus-40">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h3>Digital & Offset Printing</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row best-seller cv-visible">
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Camera</a></small>
                                    <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
                                    <div class="downsale"><span>-</span>$25</div>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <span>$195.00</span>
                                    <del>$229.99</del>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Iphone</a></small>
                                    <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$395.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Electronics</a></small>
                                    <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/11.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$195.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Macbook</a></small>
                                    <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/12.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$255.00</span>
                                        <del>329.99</del>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Camera</a></small>
                                    <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/13.jpg" alt="" /></a>
                                    <div class="downsale"><span>-</span>$25</div>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <span>$195.00</span>
                                    <del>$229.99</del>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Iphone</a></small>
                                    <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/shop/1.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$395.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Electronics</a></small>
                                    <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/shop/2.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$195.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Macbook</a></small>
                                    <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/shop/3.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$255.00</span>
                                        <del>329.99</del>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Camera</a></small>
                                    <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/shop/4.jpg" alt="" /></a>
                                    <div class="downsale"><span>-</span>$25</div>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <span>$195.00</span>
                                    <del>$229.99</del>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Iphone</a></small>
                                    <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/shop/5.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$395.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Electronics</a></small>
                                    <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/3.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$195.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Macbook</a></small>
                                    <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/4.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="best-sellers mt-minus-40">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h3>Corporate Branding</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row best-seller cv-visible">
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Camera</a></small>
                                    <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
                                    <div class="downsale"><span>-</span>$25</div>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <span>$195.00</span>
                                    <del>$229.99</del>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Iphone</a></small>
                                    <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$395.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Electronics</a></small>
                                    <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/11.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$195.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Macbook</a></small>
                                    <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/12.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$255.00</span>
                                        <del>329.99</del>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Camera</a></small>
                                    <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/13.jpg" alt="" /></a>
                                    <div class="downsale"><span>-</span>$25</div>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <span>$195.00</span>
                                    <del>$229.99</del>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Iphone</a></small>
                                    <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/shop/1.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$395.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Electronics</a></small>
                                    <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/shop/2.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$195.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Macbook</a></small>
                                    <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/shop/3.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$255.00</span>
                                        <del>329.99</del>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Camera</a></small>
                                    <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/shop/4.jpg" alt="" /></a>
                                    <div class="downsale"><span>-</span>$25</div>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <span>$195.00</span>
                                    <del>$229.99</del>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Iphone</a></small>
                                    <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/shop/5.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$395.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Electronics</a></small>
                                    <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/3.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-price-rating">
                                    <div class="pull-left">
                                        <span>$195.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-single">
                                <div class="product-title">
                                    <small><a href="#">Macbook</a></small>
                                    <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                                </div>
                                <div class="product-thumb">
                                    <a href="#"><img src="assets/images/products/4.jpg" alt="" /></a>
                                    <div class="product-quick-view">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                    </div>
                                </div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--banner-section-->
                <div class="row mt-40">
                    <div class="col-xl-4 col-lg-6">
                        <div class="banner-sm hover-effect">
                            <img src="assets/images/banners/md/1.jpg" alt="" />
                            <div class="banner-info">
                                <div class="product-value">
                                    <span>$195.00</span>
                                    <del>$229.99</del>
                                </div>
                                <p>Sale Up To <strong>25% <br/> Off</strong> Bosch Home</p>
                                <a href="#" class="btn-common width-115">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mt-sm-30">
                        <div class="banner-sm hover-effect">
                            <img src="assets/images/banners/md/2.jpg" alt="" />
                            <div class="banner-info">
                                <div class="product-value">
                                    <span>$345.00</span>
                                    <del>$429.99</del>
                                </div>
                                <p>Extra <strong>30% Off</strong><br/> All Sale Style</p>
                                <a href="#" class="btn-common width-115">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 d-none d-xl-block">
                        <div class="banner-sm hover-effect">
                            <img src="assets/images/banners/md/3.jpg" alt="" />
                            <div class="banner-info">
                                <div class="product-value">
                                    <span>$345.00</span>
                                    <del>$429.99</del>
                                </div>
                                <p>iPATROL <strong>Riley V2</strong><br/> Bonus Bundle</p>
                                <a href="#" class="btn-common width-115">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--products-area end-->

<!--products-tab start-->
<div class="products-tab-area mt-45 mt-sm-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 pr-0">
                <div class="section-title">
                    <h3>Screen Printing</h3>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="all-accessories" class="tab-pane active">
                <div class="row product-carousel-fullwidth cv-visible">
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/14.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/3.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/6.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/4.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/1.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/2.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/3.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/4.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="phone-tablet" class="tab-pane fade">
                <div class="row product-carousel-fullwidth cv-visible">
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/1.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/3.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/6.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/4.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/1.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/3.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/6.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/4.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="video-cemra" class="tab-pane fade">
                <div class="row product-carousel-fullwidth cv-visible">
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/4.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/8.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/6.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/7.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/4.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/8.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/6.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/7.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="laptop-computers" class="tab-pane fade">
                <div class="row product-carousel-fullwidth cv-visible">
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/8.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/10.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/11.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/8.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/10.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/11.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--products-tab end-->

<!--products-tab start-->
<div class="products-tab-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 pr-0">
                <div class="section-title">
                    <h3>UV Printing</h3>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 pl-0">
                <div class="product-nav-tabs style-3">
                    <ul class="nav nav-tabs text-right">
                        <li><a class="active" data-toggle="tab" href="#accessories">All Accessories</a></li>
                        <li><a data-toggle="tab" href="#tv-fridge">TVs/Fridge/Laundry</a></li>
                        <li><a data-toggle="tab" href="#kitchen-appliance">Kitchen Appliance</a></li>
                        <li><a data-toggle="tab" href="#seasonal-appliances">Seasonal Appliances</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="accessories" class="tab-pane active">
                <div class="row product-carousel-fullwidth cv-visible">
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/15.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/16.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/17.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/18.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/19.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/20.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/3.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/4.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tv-fridge" class="tab-pane fade">
                <div class="row product-carousel-fullwidth cv-visible">
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/1.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/2.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/3.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/4.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/1.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/2.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/3.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/4.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="kitchen-appliance" class="tab-pane fade">
                <div class="row product-carousel-fullwidth cv-visible">
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/15.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/16.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/17.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/18.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/15.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/16.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/17.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/18.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="seasonal-appliances" class="tab-pane fade">
                <div class="row product-carousel-fullwidth cv-visible">
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/5.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/6.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/7.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/8.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Camera</a></small>
                                <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/5.jpg" alt="" /></a>
                                <div class="downsale"><span>-</span>$25</div>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <span>$195.00</span>
                                <del>$229.99</del>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Iphone</a></small>
                                <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/6.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$395.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Electronics</a></small>
                                <h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/7.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$195.00</span>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="#">Macbook</a></small>
                                <h4><a href="#">Swivl C Series RobotSW3322-C1 </a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="#"><img src="assets/images/products/shop/8.jpg" alt="" /></a>
                                <div class="product-quick-view">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                </div>
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>$255.00</span>
                                    <del>329.99</del>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--products-tab end-->

<!--recently-viewed-products-start-->
<!--recently-viewed-products-end-->

<!--brands-area start-->
<!--brands-area end-->

<!--footer-area start-->
<footer class="footer-area mt-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="company-info">
                    <img src="assets/images/logo.png" alt="logo" />
                    <p>101 E 129th St, East Chicago, <br/> IN 46312, US</p>
                    <p>Phone: 001-1234-88888</p>
                    <p>Email: info.deercreative@gmail.com</p>
                </div>
                <div class="copyright">
                    <p>Copyright 2019 &copy; <a href="#">HakDuck</a>. All rights reserved.</p>
                </div>
                <div class="payment-gateways">
                    <img src="assets/images/footer/p1.png" alt="" />
                    <img src="assets/images/footer/p2.png" alt="" />
                    <img src="assets/images/footer/p3.png" alt="" />
                    <img src="assets/images/footer/p4.png" alt="" />
                    <img src="assets/images/footer/p5.png" alt="" />
                    <img src="assets/images/footer/p6.png" alt="" />
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="fooer-widget">
                    <h4>Find It Fast</h4>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Laptop & Computers</a></li>
                            <li><a href="#">Smart Phone & Tablets</a></li>
                            <li><a href="#">TV & Audio</a></li>
                            <li><a href="#">Cameras & Photography</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Car Electronic & GP5</a></li>
                            <li><a href="#">Accesories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3 mt-sm-45">
                <div class="fooer-widget">
                    <h4>Information</h4>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Find a Store</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Delivery information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Gift Cards</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3 mt-sm-45">
                <div class="fooer-widget">
                    <h4>Customer Care</h4>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">Returns / Exchange</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Product Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-45">
                <div class="footer-widget">
                    <div class="subscribe-form">
                        <h3>Sign Up to <strong>Newsletter</strong></h3>
                        <p>Subscribe our newsletter gor get notification about information discount.</p>
                        <input type="text" placeholder="Your email address" />
                        <button>Subscribe</button>
                    </div>
                    <div class="social-icons style-2">
                        <strong>GET IN TOUCH !</strong>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer-area end-->

<!-- modernizr js -->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- jquery-3.3.1 version -->
<script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
<!-- bootstra.min js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- mmenu js -->
<script src="assets/js/jquery.mmenu.js"></script>
<!-- easing js -->
<script src="assets/js/jquery.easing.min.js"></script>
<!-- perfect-scrollbar js -->
<script src="assets/js/perfect-scrollbar.min.js"></script>
<!---slick-js-->
<script src="assets/js/slick.min.js"></script>
<!---letteranimation-js-->
<script src="assets/js/letteranimation.min.js"></script>
<!-- jquery-ui js -->
<script src="assets/js/jquery-ui.min.js"></script>
<!-- jquery.countdown js -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- venobox js -->
<script src="assets/js/venobox.min.js"></script>
<!-- plugins js -->
<script src="assets/js/plugins.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>

<!-- Modal -->
<div class="modal fade" id="basic1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="getProductDetails">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="modal fade" id="cartSuccess" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                    </div>

                    <div class="modal-body">

                        <div class="thank-you-pop">
                            <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                            <h1>Item Added to Cart</h1>
                            <p></p>
                            <div>
                                <a href="{{url('/')}}" class="btn btn-info">CONTINUE SHOPPING</a>

                                <a href="{{url('cart')}}" class="btn btn-info">VIEW CART</a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .thank-you-pop{
        width:100%;
        padding:20px;
        text-align:center;
    }
    .thank-you-pop img{
        width:76px;
        height:auto;
        margin:0 auto;
        display:block;
        margin-bottom:25px;
    }

    .thank-you-pop h1{
        font-size: 42px;
        margin-bottom: 25px;
        color:#5C5C5C;
    }
    .thank-you-pop p{
        font-size: 20px;
        margin-bottom: 27px;
        color:#5C5C5C;
    }
    .thank-you-pop h3.cupon-pop{
        font-size: 25px;
        margin-bottom: 40px;
        color:#222;
        display:inline-block;
        text-align:center;
        padding:10px 20px;
        border:2px dashed #222;
        clear:both;
        font-weight:normal;
    }
    .thank-you-pop h3.cupon-pop span{
        color:#03A9F4;
    }
    .thank-you-pop a{
        display: inline-block;
        margin: 0 auto;
        padding: 9px 20px;
        color: #fff;
        text-transform: uppercase;
        font-size: 14px;
        background-color: #8BC34A;
        border-radius: 17px;
    }
    .thank-you-pop a i{
        margin-right:5px;
        color:#fff;
    }
    #ignismyModal .modal-header{
        border:0px;
    }
    /*--thank you pop ends here--*/

</style>

</body>
    <script>
        $(document).on('click','.view',function () {
        $value = $(this).attr('id');
        $.ajax({
        type:"get",
        url:"{{url('getProductDetail')}}",
        data:{'product_id':$value},
        success:function (data) {
        $('#getProductDetails').html(data);
    },
        error:function (error) {
        console.log(error)
        alert('error')

    }

    });
    });
            $('#productDetailForm').on('submit',function (event) {
            event.preventDefault();
            productId = $('#productDetail').val();
            $.ajax({
            type:"post",
            url:"{{route('cart.store')}}",
            data:{
            "_token": "{{ csrf_token() }}",
            productId:productId},
            success:function (data) {
            $('#cartSuccess').modal('show');
        },
            error:function (error) {
            console.log(error)
            alert('error')

        }

        });
        });
</script>
<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:19:20 GMT -->
</html>
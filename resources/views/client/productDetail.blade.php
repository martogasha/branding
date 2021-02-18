<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:06 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HakDuck - Product Details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.html">
    <link rel="apple-touch-icon" href="icon.html">
    <!-- Place favicon.ico in the root directory -->

    <!-- bootstrap v4.0.0 -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- fontawesome-icons css -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- themify-icons css -->
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <!-- elegant css -->
    <link rel="stylesheet" href="{{asset('assets/css/elegant.css')}}">
    <!-- elegant css -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.mmenu.css')}}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
    <!-- venobox css -->
    <link rel="stylesheet" href="{{asset('assets/css/venobox.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!-- slick-theme css -->
    <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
    <!-- cssanimation css -->
    <link rel="stylesheet" href="{{asset('assets/css/cssanimation.min.css')}}" />
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
    <!-- helper css -->
    <link rel="stylesheet" href="{{asset('assets/css/helper.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--header-area start-->
<header class="header-area pb-22">
    <div class="desktop-header">
   @include('clientPartial.nav')
    <!--breadcrumb-area start-->
    <div class="breadcrumb-area mt-25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home <i class="fa fa-angle-right"></i></a></li>
                            <li>{{$detail->product_name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumb-area end-->
</header>
<!--header-area end-->

<!--product-details-area start-->
<div class="product-details-area mt-20">
    <div class="container-fluid">
        <div class="product-details">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="tab-content">
                        <div id="product-1" class="tab-pane fade in show active">
                            <div class="product-details-thumb">
                                <a class="venobox" data-gall="myGallery" href="{{asset('uploads/product/'.$detail->product_image)}}"><i class="fa fa-search-plus"></i></a>
                                <img src="{{asset('uploads/product/'.$detail->product_image)}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-sm-50">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="product-details-desc">
                                <h2>{{$detail->product_name}}</h2>
                                <ul>
                                    <li>1.6 GHz dual-core Intel Core i5 (Turbo Boost up to 2.7 GHz) with 3 MB shared L3 cache 8 GB of 1600 MHz LPDDR3 RAM; 128 GB PCIe-based flash storage</li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="product-action stuck text-left">
                                <div class="free-delivery">
                                    <a href="#"><i class="ti-truck"></i> Free Delivery</a>
                                </div>
                                <div class="product-price-rating">
                                    <div>
                                        <del>Ksh {{$detail->product_cancel_price}}</del>
                                    </div>
                                    <span>Ksh {{$detail->product_price}}</span>
                                    <div class="pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-quantity mt-15">
                                    <label>Quatity:</label>
                                    <input type="number" value="1" />
                                </div>
                                <div class="add-to-get mt-50">
                                    <form id="productDetailForm">
                                        <input type="hidden" value="{{$detail->id}}" name="productId" id="productDetail">
                                        <button type="submit" class="btn btn-info">ADD TO CART</button>
                                        <a href="{{url('/')}}" class="btn btn-info">CONTINUE SHOPPING</a>

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
<!--product-details-area end-->

<!--product-specifications-area start-->
<div class="product-review-area mt-45">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs product-review-nav">
                    <li><a data-toggle="tab" href="#reviews">Reviews (02)</a></li>
                </ul>
                <div class="tab-content">
                    <div id="reviews" class="tab-pane fade active">
                        <div class="blog-comments product-comments mt-0">
                            <ul class="list-none">
                                <li>
                                    <div class="comment-avatar text-center">
                                        <img src="{{asset('assets/images/blog/comment/4.jpg')}}" alt="" />
                                        <div class="product-rating mt-10">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="comment-desc">
                                        <span>27 Aug 2019</span>
                                        <h4>Jenney Kelley</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment-avatar text-center">
                                        <img src="{{asset('assets/images/blog/comment/5.jpg')}}" alt="" />
                                        <div class="product-rating mt-10">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="comment-desc">
                                        <span>27 Aug 2019</span>
                                        <h4>Brandon William</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-comment-form product-comment-form mt-05">
                            <h4><span>Add Review</span></h4>
                            <div class="row mt-30">
                                <div class="col-sm-6 single-form">
                                    <input type="text" placeholder="Name" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Email" />
                                </div>
                                <div class="col-sm-12">
                                    <div class="product-rating style-2">
                                        <span>Your Rating:</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <textarea placeholder="Messages"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn-common mt-25">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product-specifications-area end-->

<!--products-area start-->
<div class="best-sellers mt-45">
    <div class="container-fluid fix">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Related Products</h3>
                </div>
            </div>
        </div>
        <div class="row four-items cv-visible">
            <div class="col-lg-3">
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Aquaracer</a></small>
                        <h4><a href="#">iPATROL RILEY - WiFi Enabled Mobilized Home Monitoring Robot</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="assets/images/products/shop/1.jpg" alt="" /></a>
                        <div class="downsale"><span>-</span>$35</div>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
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
                        <small><a href="#">Camera</a></small>
                        <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="assets/images/products/shop/3.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$345.00</span>
                            <del>429.99</del>
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
                        <small><a href="#">Aquaracer</a></small>
                        <h4><a href="#">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="assets/images/products/shop/5.jpg" alt="" /></a>
                        <div class="downsale"><span>-</span>$35</div>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
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
                        <small><a href="#">Camera</a></small>
                        <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="assets/images/products/shop/3.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$345.00</span>
                            <del>429.99</del>
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
<!--products-area end-->

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
    <!-- Modal -->
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
</footer>
<!--footer-area end-->

<!-- modernizr js -->
<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<!-- jquery-3.3.1 version -->
<script src="{{asset('assets/js/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- bootstra.min js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- mmenu js -->
<script src="{{asset('assets/js/jquery.mmenu.js')}}"></script>
<!-- easing js -->
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></scri                                        <input type="hidden" value="{{$detail->id}}" name="productId" id="productDetail">
pt>
<!---slick-js-->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!---letteranimation-js-->
<script src="{{asset('assets/js/letteranimation.min.js')}}"></script>
<!-- jquery-ui js -->
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<!-- jquery.countdown js -->
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<!-- venobox js -->
<script src="{{asset('assets/js/venobox.min.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
<script>
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

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:21 GMT -->
</html>

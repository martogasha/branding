<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Davix - Register</title>
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
<header class="header-area pb-22">
    <div class="desktop-header">
    @include('clientPartial.nav')
    <!--breadcrumb-area start-->
        <div class="breadcrumb-area mt-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home <i class="fa fa-angle-right"></i></a></li>
                                <li>Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb-area end-->
</header>
<!--header-area end-->

@include('flash-message')
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Register</div>
            </div>

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form action="{{route('userRegister')}}" method="post">
                    @csrf
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="first_name" value="" placeholder="First Name" required>
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="last_name" value="" placeholder="Last Name" required>
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="email" class="form-control" name="email" value="" placeholder="Email" required>
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="phone" value="" placeholder="Phone" required>
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
                    </div>



                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                            </label>
                        </div>
                    </div>


                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <button type="submit" class="btn btn-success">Register</button>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Already have an account!
                                <a href="{{url('Login')}}">Login Here</a>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
</div>

<!--footer-area start-->
<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="company-info">
                        <img src="assets/images/logo.png" alt="logo" />
                        <p>101 E 129th St, East Chicago, <br/> IN 46312, US</p>
                        <p>Phone: 001-1234-88888</p>
                        <p>Email: info.deercreative@gmail.com</p>
                    </div>
                    <div class="social-icons style-2 style-4">
                        <strong>GET IN TOUCH !</strong>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-8 mt-sm-45">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="fooer-widget">
                                <h4>Find It Fast</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="#">Laptop $ Computers</a></li>
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
                        <div class="col-lg-4 col-sm-6">
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
                        <div class="col-lg-4 col-sm-6 mt-sm-35">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--subscribe-area-start-->
    <div class="subscribe-area pd-25">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="subscribe-text">
                        <h3>Sign Up to <strong>Newsletter</strong></h3>
                        <p>Subscribe our newsletter gor get notification about information discount.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="subscribe-form style-3">
                        <input type="text" placeholder="Your email address" />
                        <button>Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--subscribe-area-end-->

    <!--copyright-area start-->
    <div class="copyright-area pd-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright style-2">
                        <p>Copyright 2019 &copy; <a href="#">HakDuck</a>. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="payment-gateways pull-right">
                        <img src="assets/images/footer/p1.png" alt="" />
                        <img src="assets/images/footer/p2.png" alt="" />
                        <img src="assets/images/footer/p3.png" alt="" />
                        <img src="assets/images/footer/p4.png" alt="" />
                        <img src="assets/images/footer/p5.png" alt="" />
                        <img src="assets/images/footer/p6.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--copyright-area end-->
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

</body>

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:26 GMT -->
</html>

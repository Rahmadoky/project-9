<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/style.css" type="text/css">
</head>
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <a href="./index.html"><img src="{{ url('public') }}/assets/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <nav class="header__menu">
                    <ul>
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li><a href="{{ url('/shop') }}">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('product-details') }}">Product Details</a></li>
                                <li><a href="{{ url('/shop-cart') }}">Shop Cart</a></li>
                                <li><a href="{{ url('checkout') }}">Checkout</a></li>
                                <li><a href="{{ url('blog-details') }}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__right">
                    <div class="header__right__auth">
                        <a href="{{ url('login') }}">Login</a>
                        <a href="{{ url('signup') }}">Register</a>
                    </div>
                    <ul class="header__right__widget">
                        <li><span class="icon_search search-switch"></span></li>
                        <li><a href="#"><span class="icon_heart_alt"></span>
                            <div class="tip">2</div>
                        </a></li>
                        <li><a href="#"><span class="icon_bag_alt"></span>
                            <div class="tip">2</div>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="{{ url('public/assets') }}/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    {{-- @include('layout.section.header') --}}
    <!-- Head"er Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic large__item set-bg" data-setbg="{{ url('public/assets') }}/img/blog/blog-1.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">No Bad Blood! The Reason Why Tamr Judge Finally Made Up With...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ url('public/assets') }}/img/blog/blog-7.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Pot Party! See Farrah Abraham Flaunt Smoking Body At...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ url('public/assets') }}/img/blog/blog-9.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">CMT Awards 2019 Red Carpet Arrivals Carrie Underwood, Sheryl...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ url('public/assets') }}/img/blog/blog-2.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Amf Cannes Red Carpet Celebrities Kendall Jenner, Pamela...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ url('public/assets') }}/img/blog/blog-4.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Ireland Baldwin Shows Off Trendy Ilse Valfre Tattoo At Stagecoach...</a>
                            </h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ url('public/assets') }}/img/blog/blog-8.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Kim Kardashian Steps Out In Paris Wearing Shocking Sparkly...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ url('public/assets') }}/img/blog/blog-10.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">A-list Battle! Angelina Jolie & Lady Gaga Fighting Over Who...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ url('public/assets') }}/img/blog/blog-3.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Gigi Hadid, Rita Ora, Serena & Other Hot Celebs Stun At 2019...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ url('public/assets') }}/img/blog/blog-5.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Billboard Music Awards: Best, Worst & Wackiest Dresses On The...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic large__item set-bg" data-setbg="{{ url('public/assets') }}/img/blog/blog-6.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Stephanie Pratt Busts Out Of Teeny Black Bikini During Hawaii...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="#" class="primary-btn load-btn">Load more posts</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Instagram Begin -->
    <div class="instagram">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{ url('public/assets') }}/img/instagram/insta-1.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{ url('public/assets') }}/img/instagram/insta-2.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{ url('public/assets') }}/img/instagram/insta-3.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{ url('public/assets') }}/img/instagram/insta-4.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{ url('public/assets') }}/img/instagram/insta-5.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{ url('public/assets') }}/img/instagram/insta-6.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram End -->

    <!-- Footer Section Begin -->
   @include('layout.section.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{ url('public/assets') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('public/assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('public/assets') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ url('public/assets') }}/js/jquery-ui.min.js"></script>
    <script src="{{ url('public/assets') }}/js/mixitup.min.js"></script>
    <script src="{{ url('public/assets') }}/js/jquery.countdown.min.js"></script>
    <script src="{{ url('public/assets') }}/js/jquery.slicknav.js"></script>
    <script src="{{ url('public/assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ url('public/assets') }}/js/jquery.nicescroll.min.js"></script>
    <script src="{{ url('public/assets') }}/js/main.js"></script>
</body>

</html>
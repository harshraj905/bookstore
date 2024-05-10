<?php include_once "masterheader.php"; ?>

<body>
    <?php include_once "navbar-2.php"; ?>
        <div class="site-mobile-menu">
            <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
                <div class="container">
                    <div class="row align-items-sm-end align-items-center">
                        <div class="col-md-4 col-7">
                            <a href="index.php" class="site-brand">
                                <img src="image/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-5 order-3 order-md-2">
                            <nav class="category-nav   ">
                                <?php include_once "category.php"; ?>
                            </nav>
                        </div>
                        <div class="col-md-3 col-5  order-md-3 text-right">
                            <div class="mobile-header-btns header-top-widget">
                                <ul class="header-links">
                                    <li class="sin-link">
                                        <a href="cart.php" class="cart-link link-icon"><i class='bx bx-cart' ></i></a>
                                    </li>
                                    <li class="sin-link">
                                        <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i class='bx bx-menu'></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--Off Canvas Navigation Start-->
            <aside class="off-canvas-wrapper">
                <div class="btn-close-off-canvas">
                    <i class='bx bx-x'></i>
                </div>
                <div class="off-canvas-inner">
                    <!-- search box start -->
                    <div class="search-box offcanvas">
                        <form>
                            <input type="text" placeholder="Search Here">
                            <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                    <!-- search box end -->
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav class="off-canvas-nav">
                            <ul class="mobile-menu main-mobile-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li> <a href="index.php">Home One</a></li>
                                        <li> <a href="index-2.php">Home Two</a></li>
                                        <li> <a href="index-3.php">Home Three</a></li>
                                        <li> <a href="index-4.php">Home Four</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog Grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.php">Full Widh (Default)</a></li>
                                                <li><a href="blog-left-sidebar.php">left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.php">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog List</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-list.php">Full Widh (Default)</a></li>
                                                <li><a href="blog-list-left-sidebar.php">left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.php">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog Details</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details.php">Image Format (Default)</a></li>
                                                <li><a href="blog-details-gallery.php">Gallery Format</a></li>
                                                <li><a href="blog-details-audio.php">Audio Format</a></li>
                                                <li><a href="blog-details-video.php">Video Format</a></li>
                                                <li><a href="blog-details-left-sidebar.php">left Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-grid.php">Fullwidth</a></li>
                                                <li><a href="shop-grid-left-sidebar.php">left Sidebar</a></li>
                                                <li><a href="shop-grid-right-sidebar.php">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop List</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-list.php">Fullwidth</a></li>
                                                <li><a href="shop-list-left-sidebar.php">left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.php">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Details 1</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.php">Product Details Page</a></li>
                                                <li><a href="product-details-affiliate.php">Product Details
                                                        Affiliate</a></li>
                                                <li><a href="product-details-group.php">Product Details Group</a></li>
                                                <li><a href="product-details-variable.php">Product Details
                                                        Variables</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Details 2</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details-left-thumbnail.php">left Thumbnail</a>
                                                </li>
                                                <li><a href="product-details-right-thumbnail.php">Right Thumbnail</a>
                                                </li>
                                                <li><a href="product-details-left-gallery.php">Left Gallery</a></li>
                                                <li><a href="product-details-right-gallery.php">Right Gallery</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.php">Cart</a></li>
										<li><a href="checkout.php">Checkout</a></li>
										<li><a href="compare.php">Compare</a></li>
										<li><a href="wishlist.php">Wishlist</a></li>
										<li><a href="login-register.php">Login Register</a></li>
										<li><a href="my-account.php">My Account</a></li>
										<li><a href="order-complete.php">Order Complete</a></li>
										<li><a href="faq.php">Faq</a></li>
										<li><a href="contact-2.php">contact 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                    <nav class="off-canvas-nav">
                        <ul class="mobile-menu menu-block-2">
                            <li class="menu-item-has-children">
                                <a href="#">Currency - USD $ <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li> <a href="cart.php">USD $</a></li>
                                    <li> <a href="checkout.php">EUR €</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Lang - Eng<i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li>Eng</li>
                                    <li>Ban</li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">My Account <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="">My Account</a></li>
                                    <li><a href="">Order History</a></li>
                                    <li><a href="">Transactions</a></li>
                                    <li><a href="">Downloads</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="off-canvas-bottom">
                        <div class="contact-list mb--10">
                            <a href="" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
                            <a href="" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
                        </div>
                        <div class="off-canvas-social">
                            <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </aside>
            <!--Off Canvas Navigation End-->
        </div>
        <div class="sticky-init fixed-header common-sticky">
            <div class="container d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <a href="index.php" class="site-brand">
                            <img src="image/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="main-navigation flex-lg-right">
                            <ul class="main-menu menu-right ">
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0)">Home <i
                                            class="fas fa-chevron-down dropdown-arrow"></i></a>
                                    <ul class="sub-menu">
                                        <li> <a href="index.php">Home One</a></li>
                                        <li> <a href="index-2.php">Home Two</a></li>
                                        <li> <a href="index-3.php">Home Three</a></li>
                                        <li> <a href="index-4.php">Home Four</a></li>
                                    </ul>
                                </li>
                                <!-- Shop -->
                                <li class="menu-item has-children mega-menu">
                                    <a href="javascript:void(0)">shop <i
                                            class="fas fa-chevron-down dropdown-arrow"></i></a>
                                    <ul class="sub-menu four-column">
                                        <li class="cus-col-25">
                                            <h3 class="menu-title"><a href="javascript:void(0)">Shop Grid </a></h3>
                                            <ul class="mega-single-block">
                                                <li><a href="shop-grid.php">Fullwidth</a></li>
                                                <li><a href="shop-grid-left-sidebar.php">left Sidebar</a></li>
                                                <li><a href="shop-grid-right-sidebar.php">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="cus-col-25">
                                            <h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
                                            <ul class="mega-single-block">
                                                <li><a href="shop-list.php">Fullwidth</a></li>
                                                <li><a href="shop-list-left-sidebar.php">left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.php">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="cus-col-25">
                                            <h3 class="menu-title"> <a href="javascript:void(0)">Product Details 1</a>
                                            </h3>
                                            <ul class="mega-single-block">
                                                <li><a href="product-details.php">Product Details Page</a></li>
                                                <li><a href="product-details-affiliate.php">Product Details
                                                        Affiliate</a></li>
                                                <li><a href="product-details-group.php">Product Details Group</a></li>
                                                <li><a href="product-details-variable.php">Product Details
                                                        Variables</a></li>
                                            </ul>
                                        </li>
                                        <li class="cus-col-25">
                                            <h3 class="menu-title"><a href="javascript:void(0)">Product Details 2</a>
                                            </h3>
                                            <ul class="mega-single-block">
                                                <li><a href="product-details-left-thumbnail.php">left Thumbnail</a>
                                                </li>
                                                <li><a href="product-details-right-thumbnail.php">Right Thumbnail</a>
                                                </li>
                                                <li><a href="product-details-left-gallery.php">Left Gallery</a></li>
                                                <li><a href="product-details-right-gallery.php">Right Gallery</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Pages -->
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0)">Pages <i
                                            class="fas fa-chevron-down dropdown-arrow"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.php">Cart</a></li>
										<li><a href="checkout.php">Checkout</a></li>
										<li><a href="compare.php">Compare</a></li>
										<li><a href="wishlist.php">Wishlist</a></li>
										<li><a href="login-register.php">Login Register</a></li>
										<li><a href="my-account.php">My Account</a></li>
										<li><a href="order-complete.php">Order Complete</a></li>
										<li><a href="faq.php">Faq</a></li>
										<li><a href="contact-2.php">contact 02</a></li>
                                    </ul>
                                </li>
                                <!-- Blog -->
                                <li class="menu-item has-children mega-menu">
                                    <a href="javascript:void(0)">Blog <i
                                            class="fas fa-chevron-down dropdown-arrow"></i></a>
                                    <ul class="sub-menu three-column">
                                        <li class="cus-col-33">
                                            <h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
                                            <ul class="mega-single-block">
                                                <li><a href="blog.php">Full Widh (Default)</a></li>
                                                <li><a href="blog-left-sidebar.php">left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.php">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="cus-col-33">
                                            <h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
                                            <ul class="mega-single-block">
                                                <!-- <li><a href="blog-list.php">Full Widh (Default)</a></li> -->
                                                <li><a href="blog-list-left-sidebar.php">left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.php">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="cus-col-33">
                                            <h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a></h3>
                                            <ul class="mega-single-block">
                                                <li><a href="blog-details.php">Image Format (Default)</a></li>
                                                <li><a href="blog-details-gallery.php">Gallery Format</a></li>
                                                <li><a href="blog-details-audio.php">Audio Format</a></li>
                                                <li><a href="blog-details-video.php">Video Format</a></li>
                                                <li><a href="blog-details-left-sidebar.php">left Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Contact 02</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- contact area Start -->
        <main class="contact_area inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact_form">
                            <h3 class="ct_title">Send Us a Message</h3>
                            <form id="contact-form" action="php/mail.php" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Name <span class="required">*</span></label>
                                            <input type="text" id="con_name" name="con_name" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="required">*</span></label>
                                            <input type="email" id="con_email" name="con_email" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea id="con_message" name="con_message"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-btn">
                                            <button type="submit" value="submit" id="submit" class="btn btn-black w-100"
                                                name="submit">send</button>
                                        </div>
                                        <div class="form__output"></div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235014.15049961975!2d72.5797426!3d23.0202434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1715236764862!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                </div>
            </div>
        </main>
        <!-- contact area End -->
        <div class="contact-bottom-info inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row">
                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-phone"></i></span>
                            <div class="content">
                                <h3 class="title">Contact By Phone</h3>
                                <p>1800.123.4569<br> 1800.123.7777</p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->

                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-envelope"></i></span>
                            <div class="content">
                                <h3 class="title">Contact By Email</h3>
                                <p>contact@yoursite.com <br> info@lawyersattorneys.com</p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->

                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                            <div class="content">
                                <h3 class="title">Come To See Us</h3>
                                <p>7/135 Saint St. London <br> 1130/5 Louis III St. New York</p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->

                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-users"></i></span>
                            <div class="content">
                                <h3 class="title">Pustok Social</h3>
                                <ul class="social-list list-inline">
                                    <li class="single-social facebook"><a href=""><i class="ion ion-social-facebook"></i></a></li>
                                    <li class="single-social twitter"><a href=""><i class="ion ion-social-twitter"></i></a></li>
                                    <li class="single-social google"><a href=""><i class="ion ion-social-googleplus-outline"></i></a></li>
                                    <li class="single-social youtube"><a href=""><i class="ion ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->
                </div>
            </div>
        </div>
    </div>
    <!--=================================
  Brands Slider
===================================== -->
    <section class="section-margin">
        <h2 class="sr-only">Brand Slider</h2>
        <div class="container">
            <div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
                <div class="single-slide">
                    <img src="image/others/brand-1.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-2.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-3.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-4.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-5.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-6.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-1.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Footer Area
===================================== -->
    <?php include_once "masterfooter.php"; ?>
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script>
    <script src="js/custom.js"></script>
</body>

</php>
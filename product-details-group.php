<?php include_once "masterheader.php"; ?>

<body>
	<?php include_once "navbar.php"; ?>
			<div class="header-bottom pb--10">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<nav class="category-nav   ">
								<?php include_once "category.php"; ?>
							</nav>
						</div>
						<div class="col-lg-5">
							<div class="header-search-block">
								<input type="text" placeholder="Search entire store here">
								<button>Search</button>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="main-navigation flex-lg-right">
								<div class="cart-widget">
									<div class="login-block">
										<a href="login-register.php" class="font-weight-bold">Login</a> <br>
										<span>or</span><a href="login-register.php">Register</a>
									</div>
									<div class="cart-block">
										<div class="cart-total">
											<span class="text-number">
												1
											</span>
											<span class="text-item">
												Shopping Cart
											</span>
											<span class="price">
												₹0.00
												<i class="fas fa-chevron-down"></i>
											</span>
										</div>
										<div class="cart-dropdown-block">
											<div class=" single-cart-block ">
												<div class="cart-product">
													<a href="product-details.php" class="image">
														<img src="image/products/cart-product-1.jpg" alt="">
													</a>
													<div class="content">
														<h3 class="title"><a href="product-details.php">Kodak PIXPRO
																Astro Zoom AZ421 16 MP</a></h3>
														<p class="price"><span class="qty">1 ×</span> ₹87.34</p>
														<button class="cross-btn"><i class="fas fa-times"></i></button>
													</div>
												</div>
											</div>
											<div class=" single-cart-block ">
												<div class="btn-block">
													<a href="cart.php" class="btn">View Cart <i
															class="fas fa-chevron-right"></i></a>
													<a href="checkout.php" class="btn btn--primary">Check Out <i
															class="fas fa-chevron-right"></i></a>
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
								<div>
									<a href="javascript:void(0)" class="category-trigger"><i
											class="fa fa-bars"></i>Browse
										categories</a>
									<ul class="category-menu">
										<li class="cat-item has-children">
											<a href="#">Arts & Photography</a>
											<ul class="sub-menu">
												<li><a href="#">Bags & Cases</a></li>
												<li><a href="#">Binoculars & Scopes</a></li>
												<li><a href="#">Digital Cameras</a></li>
												<li><a href="#">Film Photography</a></li>
												<li><a href="#">Lighting & Studio</a></li>
											</ul>
										</li>
										<li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
											<ul class="sub-menu">
												<li class="single-block">
													<h3 class="title">WHEEL SIMULATORS</h3>
													<ul>
														<li><a href="#">Bags & Cases</a></li>
														<li><a href="#">Binoculars & Scopes</a></li>
														<li><a href="#">Digital Cameras</a></li>
														<li><a href="#">Film Photography</a></li>
														<li><a href="#">Lighting & Studio</a></li>
													</ul>
												</li>
												<li class="single-block">
													<h3 class="title">WHEEL SIMULATORS</h3>
													<ul>
														<li><a href="#">Bags & Cases</a></li>
														<li><a href="#">Binoculars & Scopes</a></li>
														<li><a href="#">Digital Cameras</a></li>
														<li><a href="#">Film Photography</a></li>
														<li><a href="#">Lighting & Studio</a></li>
													</ul>
												</li>
												<li class="single-block">
													<h3 class="title">WHEEL SIMULATORS</h3>
													<ul>
														<li><a href="#">Bags & Cases</a></li>
														<li><a href="#">Binoculars & Scopes</a></li>
														<li><a href="#">Digital Cameras</a></li>
														<li><a href="#">Film Photography</a></li>
														<li><a href="#">Lighting & Studio</a></li>
													</ul>
												</li>
												<li class="single-block">
													<h3 class="title">WHEEL SIMULATORS</h3>
													<ul>
														<li><a href="#">Bags & Cases</a></li>
														<li><a href="#">Binoculars & Scopes</a></li>
														<li><a href="#">Digital Cameras</a></li>
														<li><a href="#">Film Photography</a></li>
														<li><a href="#">Lighting & Studio</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Business & Money</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Calendars</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Children's Books</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Comics</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item"><a href="#">Perfomance Filters</a></li>
										<li class="cat-item has-children"><a href="#">Cookbooks</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item "><a href="#">Accessories</a></li>
										<li class="cat-item "><a href="#">Education</a></li>
										<li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
										<li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
												Categories</a></li>
									</ul>
								</div>
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
							<li class="breadcrumb-item active">Product Details</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main class=" inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row mb--60">
					<div class="col-lg-5 mb--30">
						<!-- Product Details Slider Big Image-->
						<div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
							<div class="single-slide">
								<img src="image/products/product-details-1.jpg" alt="">
							</div>
							<div class="single-slide">
								<img src="image/products/product-details-2.jpg" alt="">
							</div>
							<div class="single-slide">
								<img src="image/products/product-details-3.jpg" alt="">
							</div>
							<div class="single-slide">
								<img src="image/products/product-details-4.jpg" alt="">
							</div>
							<div class="single-slide">
								<img src="image/products/product-details-5.jpg" alt="">
							</div>
						</div>
						<!-- Product Details Slider Nav -->
						<div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two" data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
							<div class="single-slide">
								<img src="image/products/product-details-1.jpg" alt="">
							</div>
							<div class="single-slide">
								<img src="image/products/product-details-2.jpg" alt="">
							</div>
							<div class="single-slide">
								<img src="image/products/product-details-3.jpg" alt="">
							</div>
							<div class="single-slide">
								<img src="image/products/product-details-4.jpg" alt="">
							</div>
							<div class="single-slide">
								<img src="image/products/product-details-5.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="product-details-info pl-lg--30">
							<p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
							<h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
							<ul class="list-unstyled">
								<li>Ex Tax: <span class="list-value"> ₹60.24</span></li>
								<li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
								<li>Product Code: <span class="list-value"> model1</span></li>
								<li>Reward Points: <span class="list-value"> 200</span></li>
								<li>Availability: <span class="list-value"> In Stock</span></li>
							</ul>
							<div class="price-block">
								<span class="price-new">₹73.79</span>
								<del class="price-old">₹91.86</del>
							</div>
							<div class="rating-widget">
								<div class="rating-block">
									<span class="fas fa-star star_on"></span>
									<span class="fas fa-star star_on"></span>
									<span class="fas fa-star star_on"></span>
									<span class="fas fa-star star_on"></span>
									<span class="fas fa-star "></span>
								</div>
								<div class="review-widget">
									<a href="">(1 Reviews)</a> <span>|</span>
									<a href="">Write a review</a>
								</div>
							</div>
							<article class="product-details-article">
								<h4 class="sr-only">Product Summery</h4>
								<p>Long printed dress with thin adjustable straps. V-neckline and wiring under the Dust
									with ruffles at the bottom of the
									dress.</p>
							</article>
							<div class="product-group-block">
								<ul class="product-group">
									<li class="single-product">
										<div class="product-image">
											<img src="image/products/product-1.jpg" alt="">
										</div>
										<h5 class="product-title">Katopeno Altuni</h5>
										<div class="count-input-block">
											<input type="number" class="form-control text-center" value="1">
											<div class="count-input-btns">
												<button class="inc-ammount count-btn"><i
														class="zmdi zmdi-chevron-up"></i></button>
												<button class="dec-ammount count-btn"><i
														class="zmdi zmdi-chevron-down"></i></button>
											</div>
										</div>
										<span class="price mt-0">$500.00</span>
										<div class="add-cart-btn">
											<a href="cart.php" class="btn btn-outlined--primary"><span
													class="plus-icon">+</span>Add to Cart</a>
										</div>
									</li>
									<li class="single-product">
										<div class="product-image">
											<img src="image/products/product-1.jpg" alt="">
										</div>
										<h5 class="product-title">Katopeno Altuni</h5>
										<div class="count-input-block">
											<input type="number" class="form-control text-center" value="1">
											<div class="count-input-btns">
												<button class="inc-ammount count-btn"><i
														class="zmdi zmdi-chevron-up"></i></button>
												<button class="dec-ammount count-btn"><i
														class="zmdi zmdi-chevron-down"></i></button>
											</div>
										</div>
										<span class="price mt-0">$500.00</span>
										<div class="add-cart-btn">
											<a href="" class="btn btn-outlined--primary"><span
													class="plus-icon">+</span>Add to Cart</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="sb-custom-tab review-tab section-padding">
					<ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="tab1" data-bs-toggle="tab" href="#tab-1" role="tab"
								aria-controls="tab-1" aria-selected="true">
								DESCRIPTION
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="tab2" data-bs-toggle="tab" href="#tab-2" role="tab"
								aria-controls="tab-2" aria-selected="true">
								REVIEWS (1)
							</a>
						</li>
					</ul>
					<div class="tab-content space-db--20" id="myTabContent">
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
							<article class="review-article">
								<h1 class="sr-only">Tab Article</h1>
								<p>Fashion has been creating well-designed collections since 2010. The brand offers
									feminine designs delivering
									stylish
									separates and statement dresses which have since evolved into a full ready-to-wear
									collection in which every
									item is
									a
									vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful
									elegance and unmistakable
									signature
									style. All the beautiful pieces are made in Italy and manufactured with the greatest
									attention. Now Fashion
									extends
									to
									a range of accessories including shoes, hats, belts and more!</p>
							</article>
						</div>
						<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
							<div class="review-wrapper">
								<h2 class="title-lg mb--20">1 REVIEW FOR AUCTOR GRAVIDA ENIM</h2>
								<div class="review-comment mb--20">
									<div class="avatar">
										<img src="image/icon/author-logo.png" alt="">
									</div>
									<div class="text">
										<div class="rating-block mb--15">
											<span class="ion-android-star-outline star_on"></span>
											<span class="ion-android-star-outline star_on"></span>
											<span class="ion-android-star-outline star_on"></span>
											<span class="ion-android-star-outline"></span>
											<span class="ion-android-star-outline"></span>
										</div>
										<h6 class="author">ADMIN – <span class="font-weight-400">March 23, 2015</span>
										</h6>
										<p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio
											quis mi.</p>
									</div>
								</div>
								<h2 class="title-lg mb--20 pt--15">ADD A REVIEW</h2>
								<div class="rating-row pt-2">
									<p class="d-block">Your Rating</p>
									<span class="rating-widget-block">
										<input type="radio" name="star" id="star1">
										<label for="star1"></label>
										<input type="radio" name="star" id="star2">
										<label for="star2"></label>
										<input type="radio" name="star" id="star3">
										<label for="star3"></label>
										<input type="radio" name="star" id="star4">
										<label for="star4"></label>
										<input type="radio" name="star" id="star5">
										<label for="star5"></label>
									</span>
									<form action="./" class="mt--15 site-form ">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label for="message">Comment</label>
													<textarea name="message" id="message" cols="30" rows="10"
														class="form-control"></textarea>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<label for="name">Name *</label>
													<input type="text" id="name" class="form-control">
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<label for="email">Email *</label>
													<input type="text" id="email" class="form-control">
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<label for="website">Website</label>
													<input type="text" id="website" class="form-control">
												</div>
											</div>
											<div class="col-lg-4">
												<div class="submit-btn">
													<a href="#" class="btn btn-black">Post Comment</a>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="tab-product-details">
  <div class="brand">
    <img src="image/others/review-tab-product-details.jpg" alt="">
  </div>
  <h5 class="meta">Reference <span class="small-text">demo_5</span></h5>
  <h5 class="meta">In stock <span class="small-text">297 Items</span></h5>
  <section class="product-features">
    <h3 class="title">Data sheet</h3>
    <dl class="data-sheet">
      <dt class="name">Compositions</dt>
      <dd class="value">Viscose</dd>
      <dt class="name">Styles</dt>
      <dd class="value">Casual</dd>
      <dt class="name">Properties</dt>
      <dd class="value">Maxi Dress</dd>
    </dl>
  </section>
</div> -->
			</div>
			<!--=================================
    RELATED PRODUCTS BOOKS
===================================== -->
			<section class="">
				<div class="container">
					<div class="section-title section-title--bordered">
						<h2>RELATED PRODUCTS</h2>
					</div>
					<div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 4,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} }
            ]'>
						<div class="single-slide">
							<div class="product-card">
								<div class="product-header">
									<a href="" class="author">
										Lpple
									</a>
									<h3><a href="product-details.php">Revolutionize Your BOOK With These Easy-peasy
											Tips</a></h3>
								</div>
								<div class="product-card--body">
									<div class="card-image">
										<img src="image/products/product-10.jpg" alt="">
										<div class="hover-contents">
											<a href="product-details.php" class="hover-image">
												<img src="image/products/product-1.jpg" alt="">
											</a>
											<div class="hover-btns">
												<a href="cart.php" class="single-btn">
													<i class="fas fa-shopping-basket"></i>
												</a>
												<a href="wishlist.php" class="single-btn">
													<i class="fas fa-heart"></i>
												</a>
												<a href="compare.php" class="single-btn">
													<i class="fas fa-random"></i>
												</a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
													class="single-btn">
													<i class="fas fa-eye"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="price-block">
										<span class="price">₹51.20</span>
										<del class="price-old">₹51.20</del>
										<span class="price-discount">20%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="single-slide">
							<div class="product-card">
								<div class="product-header">
									<a href="" class="author">
										Jpple
									</a>
									<h3><a href="product-details.php">Turn Your BOOK Into High Machine</a></h3>
								</div>
								<div class="product-card--body">
									<div class="card-image">
										<img src="image/products/product-2.jpg" alt="">
										<div class="hover-contents">
											<a href="product-details.php" class="hover-image">
												<img src="image/products/product-1.jpg" alt="">
											</a>
											<div class="hover-btns">
												<a href="cart.php" class="single-btn">
													<i class="fas fa-shopping-basket"></i>
												</a>
												<a href="wishlist.php" class="single-btn">
													<i class="fas fa-heart"></i>
												</a>
												<a href="compare.php" class="single-btn">
													<i class="fas fa-random"></i>
												</a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
													class="single-btn">
													<i class="fas fa-eye"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="price-block">
										<span class="price">₹51.20</span>
										<del class="price-old">₹51.20</del>
										<span class="price-discount">20%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="single-slide">
							<div class="product-card">
								<div class="product-header">
									<a href="" class="author">
										Wpple
									</a>
									<h3><a href="product-details.php">3 Ways Create Better BOOK With</a></h3>
								</div>
								<div class="product-card--body">
									<div class="card-image">
										<img src="image/products/product-3.jpg" alt="">
										<div class="hover-contents">
											<a href="product-details.php" class="hover-image">
												<img src="image/products/product-2.jpg" alt="">
											</a>
											<div class="hover-btns">
												<a href="cart.php" class="single-btn">
													<i class="fas fa-shopping-basket"></i>
												</a>
												<a href="wishlist.php" class="single-btn">
													<i class="fas fa-heart"></i>
												</a>
												<a href="compare.php" class="single-btn">
													<i class="fas fa-random"></i>
												</a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
													class="single-btn">
													<i class="fas fa-eye"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="price-block">
										<span class="price">₹51.20</span>
										<del class="price-old">₹51.20</del>
										<span class="price-discount">20%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="single-slide">
							<div class="product-card">
								<div class="product-header">
									<a href="" class="author">
										Epple
									</a>
									<h3><a href="product-details.php">What You Can Learn From Bill Gates</a></h3>
								</div>
								<div class="product-card--body">
									<div class="card-image">
										<img src="image/products/product-5.jpg" alt="">
										<div class="hover-contents">
											<a href="product-details.php" class="hover-image">
												<img src="image/products/product-4.jpg" alt="">
											</a>
											<div class="hover-btns">
												<a href="cart.php" class="single-btn">
													<i class="fas fa-shopping-basket"></i>
												</a>
												<a href="wishlist.php" class="single-btn">
													<i class="fas fa-heart"></i>
												</a>
												<a href="compare.php" class="single-btn">
													<i class="fas fa-random"></i>
												</a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
													class="single-btn">
													<i class="fas fa-eye"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="price-block">
										<span class="price">₹51.20</span>
										<del class="price-old">₹51.20</del>
										<span class="price-discount">20%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="single-slide">
							<div class="product-card">
								<div class="product-header">
									<a href="" class="author">
										Hpple
									</a>
									<h3><a href="product-details.php">Simple Things You To Save BOOK</a></h3>
								</div>
								<div class="product-card--body">
									<div class="card-image">
										<img src="image/products/product-6.jpg" alt="">
										<div class="hover-contents">
											<a href="product-details.php" class="hover-image">
												<img src="image/products/product-4.jpg" alt="">
											</a>
											<div class="hover-btns">
												<a href="cart.php" class="single-btn">
													<i class="fas fa-shopping-basket"></i>
												</a>
												<a href="wishlist.php" class="single-btn">
													<i class="fas fa-heart"></i>
												</a>
												<a href="compare.php" class="single-btn">
													<i class="fas fa-random"></i>
												</a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
													class="single-btn">
													<i class="fas fa-eye"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="price-block">
										<span class="price">₹51.20</span>
										<del class="price-old">₹51.20</del>
										<span class="price-discount">20%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Modal -->
			<div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
            aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="product-details-modal">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Product Details Slider Big Image-->
                                <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "fade": true,
                                    "draggable": false,
                                    "swipe": false,
                                    "asNavFor": ".product-slider-nav"
                                    }'>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-1.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-2.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-3.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-4.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-5.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Product Details Slider Nav -->
                                <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
                                    data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-1.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-2.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-3.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-4.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 mt--30 mt-lg--30">
                                <div class="product-details-info pl-lg--30 ">
                                    <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                                    <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                                    <ul class="list-unstyled">
                                        <li>Ex Tax: <span class="list-value"> ₹60.24</span></li>
                                        <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
                                        <li>Product Code: <span class="list-value"> model1</span></li>
                                        <li>Reward Points: <span class="list-value"> 200</span></li>
                                        <li>Availability: <span class="list-value"> In Stock</span></li>
                                    </ul>
                                    <div class="price-block">
                                        <span class="price-new">₹73.79</span>
                                        <del class="price-old">₹91.86</del>
                                    </div>
                                    <div class="rating-widget">
                                        <div class="rating-block">
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star "></span>
                                        </div>
                                        <div class="review-widget">
                                            <a href="">(1 Reviews)</a> <span>|</span>
                                            <a href="">Write a review</a>
                                        </div>
                                    </div>
                                    <article class="product-details-article">
                                        <h4 class="sr-only">Product Summery</h4>
                                        <p>Long printed dress with thin adjustable straps. V-neckline and wiring under
                                            the Dust with ruffles
                                            at the bottom
                                            of the
                                            dress.</p>
                                    </article>
                                    <div class="add-to-cart-row">
                                        <div class="count-input-block">
                                            <span class="widget-label">Qty</span>
                                            <input type="number" class="form-control text-center" value="1">
                                        </div>
                                        <div class="add-cart-btn">
                                            <a href="" class="btn btn-outlined--primary"><span
                                                    class="plus-icon">+</span>Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="compare-wishlist-row">
                                        <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                                        <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="widget-social-share">
                            <span class="widget-label">Share:</span>
                            <div class="modal-social-share">
                                <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                                <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        	</div>
		</main>
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
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="js/plugins.js"></script>
	<script src="js/ajax-mail.js"></script>
	<script src="js/custom.js"></script>
</body>

</php>
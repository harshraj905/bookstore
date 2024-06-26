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
							<li class="breadcrumb-item active">Blog Details</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<section class="inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 mb--60 mb-lg--0">
						<div class="blog-post post-details mb--50">
							<div class="sb-slick-slider blog-gallery-slider arrow-type-two" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 1,
                                            "arrows": true,
                                            "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
                                            "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"}
                                            }'>
								<div class="single-image">
									<img src="image/others/blog-img-big-1.jpg" alt="">
								</div>
								<div class="single-image">
									<img src="image/others/blog-img-big-2.jpg" alt="">
								</div>
								<div class="single-image">
									<img src="image/others/blog-img-big-3.jpg" alt="">
								</div>
							</div>
							<div class="blog-content mt--30">
								<header>
									<h3 class="blog-title"> How BLOG TITLE Made Me A Better Salesperson</h3>
									<div class="post-meta">
										<span class="post-author">
											<i class="fas fa-user"></i>
											<span class="text-gray">Posted by : </span>
											admin
										</span>
										<span class="post-separator">|</span>
										<span class="post-date">
											<i class="far fa-calendar-alt"></i>
											<span class="text-gray">On : </span>
											March 10, 2015
										</span>
									</div>
								</header>
								<article>
									<h3 class="d-none sr-only">blob-article</h3>
									<p class="p-0">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu
										ex. Aenean posuere
										libero eu augue condimentum
										rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus
										pharetra, bibendum massa
										nec, fermentum
										odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut
										lectus fermentum
										eleifend. Pellentesque
										faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti.</p>
									<blockquote>
										<p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In
											venenatis elit ac
											ultrices convallis.
											Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper
											sit amet ligula ut
											eleifend. Proin dictum
											tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque
											scelerisque.</p>
									</blockquote>
									<p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam
										tempor, sed efficitur ex
										ultrices.
										Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh.
										Phasellus nec lacus id
										arcu facilisis
										elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio,
										nec iaculis lacus sem
										non lorem. Duis
										suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend
										odio, ac fringilla mi
										vehicula nec. Nunc
										vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus
										consectetur, placerat
										suscipit justo
										dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
									<p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim
										vitae lorem non
										mollis. Praesent
										pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl,
										accumsan placerat justo
										ultricies vel.
										Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum
										velit. Curabitur sagittis
										quam quis
										consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget
										neque. Nunc ante quam,
										luctus et neque a,
										interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula
										quam. Suspendisse quis eros
										cursus, viverra
										urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra
										facilisis nunc.
										Curabitur vitae orci id
										nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
								</article>
								<footer class="blog-meta">
									<div> <a href="#">3 comments </a> / TAGS: <a href="#">fashion</a>, <a
											href="#">t-shirt</a>, <a href="#">white</a></div>
								</footer>
							</div>
						</div>
						<div class="share-block mb--50">
							<h3>Share Now</h3>
							<div class="social-links  justify-content-center  mt--10">
								<a href="#" class="single-social social-rounded"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="single-social social-rounded"><i class="fab fa-twitter"></i></a>
								<a href="#" class="single-social social-rounded"><i class="fab fa-pinterest-p"></i></a>
								<a href="#" class="single-social social-rounded"><i
										class="fab fa-google-plus-g"></i></a>
								<a href="#" class="single-social social-rounded"><i class="fab fa-linkedin-in"></i></a>
							</div>
						</div>
						<div class="comment-block-wrapper mb--50">
							<h3>3 Comments</h3>
							<div class="single-comment">
								<div class="comment-avatar">
									<img src="image/icon/author-logo.png" alt="">
								</div>
								<div class="comment-text">
									<h5 class="author"> <a href="#"> Author</a></h5>
									<span class="time">October 8, 2014 at 12:38 pm</span>
									<p>Ame No Parade</p>
								</div>
								<a href="#" class="btn btn-outlined--primary btn-rounded reply-btn">Reply</a>
							</div>
							<div class="single-comment">
								<div class="comment-avatar">
									<img src="image/icon/author-logo.png" alt="">
								</div>
								<div class="comment-text">
									<h5 class="author"> <a href="#">Jack</a></h5>
									<span class="time">January 19, 2018 at 3:00 am</span>
									<p>just a nice post</p>
								</div>
								<a href="#" class="btn btn-outlined--primary btn-rounded reply-btn">Reply</a>
							</div>
							<div class="single-comment">
								<div class="comment-avatar">
									<img src="image/icon/author-logo.png" alt="">
								</div>
								<div class="comment-text">
									<h5 class="author"> <a href="#">Dexter</a></h5>
									<span class="time">august 31, 2021 at 3:30 am</span>
									<p>Awesome Post </p>
								</div>
								<a href="#" class="btn btn-outlined--primary btn-rounded reply-btn">Reply</a>
							</div>
						</div>
						<div class="replay-form-wrapper">
							<h3 class="mt-0">LEAVE A REPLY</h3>
							<p>Your email address will not be published. Required fields are marked *</p>
							<form action="./" class="blog-form">
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
					<div class="col-lg-3">
						<div class="inner-page-sidebar">
							<div class="single-block">
								<h2 class="sidebar-title mb--30">Search</h2>
								<div class="site-mini-search">
									<input type="text" placeholder="Search">
									<button><i class="fas fa-search"></i></button>
								</div>
							</div>
							<div class="single-block">
								<h2 class="sidebar-title mb--30">BLOG ARCHIVES</h2>
								<ul class="sidebar-list mb--30">
									<li><a href="#"> March 2015 (1)</a></li>
									<li><a href="#">December 2014 (3)</a></li>
									<li> <a href="#">November 2014 (4)</a></li>
									<li><a href="#">September 2014 (1)</a></li>
									<li><a href="#">August 2014 (1)</a></li>
								</ul>
							</div>
							<div class="single-block ">
								<h2 class="sidebar-title mb--30">RECENT POSTS</h2>
								<ul class="sidebar-list">
									<li><a href="#"> Blog image post</a></li>
									<li><a href="#">Post with Gallery</a></li>
									<li> <a href="#">Post with Audio</a></li>
									<li><a href="#">Post with Video</a></li>
									<li><a href="#">Maecenas ultricies</a></li>
								</ul>
							</div>
							<div class="single-block ">
								<h2 class="sidebar-title mb--30">Tags</h2>
								<ul class="sidebar-tag-list">
									<li><a href="#"> Chilled</a></li>
									<li><a href="#">Dark</a></li>
									<li> <a href="#">Euro</a></li>
									<li><a href="#">Fashion</a></li>
									<li><a href="#">Food</a></li>
									<li><a href="#">Hardware</a></li>
									<li><a href="#">Hat</a></li>
									<li><a href="#">Hipster</a></li>
									<li><a href="#">Holidays</a></li>
									<li><a href="#">Light</a></li>
									<li><a href="#">Mac</a></li>
									<li><a href="#">Place</a></li>
									<li><a href="#">T-Shirt</a></li>
									<li><a href="#">Travel</a></li>
									<li><a href="#">Video-2</a></li>
									<li><a href="#">White</a></li>
								</ul>
							</div>
							<!-- Promo Block -->
							<div class="single-block">
								<a href="" class="promo-image sidebar">
									<img src="image/others/home-side-promo.jpg" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
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
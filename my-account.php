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
							<li class="breadcrumb-item active">My Account</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<div class="page-section inner-page-sec-padding">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<!-- My Account Tab Menu Start -->
							<div class="col-lg-3 col-12">
								<div class="myaccount-tab-menu nav" role="tablist">
									<a href="#dashboad" class="active" data-bs-toggle="tab"><i
											class="fas fa-tachometer-alt"></i>
										Dashboard</a>
									<a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
									<a href="#download" data-bs-toggle="tab"><i class="fas fa-download"></i> Download</a>
									<a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i>
										Payment
										Method</a>
									<a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i>
										address</a>
									<a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Account
										Details</a>
									<a href="login-register.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
								</div>
							</div>
							<!-- My Account Tab Menu End -->
							<!-- My Account Tab Content Start -->
							<div class="col-lg-9 col-12 mt--30 mt-lg--0">
								<div class="tab-content" id="myaccountContent">
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade show active" id="dashboad" role="tabpanel">
										<div class="myaccount-content">
											<h3>Dashboard</h3>
											<div class="welcome mb-20">
												<p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni
														!</strong><a href="login-register.php" class="logout">
														Logout</a>)</p>
											</div>
											<p class="mb-0">From your account dashboard. you can easily check &amp; view
												your
												recent orders, manage your shipping and billing addresses and edit your
												password and account details.</p>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="orders" role="tabpanel">
										<div class="myaccount-content">
											<h3>Orders</h3>
											<div class="myaccount-table table-responsive text-center">
												<table class="table table-bordered">
													<thead class="thead-light">
														<tr>
															<th>No</th>
															<th>Name</th>
															<th>Date</th>
															<th>Status</th>
															<th>Total</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Mostarizing Oil</td>
															<td>Aug 22, 2018</td>
															<td>Pending</td>
															<td>$45</td>
															<td><a href="cart.php" class="btn">View</a></td>
														</tr>
														<tr>
															<td>2</td>
															<td>Katopeno Altuni</td>
															<td>July 22, 2018</td>
															<td>Approved</td>
															<td>$100</td>
															<td><a href="cart.php" class="btn">View</a></td>
														</tr>
														<tr>
															<td>3</td>
															<td>Murikhete Paris</td>
															<td>June 12, 2017</td>
															<td>On Hold</td>
															<td>$99</td>
															<td><a href="cart.php" class="btn">View</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="download" role="tabpanel">
										<div class="myaccount-content">
											<h3>Downloads</h3>
											<div class="myaccount-table table-responsive text-center">
												<table class="table table-bordered">
													<thead class="thead-light">
														<tr>
															<th>Product</th>
															<th>Date</th>
															<th>Expire</th>
															<th>Download</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Mostarizing Oil</td>
															<td>Aug 22, 2018</td>
															<td>Yes</td>
															<td><a href="#" class="btn">Download File</a></td>
														</tr>
														<tr>
															<td>Katopeno Altuni</td>
															<td>Sep 12, 2018</td>
															<td>Never</td>
															<td><a href="#" class="btn">Download File</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="payment-method" role="tabpanel">
										<div class="myaccount-content">
											<h3>Payment Method</h3>
											<p class="saved-message">You Can't Saved Your Payment Method yet.</p>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="address-edit" role="tabpanel">
										<div class="myaccount-content">
											<h3>Billing Address</h3>
											<address>
												<p><strong>Alex Tuntuni</strong></p>
												<p>1355 Market St, Suite 900 <br>
													San Francisco, CA 94103</p>
												<p>Mobile: (123) 456-7890</p>
											</address>
											<a href="#" class="btn btn--primary"><i class="fa fa-edit"></i>Edit
												Address</a>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="account-info" role="tabpanel">
										<div class="myaccount-content">
											<h3>Account Details</h3>
											<div class="account-details-form">
												<form action="#">
													<div class="row">
														<div class="col-lg-6 col-12  mb--30">
															<input id="first-name" placeholder="First Name" type="text">
														</div>
														<div class="col-lg-6 col-12  mb--30">
															<input id="last-name" placeholder="Last Name" type="text">
														</div>
														<div class="col-12  mb--30">
															<input id="display-name" placeholder="Display Name"
																type="text">
														</div>
														<div class="col-12  mb--30">
															<input id="email" placeholder="Email Address" type="email">
														</div>
														<div class="col-12  mb--30">
															<h4>Password change</h4>
														</div>
														<div class="col-12  mb--30">
															<input id="current-pwd" placeholder="Current Password"
																type="password">
														</div>
														<div class="col-lg-6 col-12  mb--30">
															<input id="new-pwd" placeholder="New Password"
																type="password">
														</div>
														<div class="col-lg-6 col-12  mb--30">
															<input id="confirm-pwd" placeholder="Confirm Password"
																type="password">
														</div>
														<div class="col-12">
															<button class="btn btn--primary">Save Changes</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<!-- Single Tab Content End -->
								</div>
							</div>
							<!-- My Account Tab Content End -->
						</div>
					</div>
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
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="js/plugins.js"></script>
	<script src="js/ajax-mail.js"></script>
	<script src="js/custom.js"></script>
</body>

</php>
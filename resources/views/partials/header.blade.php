<!--Header Start-->
			<header id="rs-header-2" class="rs-header-2">
				<!-- Menu Start -->
				<div class="menu-area menu-sticky">
					<div class="container">
						<div class="row rs-vertical-middle">
							<div class="col-lg-3 col-md-12">
								<div class="logo-area">
									<a href="{{ route('home') }}"><img src="images/logo-white.png" alt="logo"></a>
								</div>
							</div>
							<div class="col-lg-9 col-md-12">
								<div class="main-menu">
									<a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
									<nav class="rs-menu">
										<ul class="nav-menu">
											<!-- Home -->
											<li class="menu-item-has-children"> <a href="{{ route('home') }}" class="home">Home</a></li>
											<!-- End Home --> 
                                            
                                            <!--About Menu Start-->
                                            <li class="menu-item-has-children"><a href="{{ route('about') }}">About Us</a>
                                            </li>
                                            <!--About Menu End--> 

                                            <!-- Products -->
											<li class="current-menu-item current_page_item "> <a href="{{ route('products.all') }}">Products</a></li>
											<!--End Icons -->
                                            
											<!--Brand Menu Start-->
		                                    <li class="menu-item-has-children"> <a href="{{ route('brands.all') }}">Brands</a>
		                                      <ul class="sub-menu">
		                                        <li><a href="courses.html">Video trainings</a></li>
		                                        <li class="menu-item-has-children"> <a href="#">Product documents</a>
                                                  <ul class="sub-menu">
	                                                  <li><a href="#">Product A</a></li>
	                                                  <li><a href="#">Product B</a></li>
                                                  </ul>
		                                        </li>
		                                      </ul>
		                                    </li>
		                                    <!--Brand Menu End-->
                                            
											<!--Contact Menu Start-->
											<li> <a href="{{ route('contact') }}">Contact</a></li>
								            <!--Contact Menu End-->
										</ul>
									</nav>
								</div>
							</div>													
						</div>
					</div>
				</div>
				<!-- Menu End -->
			</header>
			<!--Header End-->
        <!--Full width header End-->
<!-- Products Start --> 
		<section>
			<div id="rs-courses-2" class="rs-courses-2 sec-spacer">
			<div class="container">
				<div class="sec-title mb-50">
                    <h2>OUR MAIN PRODUCTS</h2>      
                	<p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.</p>
                	<div class="view-more">
                		<a href="{{ route('products.all') }}">View All Products <i class="fa fa-angle-double-right"></i></a>
                	</div>
                </div>
				<div class="row">
					@if(count($products) > 0)
						@foreach ($products as $product)
							<div class="col-lg-4 col-md-6">
			                <div class="cource-item">
			                    <div class="cource-img">
			                        <a href="{{ $product->path()}}"><img src="{{ $product->image }}" alt="" /></a>
	                                <a class="image-link" href="{{ $product->path()}}" title="{{ $product->brand->name}}">
	                                    <i class="fa fa-link"></i>
	                                </a>
			                    </div>
			                    <div class="course-body">
			                    	<a href="{{ $product->path()}}" class="course-category">Product</a>
			                    	<h4 class="course-title"><a href="{{ $product->path()}}">{{ $product->title }}</a></h4>
			                    	<div class="course-desc">
			                    		<p>
			                    			{{ $product->description }}
			                    		</p>
			                    	</div>
			                    	<a href="{{ $product->path()}}" class="cource-btn">View Product</a>
			                    </div>
			                </div>						
						</div>
						@endforeach
					@else
						<h1> No products in our stock. Please stay tuned for new products!</h1>
					@endif
					<!-- <div class="col-lg-4 col-md-6">
		                <div class="cource-item">
		                    <div class="cource-img">
		                        <a href="#"><img src="images/courses/4.jpg" alt="" /></a>
                                <a class="image-link" href="courses-details.html" title="Product Title Here">
                                    <i class="fa fa-link"></i>
                                </a>
		                    </div>
		                    <div class="course-body">
		                    	<a href="#" class="course-category">Product</a>
		                    	<h4 class="course-title"><a href="courses-details.html">Product Title Here</a></h4>
		                    	<div class="course-desc">
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur
		                    			scelerisque arcu curabitur
		                    		</p>
		                    	</div>
		                    	<a href="#" class="cource-btn">Buy Now</a>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6">
		                <div class="cource-item">
		                    <div class="cource-img">
		                        <img src="images/courses/5.jpg" alt="" />
                                <a class="image-link" href="courses-details.html" title="Product Title Here">
                                    <i class="fa fa-link"></i>
                                </a>
		                    </div>
		                    <div class="course-body">
		                    	<a href="#" class="course-category">Product</a>
		                    	<h4 class="course-title"><a href="courses-details.html">Product Title Hereng</a></h4>
		                    	<div class="course-desc">
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur
		                    			scelerisque arcu curabitur
		                    		</p>
		                    	</div>
		                    	<a href="#" class="cource-btn">Buy Now</a>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6">
		                <div class="cource-item">
		                    <div class="cource-img">
		                        <img src="images/courses/6.jpg" alt="" />
                                <a class="image-link" href="courses-details.html" title="Product Title Here">
                                    <i class="fa fa-link"></i>
                                </a>
		                    </div>
		                    <div class="course-body">
		                    	<a href="#" class="course-category">Product</a>
		                    	<h4 class="course-title"><a href="#">Product Title Here</a></h4>
		                    	<div class="course-desc">
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur
		                    			scelerisque arcu curabitur
		                    		</p>
		                    	</div>
		                    	<a href="#" class="cource-btn">Buy Now</a>
		                    </div>
		                </div>
					</div>
					<div class="col-lg-4 col-md-6">
		                <div class="cource-item">
		                    <div class="cource-img">
		                        <img src="images/courses/7.jpg" alt="" />
                                <a class="image-link" href="courses-details.html" title="Product Title Here">
                                    <i class="fa fa-link"></i>
                                </a>
		                    </div>
		                    <div class="course-body">
		                    	<a href="#" class="course-category">Product</a>
		                    	<h4 class="course-title"><a href="#">Product Title Here</a></h4>
		                    	<div class="course-desc">
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur
		                    			scelerisque arcu curabitur
		                    		</p>
		                    	</div>
		                    	<a href="#" class="cource-btn">Buy Now</a>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6">
		                <div class="cource-item">
		                    <div class="cource-img">
		                        <img src="images/courses/8.jpg" alt="" />
                                <a class="image-link" href="courses-details.html" title="Product Title Here">
                                    <i class="fa fa-link"></i>
                                </a>
		                    </div>
		                    <div class="course-body">
		                    	<a href="#" class="course-category">Product</a>
		                    	<h4 class="course-title"><a href="#">Product Title Here</a></h4>
		                    	<div class="course-desc">
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur
		                    			scelerisque arcu curabitur
		                    		</p>
		                    	</div>
		                    	<a href="#" class="cource-btn">Buy Now</a>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6">
		                <div class="cource-item">
		                    <div class="cource-img">
		                        <img src="images/courses/9.jpg" alt="" />
                                <a class="image-link" href="courses-details.html" title="Product Title Here">
                                    <i class="fa fa-link"></i>
                                </a>
		                    </div>
		                    <div class="course-body">
		                    	<a href="#" class="course-category">Product</a>
		                    	<h4 class="course-title"><a href="#">Product Title Here</a></h4>
		                    	<div class="course-desc">
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur
		                    			scelerisque arcu curabitur
		                    		</p>
		                    	</div>
		                    	<a href="#" class="cource-btn">Buy Now</a>
		                    </div>
		                </div>
					</div> -->
			    </div>
			</div>
        </div>
		</section>
        
        <!-- Product End -->
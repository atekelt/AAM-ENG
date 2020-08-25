@extends('layouts.master')

@section('content')
    
    <!-- Include the header -->
    @include('partials.fullwidth-header')

<!-- Shop Single Page Start Here -->
        <div class="shop-page-area shop-single-page-area single-product-page single-blog-page-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-12">
                <div class="single-product-area left-area">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="inner-single-product-slider">
                        <div class="inner">
                          <div class="slider single-product">
                            <div>
                              <div class="images-single"> <img src="images/shop-single/5.jpg" alt=""> </div>
                            </div>
                            <div>
                              <div class="images-single"> <img src="images/shop-single/6.jpg" alt=""> </div>
                            </div>
                            <div>
                              <div class="images-single"> <img src="images/shop-single/7.jpg" alt=""> </div>
                            </div>
                            <div>
                              <div class="images-single"> <img src="images/shop-single/8.jpg" alt=""> </div>
                            </div>
                          </div>
                        </div>
                        <div class="slider single-product-nav">
                          <div class="images-slide-single"> <img src="images/shop-single/10.jpg" alt=""> </div>
                          <div class="images-slide-single"> <img src="images/shop-single/12.jpg" alt=""> </div>
                          <div class="images-slide-single"> <img src="images/shop-single/11.jpg" alt=""> </div>
                          <div class="images-slide-single"> <img src="images/shop-single/9.jpg" alt=""> </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <h4>Product Title Here</h4>
                      <p>Using the Composite Products extension (sold separately), you can create “build-your-own bundles” with various scenarios and options, like this advanced DSLR camera kit.</p>
                      <p>See the guide for setting up a similar product and more in the documentation Use Cases.</p>
                      <p>Note that the items, pictures, and descriptions are purely for demonstration purposes and do not imply any partnership, preference, or connection with Canon, Nikon, Lowepro, or any other brand.</p>
                      <p class="cat"><strong>Category:</strong> Lunch</p>
                      <p class="tag"><strong>Tags:</strong> Composite Product, Extension Demonstration</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-12"> 
                <div class="sidebar-area">
                    <div class="search-box">
                        <div class="box-search">
                            <a href="#" class="add-to-cart">Add To Cart</a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container shop-single-btm-page-area">
            <div class="sec-title text-center">
                <h2>Related product</h2>
                <p>Products related to this product</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-details">
                        <div class="images"> <a href="#"><img src="images/shop/1.jpg" alt=""></a>
                            <div class="overley">
                                <div class="winners-details">
                                    <ul class="product-info">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-compress" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="triangle_left"></div>
                            <h4><a href="#">Product Title Here</a></h4>
                        <div class="price-details">
                            <ul>
                                <li> Form $120 </li>
                                <li> <a href="#" class="add-to-cart">Add To Cart</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="single-details">
                        <div class="images"> <a href="#"><img src="images/shop/2.jpg" alt=""></a>
                            <div class="overley">
                                <div class="winners-details">
                                    <ul class="product-info">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-compress" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="triangle_left"></div>
                        <h4><a href="#">Product Title Here</a></h4>
                        <div class="price-details">
                            <ul>
                                <li> Form $120 </li>
                                <li> <a href="#" class="add-to-cart">Add To Cart</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="single-details">
                        <div class="images"> <a href="#"><img src="images/shop/3.jpg" alt=""></a>
                            <div class="overley">
                                <div class="winners-details">
                                    <ul class="product-info">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-compress" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="triangle_left"></div>
                        <h4><a href="#">Product Title Here</a></h4>
                        <div class="price-details">
                            <ul>
                                <li> Form $120 </li>
                                <li> <a href="#" class="add-to-cart">Add To Cart</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="single-details">
                        <div class="images"> <a href="#"><img src="images/shop/4.jpg" alt=""></a>
                            <div class="overley">
                                <div class="winners-details">
                                    <ul class="product-info">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-compress" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="triangle_left"></div>
                        <h4><a href="#">Product Title Here</a></h4>
                        <div class="price-details">
                            <ul>
                                <li> Form $120 </li>
                                <li> <a href="#" class="add-to-cart">Add To Cart</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

        
        @include('partials.partners')

@endsection
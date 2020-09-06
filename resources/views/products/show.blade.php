@extends('layouts.master')

@section('content')
    
   <!-- Include the header -->
  @include('partials.fullwidth-header')
  <!-- Include the calltoaction partials -->
  @include('partials.calltoaction') 

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
                    <h4>{{$page}}</h4>
                    <p>{{$description}}</p>
                      <p class="cat"><strong>Inventory:</strong> {{$count}}</p>
                    <p class="tag"><strong>Price:</strong> {{$price}} Birr</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-12"> 
                <div class="sidebar-area">
                    {!! Form::open(['action' => 'CartController@store', 'method' => 'POST', 'class'=>'form-group']) !!}
                    <input type="hidden" name="name" value="{{$page}}">
                    <input type="hidden" name="id" value="{{$id}}">
                    {{Form::submit('Add To Cart',['class'=>'btn btn-primary form-control'])}}
                    <input type="number" name="qty" value="1" class="form-control">
                    {!! Form::close() !!}
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
@section('footer')
	@include('partials.footer')
@endsection
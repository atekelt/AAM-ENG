@extends('layouts.master')

@section('content')
	
	<!-- Include the header -->
	@include('partials.fullwidth-header')

	<div class="shop-page-area sec-spacer">
          <div class="container">
            <div class="row topbar-area">
                <div class="col-lg-6 col-md-6">
                  <div class="showing-result">
                    <ul>
                      <li class="seclec-box">
                        <form>
                          <fieldset>
                            <div class="form-group">
                              <select class="form-control">
                                <option>Category</option>
                                <option>Category 1</option>
                                <option>Category 2</option>
                                <option>Category 3</option>
                                <option>Category 4</option>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </select>
                            </div>
                          </fieldset>
                        </form>
                      </li>
                      <span>Showing 1–12 of 145 results</span>
                    </ul>
                  </div><!-- .showing-result end -->
                </div>
                
                <div class="col-lg-6 col-md-6">
                  <div class="showing-result showing-Short">
                    <ul>
                      <li class="seclec-box">
                        <form>
                          <fieldset>
                            <div class="form-group">
                              <select id="disabledSelect" class="form-control">
                                <option>Short by</option>
                                <option>High to Low</option>
                                <option>Low to High</option>
                                <option>A to Z</option>
                                <option>Z to A</option>
                              </select>
                            </div>
                          </fieldset>
                        </form>
                      </li>
                    </ul>
                  </div><!-- .showing-result showing-Short end -->
                </div>
            </div>
            <div class="row product-list">
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
                  </div><!-- .single-details end -->
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
                  </div><!-- .single-details end -->
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
                  </div><!-- .single-details end -->
                </div>
                
                <div class="col-lg-3 col-md-6">
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
                  </div><!-- .single-details end -->
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="single-details">
                    <div class="images"> <a href="#"><img src="images/shop/5.jpg" alt=""></a>
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
                  </div><!-- .single-details end -->
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="single-details">
                    <div class="images"> <a href="#"><img src="images/shop/6.jpg" alt=""></a>
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
                  </div><!-- .single-details end -->
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="single-details">
                    <div class="images"> <a href="#"><img src="images/shop/7.jpg" alt=""></a>
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
                  </div><!-- .single-details end -->
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="single-details">
                    <div class="images"> <a href="#"><img src="images/shop/8.jpg" alt=""></a>
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
                  </div><!-- .single-details end -->
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="single-details">
                    <div class="images"> <a href="#"><img src="images/shop/9.jpg" alt=""></a>
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
                  </div><!-- .single-details end -->
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="single-details">
                    <div class="images"> <a href="#"><img src="images/shop/10.jpg" alt=""></a>
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
                  </div><!-- .single-details end -->
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="single-details">
                    <div class="images"> <a href="#"><img src="images/shop/11.jpg" alt=""></a>
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
                  </div><!-- .single-details end -->
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="single-details">
                    <div class="images"> <a href="#"><img src="images/shop/12.jpg" alt=""></a>
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
                  </div><!-- .single-details end -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link fa fa-angle-left" href="#" tabindex="-1"></a></li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link dotted" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link fa fa-angle-right" href="#"></a></li>
                        </ul>
                    </nav><!-- .navigation end -->
                </div>
            </div>
          </div>
        </div>
        <!-- Shop Page End Here --> 

        @include('partials.partners')

@endsection

@section('footer')
	@include('partials.footer')
@endsection
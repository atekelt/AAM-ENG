
@extends('layouts.master')

@section('content')
	
	<!-- Include the header -->
  @include('partials.fullwidth-header')
   <!-- Include the calltoaction partials -->
   @include('partials.calltoaction') 

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
            <div class="alert alert-dark" role="alert">@include('inc.messages')</div>
            <div class="row">
              <a href="">
              @if(count($products) > 0)
                @foreach ($products as $product)
                  <div class="col-lg-4 col-md-6">
                          <div class="cource-item">
                              <div class="cource-img">
                                  <a href="{{ $product->path()}}"><img src="storage\images\{{$product->image}}" alt="" /></a>
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
                                <button class="cource-btn"><a href="{{ $product->path()}}">View Product</a></button>
                              </div>
                          </div>						
                </div>
                @endforeach
              </a>
              @else
                <h1> No products in our stock. Please stay tuned for new products!</h1>
              @endif
        <!-- Shop Page End Here --> 

        @include('partials.partners')

@endsection

@section('footer')
	@include('partials.footer')
@endsection
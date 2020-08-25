@extends('layouts.master')

@section('content')

        <!-- Include the preload block -->
        @include('partials.preload')

        <!-- include the full width header block -->
        @include('partials.toolbar')

        <!-- Include the slider partials -->
        @include('partials.slider')

        <!-- Include the search partials -->
        @include('partials.search')

        <!-- Include the products partials -->
        @include('partials.products')

        <!-- Include the calltoaction partials -->
        @include('partials.calltoaction')       
        
        <!-- Include the pricing partials -->
        @include('partials.pricing')
        
        <!-- Include the news partials -->
        @include('partials.news')
        
        <!-- Include the testimonials partials -->
        @include('partials.testimonials')
        
        <!-- Include the partners partials -->
        @include('partials.partners')

@endsection

@section('footer')
        @include('partials.footer')
@endsection
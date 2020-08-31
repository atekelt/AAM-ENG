@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div>
        <ul>
            <li class="list"><a href="/products/create">Register a Product</a></li>
            <li class="list"><a href="/brands/create">Register a Brand</a></li>
        </ul>
    </div>
    
</div>
<div class="container">
    All Products.

@include('inc.messages') 
<br>
@if(count($products) > 0)
    @foreach ($products as $item)
        <div>
        <h3>{{$item->name}}</h3>
        <h4>{{$item->description}}</h4>
        <small>Registered on {{$item->created_at}}</small>
        <a href="/admin/{{$item->id}}/edit"><button>Edit</button></a> 
        {!! Form::open(['action' => ['AdminController@destroy', $item->id],'method'=> 'POST']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete')}}
        {!! Form::close() !!}
    @endforeach
    @else
     No Products Found.
    @endif
</div>
@endsection

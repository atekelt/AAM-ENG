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
    <div class="row justify-content-center" style="padding-top: 10rem;" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                    <div class="col-sm"><a href="/products/create" class="btn btn-info">Register a Product</a></div>
                    <div class="col-sm"></div>
                    <div class="col-sm"><a href="/brands/create" class="btn btn-info">Register a Brand</a></div>
                    </div>
                </div>

                <div class="card-body">
                	<div class="container">
                        <h2>All Products.</h2>
                    
                    @include('inc.messages') 
                    <br>
                    @if(count($products) > 0)
                        @foreach ($products as $item)
                            <div>
                            <h3>{{$item->name}}</h3>
                            <h4>{{$item->description}}</h4>
                            <small>Registered on {{$item->created_at}}</small>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <a href="/admin/{{$item->id}}/edit"><button class="btn btn-primary">Edit</button></a>
                                </div>
                                <div class="col-sm">
                                    {!! Form::open(['action' => ['AdminController@destroy', $item->id],'method'=> 'POST', 'class'=>'pull-right']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                            {!! Form::close() !!}
                                </div>
                            </div>
                             
                            
                            <hr>
                        @endforeach
                        @else
                         No Products Found.
                        @endif
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

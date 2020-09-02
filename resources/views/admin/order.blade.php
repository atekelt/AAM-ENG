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
                    <div class="col-sm"><a href="/admin" class="btn btn-info">Dash Bord</a></div>
                    <div class="col-sm"><a href="/brands/create" class="btn btn-info">Register a Brand</a></div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="container">
                        <h2>All Orders.</h2>
                    
                    @include('inc.messages') 
                    <br>
                    @if(count($orders) > 0)
                        @foreach ($orders as $order)
                        <div class="row">
                            <div class="col">
                                <h3>{{$order->user_name}}</h3>
                                <h4>{{$order->email}}</h4>
                                <h4>{{$order->phoneNumber}}</h4>
                                <small>Registered on {{$order->created_at}}</small>
                                <br>
                            </div>
                            <div class="col">
                                @php
                                    var_dump($order->items);
                                @endphp
                            
                            </div>
                            
                            <div class="col">
                                <div class="form-group">
                                    {!! Form::open(['action' => 'OrderController@destroy', 'method' => 'POST']) !!}
                                  <input type="hidden" name="id" value="{{$order->id}}">
                                  {{Form::submit('Confirm',['class'=>'btn btn-danger'])}}
                                </div>
                                    {!! Form::close() !!}</td>
                            </div>
                            </div>
                            <hr>
                        @endforeach
                    @else
                         No Orders Found.
                    @endif
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>   
@endsection

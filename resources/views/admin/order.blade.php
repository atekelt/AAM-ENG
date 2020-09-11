@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center" style="padding-top: 10rem;" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                    <div class="col-sm"><a href="/products/create" class="btn btn-info">Register a Product</a></div>
                    <div class="col-sm"><a href="/home" class="btn btn-info">Dashbord</a></div>
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
                                <div class="form-group">
                                    {!! Form::open(['action' => 'OrderController@show', 'method' => 'POST']) !!}
                                  <input type="hidden" name="order_id" value="{{$order->id}}">
                                <input type="hidden" name="user_name" value="{{$order->user_name}}">
                                <input type="hidden" name="email" value="{{$order->email}}">
                                <input type="hidden" name="phoneNumber" value="{{$order->phoneNumber}}">
                                  {{Form::submit('Details',['class'=>'btn btn-info'])}}
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
@include('partials.partners')

@endsection

@section('footer')
@include('partials.footer')
@endsection
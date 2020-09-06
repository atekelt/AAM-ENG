@extends('layouts.app')

@section('content')
<table class="table">
    <tr>
        <td>
            <table class="table">
                <tr>
                    <td>Name</td>
                </tr>
                @foreach ($product as $product)
                @foreach ($product as $product)
                <tr>
                    <td>{{$product->name}}</td>
                </tr>
                @endforeach
                @endforeach
            </table>
        </td>
        <td>
            <table class="table">
                <tr>
                    <td>Qty</td>
                    @foreach ($ordered_items as $order)
                    <tr>
                        <td>{{$order->quantity}}</td>
                    </tr>
                    @endforeach
                </tr>
            </table>
        </td>
    </tr>
</table>

<div class="card">
  <div class="card-body">
    <blockquote class="blockquote">
      <p>Ordered By</p>
      <footer class="card-blockquote">
          <h3>{{$user_name}}</h3>
          <h3>{{$email}}</h3>
          <h3>{{$phoneNumber}}</h3>
<div class="row">
    <div class="col-md">
          <div class="form-group">
            {!! Form::open(['action' => 'OrderController@update', 'method' => 'POST']) !!}
          <input type="hidden" name="order_id" value="{{$order_id}}">
          {{Form::submit('Complete Order',['class'=>'btn btn-info'])}}
            {!! Form::close() !!}</td>
        </div>
    </div>
    <div class="col-md">
        <div class="form-group">
          {!! Form::open(['action' => 'OrderController@destroy', 'method' => 'POST']) !!}
        <input type="hidden" name="order_id" value="{{$order_id}}">
        {{Form::submit('Cancel Order',['class'=>'btn btn-danger'])}}
          {!! Form::close() !!}</td>
      </div>
  </div>
</div>

      </footer>
    </blockquote>
  </div>
</div>

@endsection
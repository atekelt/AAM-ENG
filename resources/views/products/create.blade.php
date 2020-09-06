@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding-top: 10rem;" >
        <div>
            <a href="/home"><button class="btn btn-secondary">Go Back</button></a>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add Product</h3>
                    <br>
                    @include('inc.messages')
                </div>

                <div class="card-body">
                	{!! Form::open(['action' => 'ProductController@store', 'method' => 'POST', 'files' => 'true']) !!}
    <br>
    <div class="form-group">
    {{Form::label('name','Product Name')}}
    {{Form::text('name','',['placeholder' => 'Product Name','class'=> 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('product_number','Product Number')}}
    {{Form::Number('product_number','',['placeholder' => 'Product Number','class'=> 'form-control'])}}
</div>    
<div class="form-group">
    {{Form::label('count','Product Count')}}
    {{Form::Number('count','',['placeholder' => 'Product Count','class'=> 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('description','Product Description')}}
    {{Form::textarea('description','',['placeholder' => 'Product Description','class'=> 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('price','Product Price')}}
    {{Form::text('price','',['placeholder' => 'Product Price','class'=> 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('brand_id','Product Brand')}}
    {!! Form::select('brand_id', $brands, null,['class'=> 'form-control'] )!!}
</div>
<div class="form-group">
    {{Form::label('cover_image','Product Image')}}
    {{ Form::file('cover_image',['class'=> 'form-control'])}}
</div>    
<div class="form-group">
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

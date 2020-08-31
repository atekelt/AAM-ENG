@extends('layouts.master')
@section('content')
@include('partials.permanent-menu')

<div class="container">
    <div class="row justify-content-center" style="padding-top: 10rem;" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit
                    @include('inc.messages')
                </div>
                <div class="card-body">
                    {!! Form::open(['action' => 'ProductController@store', 'method' => 'POST', 'files' => 'true']) !!}
                <br>
                <div class="form-group">
                {{Form::label('name','Product Name')}}
                {{Form::text('name',$product->name,['placeholder' => 'Product Name','class'=> 'form-control'])}}
                </div>
                <div class="form-group">
                {{Form::label('product_number','Product Number')}}
                {{Form::Number('product_number',$product->product_number,['placeholder' => 'Product Number','class'=> 'form-control'])}}
                </div>    
                <div class="form-group">
                {{Form::label('count','Product Count')}}
                {{Form::Number('count',$product->count,['placeholder' => 'Product Count','class'=> 'form-control'])}}
                </div>
                <div class="form-group">
                {{Form::label('description','Product Description')}}
                {{Form::textarea('description',$product->description,['placeholder' => 'Product Description','class'=> 'form-control'])}}
                </div>
                <div class="form-group">
                {{Form::label('price','Product Price')}}
                {{Form::text('price',$product->price,['placeholder' => 'Product Price','class'=> 'form-control'])}}
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

@section('footer')

@endsection





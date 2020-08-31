@extends('layouts.master')
@section('content')
@include('partials.permanent-menu')



<div class="container">
    <div class="row justify-content-center" style="padding-top: 10rem;" >
        <div>
            <a href="/admin"><button class="btn btn-basic">Go Back</button></a>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">                  
                <h1>Add a Brand</h1>
                @include('inc.messages')
                </div>

                <div class="card-body">
        <div class="form-group">
        {!! Form::open(['action' => 'BrandController@store', 'method' => 'POST']) !!}

        {{Form::label('name','Brand Name')}}
        {{Form::text('name','',['placeholder' => 'Brand Name', 'class'=>'form-control'])}}

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


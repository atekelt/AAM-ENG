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

@include('partials.partners')

@endsection

@section('footer')
@include('partials.footer')
@endsection

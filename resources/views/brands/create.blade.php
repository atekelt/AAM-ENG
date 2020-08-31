<h1>Add a Brand</h1>
<br>
@include('inc.messages')
<br>
{!! Form::open(['action' => 'BrandController@store', 'method' => 'POST']) !!}
    <br>
    {{Form::label('name','Brand Name')}}
    {{Form::text('name','',['placeholder' => 'Brand Name'])}}
    <br>
    {{Form::submit('submit')}}
{!! Form::close() !!}
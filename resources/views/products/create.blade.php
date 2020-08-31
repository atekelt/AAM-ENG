

<h1>Add Product</h1>
<br>
@include('inc.messages')
<br>
{!! Form::open(['action' => 'ProductController@store', 'method' => 'POST', 'files' => 'true']) !!}
    <br>
    {{Form::label('name','Product Name')}}
    {{Form::text('name','',['placeholder' => 'Product Name'])}}
    <br>
    <br>
    {{Form::label('product_number','Product Number')}}
    {{Form::Number('product_number','',['placeholder' => 'Product Number'])}}
    <br>
    <br>
    {{Form::label('count','Product Count')}}
    {{Form::Number('count','',['placeholder' => 'Product Count'])}}
    <br>
    <br>
    {{Form::label('description','Product Description')}}
    {{Form::textarea('description','',['placeholder' => 'Product Description'])}}
    <br>
    <br>
    {{Form::label('price','Product Price')}}
    {{Form::text('price','',['placeholder' => 'Product Price'])}}
    <br>
    <br>
    {{Form::label('brand_id','Product Brand')}}
    {!! Form::select('brand_id', $brands, null) !!}
    <br>
    <br>
    {{Form::label('cover_image','Product Image')}}
    {{ Form::file('cover_image')}}
    <br>
    {{Form::submit('submit')}}
{!! Form::close() !!}
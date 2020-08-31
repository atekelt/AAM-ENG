

<h1>Add Product</h1>
<br>
@include('inc.messages')
<br>
{!! Form::open(['action' => ['AdminController@update', $product->id], 'method' => 'POST']) !!}
    <br>
    {{Form::label('name','Product Name')}}
    {{Form::text('name',$product->name,['placeholder' => 'Product Name'])}}
    <br>
    <br>
    {{Form::label('product_number','Product Number')}}
    {{Form::text('product_number',$product->product_number,['placeholder' => 'Product Number'])}}
    <br>
    <br>
    {{Form::label('count','Product Count')}}
    {{Form::text('count',$product->count,['placeholder' => 'Product Count'])}}
    <br>
    <br>
    {{Form::label('description','Product Description')}}
    {{Form::text('description',$product->description,['placeholder' => 'Product Description'])}}
    <br>
    <br>
    {{Form::label('price','Product Price')}}
    {{Form::text('price',$product->price,['placeholder' => 'Product Price'])}}
    <br>
    <br>
    {{Form::label('brand_id','Product Brand')}}
    {{Form::text('brand_id',$product->brand_id,['placeholder' => 'Product Brand'])}}
    <br>
    <br>
    {{Form::label('image','Product Image')}}
    {{Form::text('image',$product->image,['placeholder' => 'Product Image'])}}
    <br>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('submit')}}
{!! Form::close() !!}
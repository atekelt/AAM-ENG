@extends('layouts.master')
@section('content')
@include('partials.permanent-menu')

<div class="container">
    <div class="row justify-content-center" style="padding-top: 10rem;" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Cart
                </div>
                <div class="card-body">
                	
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Product Name</th>
                        {{-- <th scope="col">Quantity</th> --}}
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @if(count($item) > 0)
                        @foreach($item as $key => $value)
                       <tr>
                           
                           <td>{{$key}}</td>
                           <td><div class="form-group">
                            {!! Form::open(['action' => 'CartController@destroy', 'method' => 'POST']) !!}
                          <input type="hidden" name="key" value="{{$key}}">
                          {{Form::submit('Remove',['class'=>'btn btn-danger'])}}
                        </div>
                            {!! Form::close() !!}</td>
                         </tr>
                   @endforeach
                   @else
                   <h2>No Items In Your Cart</h2>
                   @endif
                    </tbody>
                  </table>

                  <!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Finishing Up</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        {!! Form::open(['action' => 'CartController@create', 'method' => 'POST']) !!}

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" name="user_name" class="form-control">
                        <label for="materialRegisterFormFirstName">Full name</label>
                    </div>
                </div>
            <!-- E-mail -->
            <div class="md-form mt-0 col">
                <input type="email" name="email" class="form-control">
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Phone number -->
            <div class="md-form">
                <input type="number" name="phoneNumber" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                <label for="materialRegisterFormPhone">Phone number</label>
            </div>

            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Place Order</button>

            {!! Form::close() !!}</td>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->

                  </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')

@endsection

{{-- @php
    var_dump($item);
    // var_dump($qty);
@endphp --}}
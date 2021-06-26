@extends('master')

@section('content')
      <div class="row">
         
          <div class=" col-sm-6 p-5">
             <img src="{{asset('images')}}/{{$data['gallery']}}"  width="400px" height="300px;">
          </div>
          <div class="col-6 p-5">
             <a href="/">Go Back</a> 
              <h2>Name :{{$data['name']}}</h3>
              <h3>Price : {{$data['price']}}</h3>
              <h4>Category : {{$data['category']}}</h4>
              <h4>Description : {{$data['description']}}</h4>
              <form action="/add_to_cart" method="POST">
                  @csrf
                  <input type="hidden" name="product_id" value="{{$data['id']}}">
                  <button class="btn btn-primary" type="submit">Add To Cart</button>
              </form>

              <br>
              <button class="btn btn-success" class="">Buy Now</button>
              
          </div>
      </div>


@endsection
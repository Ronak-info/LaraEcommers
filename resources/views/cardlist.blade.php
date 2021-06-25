@extends('master')

@section('content')
      {{-- <div class="slider">

        <div class="trending-wrapper">
            <h3>Cart Item List</h3><hr/>  
            <div class="carousel-inner ">
                @foreach ($data as $v )  
                <div class="trending-item">
                 <a href="details/{{$v->id}}">                
                  <div class="row">
                    <div class="col-2 p-3">
                     <img src="{{asset('images')}}/{{$v->gallery}}" height="200px;" width="220x;"> 
                    </div>
                 </div>            
                 
                  <div class="">
                     <h5 class=" ml-4">{{$v->name}}</h5> 
                     <h5 class=" ml-4">Rs.{{$v->description}}</h5>    
                  </div>    
                </a>      
                </div>
                @endforeach  
              </div>
        </div>
        <hr/> 
      </div> --}}
          
      <div class="container">
        <h2>Cart List</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Remove</th>
              <th>Image</th>
              <th>Item Name</th>
              <th>Price</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $v )
            <tr>
              <td>{{$v->id}}</td>
              <td><a href="/removecart/{{$v->cart_id}}" class="btn btn-danger">Remove</a></td>
              <td><img src="{{asset('images')}}/{{$v->gallery}}" height="50px;" width="50x;"> </td>
              <td>{{$v->name}}</td>
              <td>{{$v->price}}</td>
              <td >{{--$total--}}</td>
              
            </tr>      
            @endforeach 
            <tr><td colspan="6"><a href="/ordernow" class="btn btn-success float-right">Place Order</a></td></tr>
          </tbody>
        </table>
      </div>

@endsection
@extends('master')

@section('content')
          
      <div class="container">
        <h2 class=" text-center">Oders List</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Order_Id</th> 
              <th>Image</th>
              <th>Orders Details</th>   
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $v )
            <tr>
              <td>{{$v->id}}</td>
              <td><img src="{{asset('images')}}/{{$v->gallery}}" class=" rounded" height="150px;" width="150x;"> </td>
              <td>
                  Product Name : {{$v->name}}<br>
                  Product Price : {{$v->price}}<br>
                  Product Status : {{$v->status}}<br>
                  Product Payment_method : {{$v->payment_method}}<br>
                  Product Payment_status : {{$v->payment_status}}<br>
                  Product Address : {{$v->address}}<br>
                  
                  
            </td>           
              
            </tr>      
            @endforeach 
          </tbody>
        </table>
      </div>

@endsection
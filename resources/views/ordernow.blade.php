@extends('master')

@section('content')
 <div class=" container">
   <div class="row">
     <div class="col-sm-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Order Summary</th>
          
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Price</th>
            <td>{{$total}}INR</td>           
          </tr>
          <tr>
            <th>Tax</th>
            <td>0 INR</td>           
          </tr>
          <tr>
            <th>Delevery </th>
            <td>100 INR</td>           
          </tr>
          <tr>
            <th>Total Amout </th>
            <td>{{$total+100}}</td>           
          </tr>
        </tbody>
      </table>
    <form action="/orderplace" method="post">
      @csrf
      <div class="form-group">
        <label for="my-textarea">Address</label>
        <textarea id="my-textarea" class="form-control" name="address" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="my-textarea">Payment Methods : </label>       
            <input type="radio" name="payment" value="onliine"> Online  
            <input type="radio" name="payment" value="cod"> COD
            <input type="radio" name="payment" value="dabitcard"> Debit Card
                   
      </div>
      <button class="btn btn-success mb-3">Order Now</button>
    </form>
 </div>

@endsection
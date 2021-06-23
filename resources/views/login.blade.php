@extends('master')

@section('content')
 <h1 class=" text-center">Login</h1>
 <div class=" container my-4">
    <form action="" method="POST" enctype="multipart/form-data" class=" col-6 m-auto">
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd">
        </div>
        <div class="checkbox">
         
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
 </div>
 
  
@endsection
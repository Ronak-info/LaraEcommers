@extends('master')

@section('content')
      <div class="slider">

        <div class="trending-wrapper">
            <h3>Result for Search</h3><hr/>  
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
      </div>
       


@endsection
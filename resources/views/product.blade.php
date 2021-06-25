@extends('master')

@section('content')
      <div class="slider">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner ">
              @foreach ($data as $v )  
              <div class="carousel-item {{$v->id==1?'active':''}}">
             <a href="details/{{$v->id}}">            
                <img class="slider-img" src="{{asset('images')}}/{{$v->gallery}}" alt="{{$v->name}}{{$v->name}}" width="100%" height="500">
                <div class="carousel-caption">
                  <h3 class="" >{{$v->name}}</h3>
                  <p class="" >Rs.{{$v->price}}/-</p>
                </div>            
             </a>
            </div>
              @endforeach  
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
        </div> 

        <div class="trending-wrapper">
            <h1>Trending Product</h1><hr/>  
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
                     <h5 class=" ml-4">Rs.{{$v->price}}</h5>    
                  </div>    
                </a>      
                </div>
                @endforeach  
              </div>
        </div>
        <hr/> 
      </div>
       


@endsection
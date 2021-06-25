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
                <img class="slider-img" src="{{asset('images')}}/{{$v->gallery}}" alt="{{$v->name}}{{$v->name}}" width="100%" height="500">
                <div class="carousel-caption">
                  <h3 class="" >{{$v->name}}</h3>
                  <p class="" >Rs.{{$v->price}}/-</p>
                </div>               
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
                  <img src="{{asset('images')}}/{{$v->gallery}}" height="200px;">
                    <div class="">
                       <h4 class=" ml-4">{{$v->name}}</h4>    
                    </div>          
                </div>
                @endforeach  
              </div>
        </div>
        <hr/> 
      </div>
        hello


@endsection
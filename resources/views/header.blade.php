<?php
use App\Http\Controllers\ProductController;


$total = 0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();
}
?>
<div class="header">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">EcommersWeb</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Orders
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Pending Orders</a>
            <a class="dropdown-item" href="#">Delevered Orders</a>
            <a class="dropdown-item" href="#">Cancelled Orders</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">See ALL  Orders</a>
          </div>
        </li>
        <li class="nav-item">
        
          <form action="/search" class="form-inline my-2 my-lg-0">
            <input name="query" class="form-control mr-sm-2 search-box" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
          </form>
        </li>
      </ul>
          <ul class="nav navbar-nav ">
            <li><a href="/catrtlist" class="btn btn-outline-info mr-2">Cart Item({{$total}})</a></li>
 
            @if(Session::has('user'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{Session::get('user')['name']}}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item ml-3" href="/logout">Logout</a>
                
              </div>
            </li>
            @else
            <li><a href="/login" class="btn btn-outline-info">Login</a></li>
            @endif
                       
           </ul>  
      </div>
     
    </div>
</nav>
</div>
    


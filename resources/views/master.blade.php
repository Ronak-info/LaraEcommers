<!DOCTYPE html>
<html lang="en">
<head>
    <title>master</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <style>
     .trending-wrapper
     {
         margin: 30px;
         padding: 10px;
     }
     img.slider-img
     {
         height: 400px; !important;
     }
     .trending-item
     {
         float: left;
         width: 25%;
       
     }
     .slider{
         
     }
    

 </style>  
</head>
<body>
    {{-- header Start --}}
  {{ View::make('header')}}
     {{-- header End --}}

   
        <div class="content">
            @yield('content')
        </div>
   

  {{-- Footer Start --}}
    {{View::make('footer')}}
   {{-- Footer End --}} 

</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Raleway:wght@600;700&display=swap" rel="stylesheet">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div class="wrap">

        {{-- Background Header Image --}}
        <header class="header" style="background-image:url('{{asset('image/homepage.jpg')}}');">
           <div class="overlay"></div>
        </header>

        {{-- Navigation --}}
       <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
           <div class="container">
               <a class="navbar-brand" href="#">
                   <img src="{{asset('image/refactorylogo.png')}}" alt="" width="125" height="52">
                   </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                </button>
               <div class="collapse navbar-collapse" id="navbarResponsive">
                   <ul class="navbar-nav ml-auto">
                       <li class="nav-item active navbar-right">
                           <a class="nav-link" href="#">Home</a>
                       </li>
                       <li class="nav-item navbar-right">
                           <a class="nav-link" href="#">Courses</a>
                       </li>
                       <li class="nav-item navbar-right">
                           <a class="nav-link " href="#">Custom Trainings</a>
                       </li>
                       <li class="nav-item navbar-right">
                           <a class="nav-link " href="#">Case Studies</a>
                       </li>
                       <li class="nav-item navbar-right">
                           <a class="nav-link " href="#">Blog</a>
                       </li>
                   </ul>
               </div>
           </div>
       </nav>
        
    </div>
    {{-- Content --}}
    <main class="container">

        @yield('content')
    </main>

</body>
    
</html>
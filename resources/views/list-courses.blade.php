@extends('layout.app')

@section('content')
    
    <header>
        
        {{-- Navigation --}}
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-image : linear-gradient(90deg, #2852a2 21.72%, #35B4AE 75.43%); background-color:#35B4AE">
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
                            <a class="nav-link" href="/courses">Courses</a>
                        </li>
                        <li class="nav-item navbar-right">
                            <a class="nav-link " href="#">Road Map</a>
                        </li>
                        <li class="nav-item navbar-right">
                            <a class="nav-link " href="#">Login</a>
                        </li>
                        <li class="nav-item navbar-right">
                            <a class="nav-link " href="#">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>

    {{-- Body Content --}}
    <main class="body-container">
        
            {{-- Course Filter --}}
        <div class="container filter-course">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="first-course-header">
                        <h4>Bagaimana Refactory Course membantu <span class="orange-text">meningkatkan skill</span> anda</h4>
                    </div>
                    <div class="first-course-button">
                        <a href="" type="button" class="btn-link">
                            <span>
                                Pelajari Lebih
                            </span>
                        </a>
                    </div>
                        
                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="{{asset('image/frame.png')}}" alt="" width="550" height="340" style="object-fit: cover;" class="first-course-image">
                </div>
            </div>
        </div>

        {{-- List Course Content --}}
        <div class="container list-course">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="width: 100%; border-radius: 10px" >
                        <img class="card-img-top" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/7V8c3NbFRmHIO0SVxmaw" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                        
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="width: 100%; border-radius: 10px" >
                        <img class="card-img-top" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/7V8c3NbFRmHIO0SVxmaw" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="width: 100%; border-radius: 10px" >
                        <img class="card-img-top" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/7V8c3NbFRmHIO0SVxmaw" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        @include('layout.footer')
    </footer>
   
@endsection

@extends('layout.app')

@section('content')
    <title>Refactory</title>  
    <header>
        
        {{-- Navigation --}}
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top nav-course">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('image/refactorylogo2.png')}}" alt="">
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarResponsive" style="height: 60px;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item navbar-course-right">
                            <a href="/courses">Courses</a>
                        </li>
                        <li class="nav-item navbar-course-right">
                            <a href="https://enroll.refactory.id/roadmap">Road Map</a>
                        </li>
                        <li class="nav-item navbar-course-right">
                            <a href="https://course.refactory.id/sign_in">Login</a>
                        </li>
                        <li class="nav-item ">
                            <a type="button" class="btn btn-lg btn-sign-up" id="header-sign-up-btn" href="https://enroll.refactory.id">
                                Sign Up
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>

    {{-- Body Content --}}
    <main class="body-container">
        
            {{-- Course Filter --}}
        <div class="container filter-course mb-4">
            <div class="d-flex justify-content-between">
                <div class="col-md-4 col-sm-12">
                    Category:
                    <div class="dropdown" style="display: inline-block">
                        <button class="btn btn-secondary dropdown-toggle orange-text bg-transparent border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          All
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">All</a>
                          <a class="dropdown-item" href="#">Web Frontend (1)</a>
                          <a class="dropdown-item" href="#">Backend (6)</a>
                          <a class="dropdown-item" href="#">PHP (3)</a>
                          <a class="dropdown-item" href="#">Python (3)</a>
                          <a class="dropdown-item" href="#">REST API (2)</a>
                          <a class="dropdown-item" href="#">JavaScript (1)</a>
                          <a class="dropdown-item" href="#">Node.Js (1)</a>
                          <a class="dropdown-item" href="#">CLI (2)</a>
                          <a class="dropdown-item" href="#">Git (2)</a>
                          <a class="dropdown-item" href="#">Fundamental (5)</a>
                          <a class="dropdown-item" href="#">Markup (1)</a>
                          <a class="dropdown-item" href="#">Documentation (1)</a>
                          <a class="dropdown-item" href="#">Database (1)</a>
                          <a class="dropdown-item" href="#">NOSQL (1)</a>
                          <a class="dropdown-item" href="#">Vim (1)</a>
                          <a class="dropdown-item" href="#">Code Editor (1)</a>
                          <a class="dropdown-item" href="#">Programming Language (2)</a>
                          <a class="dropdown-item" href="#">Backend Framework (4)</a>
                          <a class="dropdown-item" href="#">Microsesrvices (2)</a>
                          <a class="dropdown-item" href="#">Mobile Dev Basic (6)</a>
                          <a class="dropdown-item" href="#">Hybrid Application (2)</a>
                          <a class="dropdown-item" href="#">Frontend (3)</a>
                          <a class="dropdown-item" href="#">Frontend Framework (5)</a>
                          <a class="dropdown-item" href="#">Devops (2)</a>
                          <a class="dropdown-item" href="#">Kotlin (4)</a>
                          <a class="dropdown-item" href="#">Android (4)</a>
                          <a class="dropdown-item" href="#">Desktop (1)</a>
                          <a class="dropdown-item" href="#">Discussion (2)</a>
                          <a class="dropdown-item" href="#">QA (2)</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <form method="GET" action="/filter-course">
                       
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Find a Course">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>

        {{-- List Course Content --}}
        <div class="container list-course">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6  col-lg-4 pb-3">
                    <div class="card" style="width: 100%; border-radius: 10px">
                        <img class="card-img-top" src="{{asset('image/akses-semua.png')}}" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">

                        <div class="card-body">

                            <div class="card-course-title">
                                <a href="" class="card-title-link">
                                    Akses Semua Materi
                                </a>
                                <p class="card-text">Terdapat puluhan video ter-update setiap bulannya! Jangan lewatkan kesempatan belajar</p>
                            </div>
                           
                            <div class="d-flex align-item-start">
                                <div>
                                    <img src="" alt="" class="rounded-circle">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="card-course-name">39 Course Bundle</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-6  col-lg-4 pb-3">
                    <div class="card" style="width: 100%; border-radius: 10px">
                        <img class="card-img-top" src="{{$list_data[0]['photo_url']}}" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">

                        <div class="card-body">

                            <div class="card-course-title">
                                <a href="" class="card-title-link">
                                    {{$list_data[0]['title']}}
                                </a>
                                <p class="card-text">{{$list_data[0]['short_description']}}</p>
                            </div>
                           
                            <div class="d-flex align-item-start">
                                <div>
                                    <img src="{{$list_data[0]['user']['photo_url']}}" alt="" class="rounded-circle">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="card-course-name">{{$list_data[0]['user']['name']}}</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6  col-lg-4 pb-3">
                    <div class="card" style="width: 100%; border-radius: 10px">
                        <img class="card-img-top" src="{{asset('image/courses-js.png')}}" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">

                        <div class="card-body">

                            <div class="card-course-title">
                                <a href="" class="card-title-link">
                                    JavaScript Introduction
                                </a>
                                <p class="card-text">Mempelajari bahasa pemrograman ini sebagai bahasa pemrograman yang multifungsi pada</p>
                            </div>
                           
                            <div class="d-flex align-item-start">
                                <div>
                                    <img src="{{asset('image/maulana.jpg')}}" alt="" class="rounded-circle">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="card-course-name">Maulana Prambadi</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6  col-lg-4 pb-3">
                    <div class="card" style="width: 100%; border-radius: 10px">
                        <img class="card-img-top" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/mrj7r0DaRHmgwnph8Yr4" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">

                        <div class="card-body">

                            <div class="card-course-title">
                                <a href="" class="card-title-link">
                                    GIT
                                </a>
                                <p class="card-text">
                                    Mengenal  Version Control System sebagai pengetahuan fundamental untuk memulai
                                  </p>
                            </div>
                           
                            <div class="d-flex align-item-start">
                                <div>
                                    <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:30,height:30/https://www.filepicker.io/api/file/bNn2B2IOTX20fy13tukS" alt="" class="rounded-circle">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="card-course-name">Abdur Rohman</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6  col-lg-4 pb-3">
                    <div class="card" style="width: 100%; border-radius: 10px">
                        <img class="card-img-top" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/caGtjMOHRwmUbXBKilHh" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">

                        <div class="card-body">

                            <div class="card-course-title">
                                <a href="" class="card-title-link">
                                    Markdown
                                </a>
                                <p class="card-text">
                                    Mengenal bahasa Markup yang dirancang untuk memformat teks secara lebih ringan.
                                  </p>
                            </div>
                           
                            <div class="d-flex align-item-start">
                                <div>
                                    <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:30,height:30/https://www.filepicker.io/api/file/bNn2B2IOTX20fy13tukS" alt="" class="rounded-circle">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="card-course-name">Abdur Rohman</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6  col-lg-4 pb-3">
                    <div class="card" style="width: 100%; border-radius: 10px">
                        <img class="card-img-top" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/4XrTfry5Qmq2iausrht9" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">

                        <div class="card-body">

                            <div class="card-course-title">
                                <a href="" class="card-title-link">
                                    Github
                                </a>
                                <p class="card-text">
                                    Mengenal software hosting/layanan repository untuk proyek open source.
                                  </p>
                            </div>
                           
                            <div class="d-flex align-item-start">
                                <div>
                                    <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:30,height:30/https://www.filepicker.io/api/file/bNn2B2IOTX20fy13tukS" alt="" class="rounded-circle">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="card-course-name">Abdur Rohman</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6  col-lg-4 pb-3">
                    <div class="card" style="width: 100%; border-radius: 10px">
                        <img class="card-img-top" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/cJU7PAUTy6jZ7C15EeWJ" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">

                        <div class="card-body">

                            <div class="card-course-title">
                                <a href="" class="card-title-link">
                                    Text Editor
                                </a>
                                <p class="card-text">
                                    Panduan menggunakan Text Editor sebagai teknis dasar memulai coding.
                                  </p>
                            </div>
                           
                            <div class="d-flex align-item-start">
                                <div>
                                    <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:30,height:30/https://www.filepicker.io/api/file/bNn2B2IOTX20fy13tukS" alt="" class="rounded-circle">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="card-course-name">Abdur Rohman</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6  col-lg-4 pb-3">
                    <div class="card" style="width: 100%; border-radius: 10px">
                        <img class="card-img-top" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/fFLgoUf4RgWgihYopHdF" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">

                        <div class="card-body">

                            <div class="card-course-title">
                                <a href="" class="card-title-link">
                                    Terminal
                                </a>
                                <p class="card-text pb-3">
                                    Mempelajari penggunaan Terminal pada Linux.
                                  </p>
                            </div>
                           
                            <div class="d-flex align-item-start">
                                <div>
                                    <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:30,height:30/https://www.filepicker.io/api/file/bNn2B2IOTX20fy13tukS" alt="" class="rounded-circle">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="card-course-name">Abdur Rohman</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6  col-lg-4 pb-3">
                    <div class="card" style="width: 100%; border-radius: 10px">
                        <img class="card-img-top" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/FZepRZxDSIOCDTi7myi9" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">

                        <div class="card-body">

                            <div class="card-course-title">
                                <a href="" class="card-title-link">
                                    Dart
                                </a>
                                <p class="card-text">
                                    Mempelajari bahasa pemrograman yang dioptimalkan untuk aplikasi pada berbagai
                                  </p>
                            </div>
                           
                            <div class="d-flex align-item-start">
                                <div>
                                    <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:30,height:30/https://www.filepicker.io/api/file/bNn2B2IOTX20fy13tukS" alt="" class="rounded-circle">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="card-course-name">Abdur Rohman</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6  col-lg-4 pb-3">
                    <div class="card" style="width: 100%; border-radius: 10px">
                        <img class="card-img-top" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/DAlKGHwTYGEbLhBSgCTZ" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">

                        <div class="card-body">

                            <div class="card-course-title">
                                <a href="" class="card-title-link">
                                    Live Discussion Record
                                </a>
                                <p class="card-text">
                                    Online Meeting Records
                                  </p>
                            </div>
                           
                            <div class="d-flex align-item-start pb-4">
                                <div>
                                    <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:30,height:30/https://www.filepicker.io/api/file/ZKfwV0ieQvG5z9eQ2jcC" class="rounded-circle">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="card-course-name">Maulana Prambadi</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6  col-lg-4 pb-3">
                    <div class="card" style="width: 100%; border-radius: 10px">
                        <img class="card-img-top" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/YprK0ATmSLikDSj50kpO" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">

                        <div class="card-body">

                            <div class="card-course-title">
                                <a href="" class="card-title-link">
                                    Vue JS Introduction
                                </a>
                                <p class="card-text">
                                    Framework yang dibangun dengan bahasa javascript untuk membangun antarmuka web.
                                  </p>
                            </div>
                           
                            <div class="d-flex align-item-start">
                                <div>
                                    <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:30,height:30/https://www.filepicker.io/api/file/Bo1HhacuSKKbdaG8rWkq" class="rounded-circle">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="card-course-name">Mulia Nasution</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6  col-lg-4 pb-3">
                    <div class="card" style="width: 100%; border-radius: 10px">
                        <img class="card-img-top" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/PUn9Ng6ARZ60bttI4fnF" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px">

                        <div class="card-body">

                            <div class="card-course-title">
                                <a href="" class="card-title-link">
                                    Docker
                                </a>
                                <p class="card-text">
                                    Docker bisa disebut sebagai platform yang dibangun dengan teknologi container sebagai
                                  </p>
                            </div>
                           
                            <div class="d-flex align-item-start">
                                <div>
                                    <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:30,height:30/https://www.filepicker.io/api/file/49uq5UgSCxsfJItK4KQb" class="rounded-circle">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="card-course-name">Sholahuddin</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
              
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next ></a></li>
                  <li class="page-item"><a class="page-link" href="#">Last >></a></li>
                </ul>
            </nav>
        </div>

    </main>

    <footer>
        @include('layout.footer2')
    </footer>
   
@endsection

@extends('layout.app')

@section('content')
<title>HTML - CSS Introduction | Refactory</title>
    <header>

        {{-- Background Header Image --}}
        <div class="detail-header-image" style="background-image:url('{{asset('image/htmlcourseintro.gif')}}');">
             {{-- Header Content --}}
            <div class="container">
                <div class="detail-container">
                    <h1>
                        HTML & CSS Introduction
                    </h1>
                    <p>
                        <span>HTML</span> dan <span>CSS</span> adalah materi dasar untuk pengembangan web. Setiap web developer harus memiliki pengetahuan dasar setidaknya HTML dan CSS.

                    </p>
                    <div class="detail-button">
                        <a href="" type="button" class="btn-link">
                            <span>
                                Mulai Belajar
                            </span>
                        </a>
                    </div>
                </div>
            </div>
           
        </div>

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
                            <a href="#">Road Map</a>
                        </li>
                        <li class="nav-item navbar-course-right">
                            <a href="#">Login</a>
                        </li>
                        <li class="nav-item navbar-course-right">
                            <a href="#">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>

    {{-- Body Content --}}
    <main class="body-container text-center">
    
        {{-- First Content --}}
        <div class="container first-content">
            <h3>Tentang Course</h3>
            <p class="first-content-desc">
               {{$detail_data['short-description']}}
            </p>
               
        </div>

        
            {{-- Second Content --}}
        <div class="second-content">
            <div class="container">
                <h3 class="mb-5">Materi Course</h3>
                <div class="materi-course">
                    
                    <table class="table border w-50 m-auto">
                        <thead style="background-color:#E8E8E8">
                            <tr>
                                <th scope="col" class="text-left" style="border-bottom: 1px solid #fff">{{ $detail_materi['section']}}</th>
                                <th scope="col" style="border-bottom: 1px solid #fff"></th>
                            </tr>
    
                        </thead>
                        <tbody class="bg-secondary border-bottom-0">
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    {{ $detail_materi_data[0]['title']}} ( {{ $detail_materi_data[0]['time-in']}} )
                                </td>
                                <td class="text-right">
                                    <a href=" {{ $detail_materi_data[0]['url']}}" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>

            {{-- Third Content --}}
        <div class="container third-content">
            <div class="row">
                <div class="col-md-6 pb-5">
                    <img src="{{$detail_data['quistion-photo']}}" alt="">
                </div>
                <div class="col-md-6 pt-5 text-left">
                    <h2>
                        {{$detail_data['quistion']}}
                    </h2>
                    <p>{{$detail_data['answer']}}</p>
                </div>
            </div>
        </div>

    </main>

    <footer>
        @include('layout.footer2')
    </footer>
   
@endsection

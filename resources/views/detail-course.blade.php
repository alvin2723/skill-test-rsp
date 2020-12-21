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

    {{-- Detail Content --}}
    <main class="body-container text-center">
    
        {{-- First Detail --}}
        <div class="container first-detail">
            <h3 class="detail-body-header">Tentang Course</h3>
            <p class="first-detail-desc">
               {{$detail_data['short-description']}}
            </p>
               
        </div>

        
            {{-- Second Detail --}}
        <div class="second-detail">
            <div class="container">
                <h3 class="detail-body-header">Materi Course</h3>
                <div class="materi-course">
                    
                    <table class="table border mx-auto pb-5">
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
                                    {{ $detail_materi_data[0]['title']}} ({{ $detail_materi_data[0]['time-in']}})
                                </td>
                                <td class="text-right">
                                    <a href=" {{ $detail_materi_data[0]['url']}}" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Atribut dan Tag HTML
                                    (16:26)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Hello World
                                    (6:46)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Heading
                                    (8:52)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Paragraf
                                    (7:37)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Spasi dalam HTML
                                    (11:27)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Sematic Tag
                                    (11:27)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    List
                                    (6:30)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Tautan
                                    (16:35)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Menampilkan Gambar
                                    (13:56)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Tabel
                                    (17:25)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>

                    <table class="table border mx-auto pb-5">
                        <thead style="background-color:#E8E8E8">
                            <tr>
                                <th scope="col" class="text-left" style="border-bottom: 1px solid #fff">HTML Forms</th>
                                <th scope="col" style="border-bottom: 1px solid #fff"></th>
                            </tr>
    
                        </thead>
                        <tbody class="bg-secondary border-bottom-0">
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                   Pengenalan Form (12:48)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Membuat Form Pertama 1
                                    (16:09)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Membuat Form Pertama 2
                                    (7:30)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Pengelompokan Form
                                    (9:19)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Validasi Form
                                    (9:48)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table border mx-auto pb-5">
                        <thead style="background-color:#E8E8E8">
                            <tr>
                                <th scope="col" class="text-left" style="border-bottom: 1px solid #fff">HTML Ekstra Tag</th>
                                <th scope="col" style="border-bottom: 1px solid #fff"></th>
                            </tr>
    
                        </thead>
                        <tbody class="bg-secondary border-bottom-0">
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                   Komentar dalam HTML (6:32)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Atribut Id dan Class
                                    (6:52)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Grup Elemen
                                    (10:59)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="border-top: 1px solid #fff">
                                    <span class="course-logo pr-2">
                                       <img src="{{asset('image/youtube.svg')}}" alt="" class="pb-1">
                                    </span>
                                    Menyematkan Maps di HTML
                                    (6:32)
                                </td>
                                <td class="text-right">
                                    <a href="" type="button" class="btn btn-sm start-button mb-1">
                                        START
                                    </a>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>

            {{-- Third Detail --}}
        <div class="container">
            <div class="third-detail">
                <div class="third-detail-left">
                    <img src="{{$detail_data['quistion-photo']}}" alt="" class="third-detail-img">
                </div>
                <div class="third-detail-right">
                    <h2 class="third-detail-header">
                        {{$detail_data['quistion']}}
                    </h2>
                    <p class="third-detail-right-desc">{{$detail_data['answer']}}</p>
                </div>
            </div>
        </div>

    </main>

    <footer>
        @include('layout.footer2')
    </footer>
   
@endsection

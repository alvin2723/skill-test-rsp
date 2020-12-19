@extends('layout.app')

@section('content')
<title>Home - Refactory</title>
    <header>

        {{-- Background Header Image --}}
        <div class="header-image" style="background-image:url('{{asset('image/homepage.jpg')}}');">
            <div class="overlay" style="background-image: linear-gradient(110deg, #00256C 10%, #04ACA4 90%);"></div>
             {{-- Header Content --}}
            <div class="head-container">
                <div class="row">
                    <div class="col-md-10 col-sm-12">
                        <div class="row head-content">
                            <div class="col-md-12 head-header">
                                <h1>
                                    Empowering <span class="orange-text">People</span> Through Programming
                                </h1>
                            </div>
                            <div class="col-md-12 head-desc">
                                <p>
                                    Refactory adalah perusahaan edukasi dan teknologi yang menyediakan layanan lengkap berupa course maupun custom training yang materinya dapat disesuaikan dengan kebutuhan teknologi dan bisnis perusahaan Anda.
                                </p>
                            </div>
                        </div>
                        <div class="row head-button">
                            <div class="col-md-6 col-sm-12">
                                <a href="" type="button" class="btn-left">
                                    <span>
                                        Temukan Solusi Anda
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a href="" type="button" class="btn-right">
                                    <span>
                                        Tingkatkan Skill Anda
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12">
                    </div>
                </div>
            </div>
            <div class="partner text-light">
                <p style="partner-text">PARTNER EKSLUSIF KAMI</p>
                <div class="partner-widget">

                    sdfsdfsdf
                </div>
            </div>
        </div>

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
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li class="nav-item navbar-right">
                            <a class="nav-link" href="/courses">Courses</a>
                        </li>
                        <li class="nav-item navbar-right">
                            <a class="nav-link" href="#">Custom Trainings</a>
                        </li>
                        <li class="nav-item navbar-right">
                            <a class="nav-link" href="#">Case Studies</a>
                        </li>
                        <li class="nav-item navbar-right">
                            <a class="nav-link" href="/blog">Blog</a>
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
                <h2>Apa Yang Refactory dapat Bantu?</h2>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{asset('image/material_approval.png')}}" alt=""class="pb-3">
                            </div>
                            <div class="col-md-12">
                                <h3>Memperkuat Tim Engineer Anda</h3>
                                <p class="first-content-desc">
                                    Bisnis di jaman modern membutuhkan keterampilan pengembangan terbaik untuk meningkatkan skala produk. Kami dapat mempersiapkan course dan juga dapat menyediakan tim yang menangani kebutuhan digital Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{asset('image/material_bolt.png')}}" alt="" class="pb-3">
                            </div>
                            <div class="col-md-12">
                                <h3>Wujudkan Software Impian Anda</h3>
                                <p class="bantu-desc">Kami adalah perusahaan One-Stop IT Solution untuk proyek Anda, membantu di setiap tahap mulai dari menyusun ide, melalui desain dan pengembangan aplikasi seluler, situs web dan aplikasi desktop, hingga peluncuran produk.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

            {{-- Second Content --}}
        <div class="second-content" style="background-image:url('{{asset('image/ripple-bg.png')}}')">
            <div class="container">
                <h5>INSIGHT TERBARU</h5>
                <h2>Knowledge Sharing</h2>
            </div>
        </div>

            {{-- Third Content --}}
        <div class="container third-content">
            <a href="" class="third-content-link">Lihat Semua <i aria-hidden="true" class="fas fa-arrow-right"></i></a>  
        </div>

            {{-- Fourth Content --}}
        <div class="fourth-content">
            <div class="container">
                <h2>AS SEEN ON</h2>
                <div class="widget">
                    <div>
                            <img src="{{asset('image/material_approval.png')}}" alt=""class="pb-3">
                    </div>
                    <div>
                        <img src="{{asset('image/material_approval.png')}}" alt=""class="pb-3">
                    </div>
                    <div>
                        <img src="{{asset('image/material_approval.png')}}" alt=""class="pb-3">
                    </div>
                    <div>
                        <img src="{{asset('image/material_approval.png')}}" alt=""class="pb-3">
                    </div>
                    <div>
                        <img src="{{asset('image/material_approval.png')}}" alt=""class="pb-3">
                    </div>
                    <div>
                        <img src="{{asset('image/material_approval.png')}}" alt=""class="pb-3">
                    </div>
                   
                </div>
            </div>
        </div>
    </main>

    <footer>
        @include('layout.footer')
    </footer>
   
@endsection

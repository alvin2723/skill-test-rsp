@extends('layout.app')

@section('content')
<title>Home - Refactory</title>
    <header>

        {{-- Background Header Image --}}
        <div class="header-image" style="background-image:url('{{asset('image/homepage.jpg')}}');">
            <div class="overlay" style="background-image: linear-gradient(110deg, #00256C 10%, #04ACA4 90%);"></div>

            <nav class="navbar navbar-expand-md navbar-dark absolute-top nav-content">
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
            
             {{-- Header Content --}}
            <div class="container">
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
            </div>
            
            <div class="partner text-light">
                <p style="partner-text">PARTNER EKSLUSIF KAMI</p>

                <div class="partner-widget">
                    <div class="container">
                       
                        <div id="partnerCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item no-gutters active pt-2">
                                    <div class="row d-flex justify-content-between">
                                        <div class="mr-5" class="carousel-icon">
                                            <img src="{{asset('image/gojek.png')}}" alt=""  style="object-fit:contain;">
                                        </div>
                                        <div class="mr-5" class="carousel-icon">
                                            <img src="{{asset('image/univterbuka.png')}}" alt="" style="object-fit:contain;">
                                        </div>
                                        <div class="mr-5" class="carousel-icon">
                                            <img src="{{$partner_data[2]['photo_url']}}" alt=""  style="object-fit:contain;">
                                        </div>
                                        <div class="mr-5" class="carousel-icon">
                                            <img src="{{asset('image/pindad.png')}}" alt=""  style="object-fit:contain;">
                                        </div>
                                        <div class="mr-5" class="carousel-icon">
                                            <img src="{{asset('image/mandiri.png')}}" alt=""  style="object-fit:contain;">
                                        </div>
                                        <div class="mr-5" class="carousel-icon">
                                            <img src="{{asset('image/mitsubishi.png')}}" alt=""  style="object-fit:contain;">
                                        </div>
                                    </div>

                                </div>
                                <div class="carousel-item no-gutters ">
                                    <div class="row d-flex justify-content-between">
                                        <div class="mr-5" class="carousel-icon">
                                            <img src="{{$partner_data[0]['photo_url']}}" alt="" style="object-fit:contain;">
                                        </div>
                                        <div class="mr-5" class="carousel-icon">
                                            <img src="{{asset('image/gigagame.png')}}" alt=""  style="object-fit:contain;">
                                        </div>
                                        <div class="mr-5" class="carousel-icon">
                                            <img src="{{asset('image/yobalk.png')}}" alt="" style="object-fit:contain;">
                                        </div>
                                        <div class="mr-5" class="carousel-icon">
                                            <img src="{{asset('image/berliansistem.png')}}" alt="" style="object-fit:contain;">
                                        </div>
                                        <div class="mr-5" class="carousel-icon">
                                            <img src="{{$partner_data[1]['photo_url']}}" alt=""  style="object-fit:contain;">
                                        </div>
                                        <div class="mr-5" class="carousel-icon">
                                            <img src="{{asset('image/um.png')}}" alt=""  style="object-fit:contain;">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>

        {{-- Navigation --}}
       
    </header>

    {{-- Body Content --}}
    <main class="body-container text-center">
    
        {{-- First Content --}}
        <div class="container">
                <h2>Apa Yang Refactory dapat Bantu?</h2>
                <div class="first-content pt-5">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{asset('image/material_bolt.png')}}" alt="" class="pb-3">
                            </div>
                            <div class="col-md-12">
                                <h3>Wujudkan Software Impian Anda</h3>
                                <p class="first-content-desc">Kami adalah perusahaan One-Stop IT Solution untuk proyek Anda, membantu di setiap tahap mulai dari menyusun ide, melalui desain dan pengembangan aplikasi seluler, situs web dan aplikasi desktop, hingga peluncuran produk.</p>
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
                <div class="row fourth-widget-content">
                   
                    <div class="col-lg-2 col-sm-6 col-xs-6 fourth-widget">
                        <a href="https://www.cnnindonesia.com/teknologi/20171007074240-192-246767/menakar-peluang-karier-ahli-bahasa-pemrograman-di-indonesia/">
                            <img src="{{$seen_data[1]['photo_url']}}" alt=""style="object-fit:contain; padding-top:1rem;">
                        </a>
                        
                    </div>
                    <div class="col-lg-2 col-sm-6 col-xs-6 fourth-widget">
                        <a href="https://www.medcom.id/teknologi/news-teknologi/ob3Bgq8N-startup-refactory-ingin-naikkan-level-programmer-indonesia">
                            <img src="{{asset('image/medcom.png')}}" alt=""  style="object-fit:contain">
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-xs-6 fourth-widget">
                        <a href="https://www.beritasatu.com/archive/451323/coder-dan-programmer-komputer-paling-dicari-di-dunia-kerja-modern">
                            <img src="{{asset('image/beritasatu.png')}}" alt="" style="object-fit:contain;padding-top:1.2rem;">
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-xs-6 fourth-widget">
                        <a href="https://kumparan.com/aditya-panji/melihat-peluang-di-tengah-kebutuhan-profesi-programmer-di-indonesia">
                            <img src="{{asset('image/kumparan.png')}}" alt=""  style="object-fit:contain;padding-top:0.6125rem;">
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-xs-6 fourth-widget">
                        <a href="https://tech.idntimes.com/trend/indra/bukti-belajar-coding-itu-keren-refactory-resmi-wisuda-13-lulusan-siap-saing">
                            <img src="{{$seen_data[0]['photo_url']}}" alt="" style="object-fit:contain;padding-top:1rem;">
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-xs-6 fourth-widget">
                        <a href="http://m.viva.co.id/digital/955039-pasar-coding-di-indonesia-masih-terbuka-lebar">
                            <img src="{{asset('image/viva.png')}}" alt="" style="object-fit:contain;padding-top:0.6rem;">
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-none col-xs-6 fourth-widget-clear">
                       
                    </div>
                    <div class="col-lg-2 col-sm-6 col-xs-6 fourth-widget">
                        <a href="https://mediaindonesia.com/humaniora/122152/5-peluang-pekerjaan-untuk-para-coder">
                            <img src="{{$seen_data[2]['photo_url']}}" alt="" >
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-xs-6 fourth-widget">
                        <a href="https://m.tribunnews.com/techno/2017/09/25/programmer-semakin-menjanjikan-refactory-pilih-yogyakarta-jadi-markas-kedua">
                            <img src="{{asset('image/tribun.png')}}" alt="" style="object-fit:contain;padding-top:1.5rem;">
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-xs-6 fourth-widget">
                        <a href="https://www.jawapos.com/oto-dan-tekno/teknologi/26/09/2017/bawa-misi-ini-bos-refactory-id-pilih-jogja-jadi-markas-kedua/">
                            <img src="{{asset('image/jawapos.png')}}" alt="" >
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-xs-6 fourth-widget">
                        <a href="https://inilah.com/ototekno/2403411/peran-coder-dan-programer-indonesia-di-masa-depan">
                            <img src="{{asset('image/inilahcom.png')}}" alt="" style="object-fit:contain;padding-top:1.5rem;">
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-xs-6 fourth-widget-clear">
                        
                    </div>
                      
                </div>
               
            </div>
        </div>
    </main>

    <footer>
        @include('layout.footer')
    </footer>
    
@endsection

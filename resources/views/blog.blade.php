@extends('layout.app')


@section('content')
    <div class="wrap">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
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
                            <a class="nav-link" href="#">Courses</a>
                        </li>
                        <li class="nav-item navbar-right">
                            <a class="nav-link " href="#">Custom Trainings</a>
                        </li>
                        <li class="nav-item navbar-right">
                            <a class="nav-link " href="#">Case Studies</a>
                        </li>
                        <li class="nav-item navbar-right">
                            <a class="nav-link " href="/blog">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>

    <main class="container">
        <div class="row mx-md-n5 mt-5">
            <div class="col-8 px-md-5">
                <div class="p-3 ">
                    <img src="https://i1.wp.com/refactory.id/wp-content/uploads/2020/02/063-Refactory-HDYBAP017.jpg?fit=768%2C402&amp;ssl=1" alt="How Did You Become A Programmer?" class="jetpack-lazy-image jetpack-lazy-image--handled" data-lazy-loaded="1">
                    <p class="mt-3" style="color: Orange;">
                        GROWTH & CULTURE
                    </p>
                    <a href="#">
                        <h2 style="color: black;">
                            Did You Become A Programmer
                        </h2>
                    </a>
                    <span>Post Categories Blog Engineering Profile Tutorial Tips & Trick Growth & Culture Newsroom Promo X Case Studies Training PT Gigaming Intermedia Solusindo BY Isna | July 16, 2020</span>
                    <a href="#">
                        <p class="mt-3" style="color: Orange;">
                            BACA ARTIKEL
                        </p>
                    </a>
                </div>
                <div class="row mx-md-n5 mt-5">
                    <div class="col-5 px-md-5">
                        <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/061-Refactory-TempatYangAsyikUntukBelajarSecaraRemote011.jpg?fit=768%2C403&amp;ssl=1" width="270px" height="180px">
                        <p class="mt-3" style="color: Orange;">
                            TIPS & TRICK
                        </p>
                        <h4>Tempat Yang Asik Untuk Belajar Secara Remote</h4>
                        <span>Berpikir tentang tempat-tempat yang menarik untuk hangout bersama teman-teman</span>
                        <p class="mt-3" style="color: Orange;">
                            BACA ARTIKEL
                        </p>
                    </div>

                    <div class="col-5 px-md-5">
                        <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/IMG_4371-scaled.jpg?fit=768%2C512&amp;ssl=1" width="270px" height="180px">
                        <p class="mt-3" style="color: Orange;">
                            NEWSROOM
                        </p>
                        <h4>Bank Mandiri Gandeng Refactory Tingkat SDM IT</h4>
                        <span>Bank milik pemerintah, Bank Mandiri mengandeng bootcamp informasi</span>
                        <p class="mt-3" style="color: Orange;">
                            BACA ARTIKEL
                        </p>
                    </div>
                </div>
                <div class="row mx-md-n5 mt-5">
                    <div class="col-5 px-md-5">
                        <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/060-Refactory-Part1MembangunMicroserviceSederhanaMenggunakanGOGOMicro011-1.png?fit=768%2C403&amp;ssl=1" width="300x" height="180px">
                        <p class="mt-3" style="color: Orange;">
                            ENGINEERING
                        </p>
                        <h4>Part 1: Membangun Microservice Sederhana Menggunakan GO – GO Micro</h4>
                        <span>Ada baiknya sebelum memulai ngoding (mohon bersabar ya..) kita mengenal</span>
                        <p class="mt-3" style="color: Orange;">
                            BACA ARTIKEL
                        </p>
                    </div>
                    <div class="col-5 px-md-5">
                        <img src="https://i1.wp.com/refactory.id/wp-content/uploads/2020/02/059-Refactory-10HalPentingSebelumMengikutiOnlineBootcamp012.png?fit=768%2C403&amp;ssl=1" width="300px" height="182px">
                        <p class="mt-3" style="color: Orange;">
                            TIPS & TRICK
                        </p>
                        <h4>10 Hal Penting Dalam Memilih Online Bootcamp</h4>
                        <span>Tentunya berbagai alasan kita untuk mengikuti coding bootcamp, di antaranya</span>
                        <p class="mt-3" style="color: Orange;">
                            BACA ARTIKEL
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 px-md-5">
                <p style="color: orange;"> HUBUNGKAN DENGAN KAMI</p>
                <h4>Ikuti refactory</h4>
                <div class="row">
                    <button type="button" class="btn btn-primary btn-lg btn-floating rounded-pill">
                        <i class="fab fa-linkedin-in"></i>
                    </button>
                    <p class="mx-3">Linkedin</p>
                </div>
                <div class="row">
                    <button type="button" class="btn btn-primary btn-lg btn-floating rounded-pill">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <p class="mx-3">Facebook</p>
                </div>
                <div class="row">
                    <button type="button" class="btn btn-primary btn-lg btn-floating rounded-pill">
                        <i class="fab fa-instagram"></i>
                    </button>
                    <p class="mx-3">Instagram</p>
                </div>
                <div class="row">
                    <button type="button" class="btn btn-primary btn-lg btn-floating rounded-pill">
                        <i class="fab fa-youtube"></i>
                    </button>
                    <p class="mx-3">Youtube</p>
                </div>
                <div class="p-3 bg-secondary">
                    <p class="text-center" style="color: orange;"> ARTIKEL POPULER</p>
                    <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/060-Refactory-Part1MembangunMicroserviceSederhanaMenggunakanGOGOMicro011-1.png?fit=768%2C403&amp;ssl=1" width="270px" height="180px">
                    <a href="#">
                        <p class="mt-3" style="color: Orange;">
                            E N G I N E E R I N G
                        </p>
                    </a>
                    <a href="#" style="color: black;">Bekerja Dengan Tiket: Bagian l</a>
                    <a href="#">
                        <p class="mt-3" style="color: Orange;">
                            BACA ARTIKEL
                        </p>
                    </a>
                    <img src="https://i1.wp.com/refactory.id/wp-content/uploads/2020/02/059-Refactory-10HalPentingSebelumMengikutiOnlineBootcamp012.png?fit=768%2C403&amp;ssl=1" width="262px" height="138px">
                    <a href="#">
                        <p class="mt-3" style="color: Orange;">
                            TIPS & TRICK
                        </p>
                    </a>
                    <a href="#" style="color: black;">10 Hal Penting Dalam Memilih Online BootCamp</a>
                    <a href="#">
                        <p class="mt-3" style="color: Orange;">
                            BACA ARTIKEL
                        </p>
                    </a>
                    <div class="col text-center">
                        <button type="button" style="border-radius: 15px;" class="btn btn-outline-warning">Artikel Lain -></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-md-n5 mt-5">
            <div class="container text-center bg-secondary">
                <div class="glide mt-3">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide"><img src="https://i1.wp.com/refactory.id/wp-content/uploads/2020/02/059-Refactory-10HalPentingSebelumMengikutiOnlineBootcamp012.png?fit=768%2C403&amp;ssl=1" width="262px" height="138px"></li>
                            <li class="glide__slide"><img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/060-Refactory-Part1MembangunMicroserviceSederhanaMenggunakanGOGOMicro011-1.png?fit=768%2C403&amp;ssl=1" width="270px" height="180px"></li>
                            <li class="glide__slide"><img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/008-Refactory-PerempuanDiPusaranIndustriTeknologi021.jpg?fit=560%2C420&ssl=1" width="262px" height="138px"></li>
                            <li class="glide__slide"><img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/061-Refactory-TempatYangAsyikUntukBelajarSecaraRemote011.jpg?fit=768%2C403&ssl=1" width="262px" height="138px"></li>
                            <li class="glide__slide"><img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/IMG_4371-scaled.jpg?fit=768%2C512&ssl=1" width="262px" height="138px"></li>
                            <li class="glide__slide"><img src="https://i0.wp.com/refactory.id/wp-content/uploads/2020/02/049-Refactory-SingleControllerPadaLaravel011.png?fit=560%2C420&ssl=1" width="262px" height="138px"></li>
                        </ul>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><
                        </button> 
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"> >
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main> 
@endsection
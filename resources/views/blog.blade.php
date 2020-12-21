@extends('layout.app')


@section('content')


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('image/refactorylogo.png')}}" alt="" width="125" height="52">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item navbar-right">
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
<!-- Navigation 2 -->
<nav class="navbar navbar-expand-lg navbar-style2 bg-style2">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item active navbar-right">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item navbar-right">
                    <a class="nav-link text-light" href="#">Engineering</a>
                </li>
                <li class="nav-item navbar-right">
                    <a class="nav-link text-light" href="#">Profile</a>
                </li>
                <li class="nav-item navbar-right">
                    <a class="nav-link text-light" href="#">Turtorial</a>
                </li>
                <li class="nav-item navbar-right">
                    <a class="nav-link text-light" href="/blog">Tips & Trick</a>
                </li>
                <li class="nav-item navbar-right">
                    <a class="nav-link text-light" href="/blog">Growth & Culture</a>
                </li>
                <li class="nav-item navbar-right">
                    <a class="nav-link text-light" href="/blog">Newsroom</a>
                </li>
                <li class="nav-item navbar-right">
                    <a class="nav-link text-light" href="/blog">Promo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<main>
    <div class="container">
        <div class="row mx-md-n5 mt-5">
            <div class="col-8 px-md-5">
                <div class="p-3 ">
                    <img src="https://i1.wp.com/refactory.id/wp-content/uploads/2020/02/063-Refactory-HDYBAP017.jpg?fit=768%2C402&amp;ssl=1" alt="How Did You Become A Programmer?" class="jetpack-lazy-image jetpack-lazy-image--handled rounded" style="width: 700px;" data-lazy-loaded="1">
                    <p class="mt-3 subju1">
                        GROWTH & CULTURE
                    </p>
                    <a href="/becomeprogrammer">
                        <p class="subju2">
                            Did You Become A Programmer
                        </p>
                    </a>
                    <p class="isi">Post Categories Blog Engineering Profile Tutorial Tips & Trick Growth & Culture Newsroom Promo X Case Studies Training PT Gigaming Intermedia Solusindo BY Isna | July 16, 2020</p>
                    <a href="#">
                        <p class="mt-3 bacaAr">
                            BACA ARTIKEL
                        </p>
                    </a>
                </div>
                <!-- Gambar 1 -->
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/061-Refactory-TempatYangAsyikUntukBelajarSecaraRemote011.jpg?fit=768%2C403&amp;ssl=1" style="width: 100%;" height="182.6px" class="rounded">
                            </div>
                            <div class="col-md-12">
                                <p class="mt-3 subju1">
                                    T I P S & T R I C K
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p class="subju3">Tempat Yang Asik Untuk Belajar Secara Remote</p>
                            </div>
                            <div class="col-md-12">
                                <p class="isi">Berpikir tentang tempat-tempat yang menarik untuk hangout bersama teman-teman</p>
                            </div>
                            <div class="col-md-12">
                                <p class="bacaAr">
                                    BACA ARTIKEL
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Gambar 2 -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/IMG_4371-scaled.jpg?fit=768%2C512&amp;ssl=1" style="width: 100%;" height="232px" class="rounded">
                            </div>
                            <div class="col-md-12">
                                <p class="mt-3 subju1">
                                    N E W S R O O M
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p class="subju3">Bank Mandiri Gandeng Refactory Tingkat SDM IT</p>
                            </div>
                            <div class="col-md-12">
                                <p class="isi">Bank milik pemerintah, Bank Mandiri mengandeng bootcamp informasi</p>
                            </div>
                            <div class="col-md-12">
                                <p class="bacaAr">
                                    BACA ARTIKEL
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gambar 3 -->
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/060-Refactory-Part1MembangunMicroserviceSederhanaMenggunakanGOGOMicro011-1.png?fit=768%2C403&amp;ssl=1" style="width: 100%;" height="182.6px" class="rounded">
                            </div>
                            <div class="col-md-12">
                                <p class="mt-3 subju1">
                                    E N G I N E E R I N G
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p class="subju3">Part 1: Membangun Microservice Sederhana Menggunakan GO – GO Micro</p>
                            </div>
                            <div class="col-md-12">
                                <p class="isi">Ada baiknya sebelum memulai ngoding (mohon bersabar ya..) kita mengenal</p>
                            </div>
                            <div class="col-md-12">
                                <p class="bacaAr">
                                    BACA ARTIKEL
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Gambar 4 -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="https://i1.wp.com/refactory.id/wp-content/uploads/2020/02/059-Refactory-10HalPentingSebelumMengikutiOnlineBootcamp012.png?fit=768%2C403&amp;ssl=1" style="width: 100%;" height="182.6px" class="rounded">
                            </div>
                            <div class="col-md-12">
                                <p class="mt-3 subju1">
                                    TIPS & TRICK
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p class="subju3">10 Hal Penting Dalam Memilih Online Bootcamp</p>
                            </div>
                            <div class="col-md-12">
                                <p class="isi">Tentunya berbagai alasan kita untuk mengikuti coding bootcamp, di antaranya</p>
                            </div>
                            <div class="col-md-12">
                                <p class="bacaAr">
                                    BACA ARTIKEL
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 px-md-5">
                <h3 class="hub-dex"> HUBUNGKAN DENGAN KAMI</h3>
                <h4 class="ikut-dex my-3">Ikuti refactory</h4>
                <div class="row">
                    <button type="button" class="btn-icon btn-primary rounded-circle">
                        <i class="fab fa-linkedin-in" style="font-size:25px; padding-right:5px; padding-left:5px"></i>
                    </button>
                    <p class="mx-3 py-4">Linkedin</p>
                </div><br>
                <div class="row">
                    <button type="button" class="btn-icon btn-primary rounded-circle">
                        <i class="fab fa-facebook-f" style="font-size:25px; padding-right:10px; padding-left:10px"></i>
                    </button>
                    <p class="mx-3 py-4">Facebook</p>
                </div>
                <br>
                <div class="row">
                    <button type="button" class="btn-icon btn-primary rounded-circle ">
                        <i class="fab fa-instagram fa-lg" style="font-size:25px; padding-right:5px; padding-left:5px"></i>
                    </button>
                    <p class="mx-3 py-4">Instagram</p>
                </div>
                <br>
                <div class="row">
                    <button type="button" class="btn-icon btn-primary rounded-circle ">
                        <i class="fab fa-youtube fa-lg " style="font-size:25px; padding-right:3px; padding-left:3px"></i>
                    </button>
                    <p class="mx-3 py-4">Youtube</p>
                </div>
                <br><br><br><br>
                <div class="p-3 bg-secondary">
                    <p class="text-center artpop"> ARTIKEL POPULER</p>
                    <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/060-Refactory-Part1MembangunMicroserviceSederhanaMenggunakanGOGOMicro011-1.png?fit=768%2C403&amp;ssl=1" width="270px" height="180px" class="rounded">
                    <a href="#">
                        <p class="mt-3 engi">
                            E N G I N E E R I N G
                        </p>
                    </a>
                    <a href="#" class="engi-desc">Bekerja Dengan Tiket: Bagian l</a>
                    <a href="#">
                        <p class="mt-3 bacaAr">
                            BACA ARTIKEL
                        </p>
                    </a>
                    <img src="https://i1.wp.com/refactory.id/wp-content/uploads/2020/02/059-Refactory-10HalPentingSebelumMengikutiOnlineBootcamp012.png?fit=768%2C403&amp;ssl=1" width="262px" height="138px" class="rounded">
                    <a href="#">
                        <p class="mt-3 engi">
                            T I P S & T R I C K
                        </p>
                    </a>
                    <a href="#" class="engi-desc">10 Hal Penting Dalam Memilih Online BootCamp</a>
                    <a href="#">
                        <p class="mt-3 bacaAr">
                            BACA ARTIKEL
                        </p>
                    </a>
                    <div class="col text-center">
                        <button type="button" style="border-radius: 15px; border-color:#e48800; color:#e48800" class="btn">Artikel Lain <i aria-hidden="true" class="fas fa-arrow-right"></i></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="text-center bg-secondary py-5">
        <h4 class="my-4 ArtUn">Artikel Unggulan</h4>
        <div id="artikelcarouselcontrol" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <img class="d-block w-100" src="..." alt="First slide"> -->
                    <div class="row d-flex justify-content-center align-item-center">
                        <div class="col-lg-3">
                            <img src="https://i1.wp.com/refactory.id/wp-content/uploads/2020/02/059-Refactory-10HalPentingSebelumMengikutiOnlineBootcamp012.png?fit=768%2C403&amp;ssl=1" width="335px" height="175px" class="rounded"></li>
                        </div>
                        <div class="col-lg-3">
                            <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/060-Refactory-Part1MembangunMicroserviceSederhanaMenggunakanGOGOMicro011-1.png?fit=768%2C403&amp;ssl=1" width="335px" height="175px" class="rounded"></li>
                        </div>
                        <div class="col-lg-3">
                            <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/008-Refactory-PerempuanDiPusaranIndustriTeknologi021.jpg?fit=560%2C420&ssl=1" width="335px" height="175px" class="rounded"> </li>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex justify-content-center align-item-center">
                        <div class="col-lg-3">
                            <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/061-Refactory-TempatYangAsyikUntukBelajarSecaraRemote011.jpg?fit=768%2C403&ssl=1" width="335px" height="175px" class="rounded"></li>
                        </div>
                        <div class="col-lg-3">
                            <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/IMG_4371-scaled.jpg?fit=768%2C512&ssl=1" width="335px" height="175px"></li>
                        </div>
                        <div class="col-lg-3">
                            <img src="https://i0.wp.com/refactory.id/wp-content/uploads/2020/02/049-Refactory-SingleControllerPadaLaravel011.png?fit=560%2C420&ssl=1" width="335px" height="175px" class="rounded"></li>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#artikelcarouselcontrol" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#artikelcarouselcontrol" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row mx-md-n5 mt-5">
            <div class="col-8 px-md-5">
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="https://i1.wp.com/refactory.id/wp-content/uploads/2020/02/056-Refactory-TeknikMengaplikasikanPagination011.jpg?fit=768%2C403&ssl=1" style="width: 100%;" height="182.6px" class="rounded">
                            </div>
                            <div class="col-md-12">
                                <p class="mt-3 subju1">
                                    E N G I N E E R I N G
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p class="subju3">Teknik Mengaplikasikan Pagination: OFFSET Vs SEEK Pagination</p>
                            </div>
                            <div class="col-md-12">
                                <p class="isi">Pagination adalah suatu metode untuk membagi suatu dokumen/resource </p>
                            </div>
                            <div class="col-md-12">
                                <p class="bacaAr">
                                    BACA ARTIKEL
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Gambar 2 -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/058-Refactory-PangkasJarakdanWaktuOnlineBootcampProgrammingJadiSolusi011.png?fit=768%2C403&ssl=1" style="width: 100%;" height="182.6px" class="rounded">
                            </div>
                            <div class="col-md-12">
                                <p class="mt-3 subju1">
                                    N E W S R O O M
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p class="subju3">Pangkas Jarak Dan Waktu, Online Bootcamp Programming Jadi Solusi</p>
                            </div>
                            <div class="col-md-12">
                                <p class="isi">Semakin baik infrastruktur internet, termasuk teknologi perangkat keras</p>
                            </div>
                            <div class="col-md-12">
                                <p class="bacaAr">
                                    BACA ARTIKEL
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 p-md-5">
                <div class="p-3 bg-secondary">
                    <p class="text-center artpop"> ARTIKEL POPULER</p>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleControls" data-slide-to="1" class=""></li>
                            <li data-target="#carouselExampleControls" data-slide-to="2" class=""></li>
                            <li data-target="#carouselExampleControls" data-slide-to="3" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row d-flex justify-content-center align-item-center">
                                    <div class="col-lg-12">
                                        <div class="card" style="width: 18rem; margin-bottom:60%">
                                            <img class="card-img-top" src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/07/WhatsApp-Image-2020-07-16-at-14.53.14.jpeg?fit=540%2C320&ssl=1" width="335px" height="175px" class="rounded">
                                            <div class="card-body">
                                                <h5 class="card-title subju1">Project PT. Pindad (Persero)</h5>
                                                <p class="card-text" style="font-size: 12px;">Pindad merupakan salah satu BUMN yang saat ini mempunyai kepentingan untuk melakukan improvisasi terhadap aplikasi lunak yang telah mereka miliki. Improvisasi tersebut baik dari sisi performa, tampilan, dan kegunannya.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row d-flex justify-content-center align-item-center">
                                    <div class="col-lg-12">
                                        <div class="card" style="width: 18rem;  margin-bottom:60%">
                                            <img class="card-img-top" src="https://i1.wp.com/refactory.id/wp-content/uploads/2020/07/1200x627-IN-1.png?fit=540%2C320&ssl=1" width="335px" height="175px" class="rounded">
                                            <div class="card-body">
                                                <h5 class="card-title subju1">Training Carmudi</h5>
                                                <p class="card-text" style="font-size: 12px;">Carmudi adalah aplikasi web dan aplikasi mobile yang bertujuan mempertemukan antara penjual dan pembeli automotif baik Sepeda Motor dalam kondisi Baru atau Bekas serta Mobil Baru, Mobil Bekas maupun Mobil Komersial. Selain itu Carmudi juga memperluas bisnisnya dengan menggandeng beberapa perusahaan leasing untuk menawarkan pinjaman kepada pembeli yang memilih pembelian automotif dengan sistem pembayaran kredit..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row d-flex justify-content-center align-item-center">
                                    <div class="col-lg-12">
                                        <div class="card" style="width: 18rem;  margin-bottom:60%">
                                            <img class="card-img-top" src="https://i0.wp.com/refactory.id/wp-content/uploads/2020/07/group-18@3x.png?fit=540%2C320&ssl=1" width="335px" height="175px" class="rounded">
                                            <div class="card-body">
                                                <h5 class="card-title subju1">Training Qasir</h5>
                                                <p class="card-text" style="font-size: 12px;">Pindad merupakan salah satu BUMN yang saat ini mempunyai kepentingan untuk melakukan improvisasi terhadap aplikasi lunak yang telah mereka miliki. Improvisasi tersebut baik dari sisi performa, tampilan, dan kegunannya.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row d-flex justify-content-center align-item-center">
                                    <div class="col-lg-12">
                                        <div class="card" style="width: 18rem;  margin-bottom:60%">
                                            <img class="card-img-top" src="https://i1.wp.com/refactory.id/wp-content/uploads/2020/07/4d636aa59d24200ba32325f8f115c863595f1164.png?fit=540%2C320&ssl=1" width="335px" height="175px" class="rounded">
                                            <div class="card-body">
                                                <h5 class="card-title subju1">Training Modana.id</h5>
                                                <p class="card-text" style="font-size: 12px;">Modana.id adalah Aplikasi Mobile yang fokus terhadap solusi Sistem Manajemen Sumber Daya Manusia (Human Resources). Aplikasi ini didesain untuk bisnis, pengusaha dan karyawan untuk dapat bekerja serta berinteraksi secara langsung dengan mengelola informasi karyawan, presensi/ absensi secara otomatisasi dengan keterlibatan manusia yang sangat minim.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <button type="button" style="border-radius: 15px; border-color:#e48800; color:#e48800" class="btn">Artikel Lain <i aria-hidden="true" class="fas fa-arrow-right"></i></button>
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
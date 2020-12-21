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




<main class="container">
    <div class="row mx-md-n5 mt-5">
        <div class="col-8 px-md-5">
            <div class="p-3 ">
                <img src="https://i1.wp.com/refactory.id/wp-content/uploads/2020/02/063-Refactory-HDYBAP017.jpg?fit=768%2C402&amp;ssl=1" alt="How Did You Become A Programmer?" class="jetpack-lazy-image jetpack-lazy-image--handled rounded" style="width: 700px;" data-lazy-loaded="1">
                <p class="mt-3 grocu" style="color: Orange;">
                    G R O W T H & C U L T U R E
                </p>
                <a href="#">
                    <p class="subju2">
                        How Did You Become A Programmer?
                    </p>
                </a>
                <pre class="tab">BY ISNA                        | AUGUST 4, 2020</pre>
                <p class="isi2">Setiap kali mendengar kata “pemrograman”, kira-kira hal apa yang langsung terlintas di pikiran kalian guys? Ribet, susah dipelajari, ngoding, IT, lalu apa lagi? Mungkin beberapa kata tersebut yang paling mudah terlintas di pikiran kita ketika mendengar kata “pemrograman”. Tidak sedikit pula yang mempunyai pemikiran bahwa apabila seseorang ingin belajar pemrograman atau bisa ngoding harus kuliah di jurusan Teknologi Informatika. Hmm.. ternyata _statement_ seperti ini belum tentu selalu benar. Mengapa demikian? Karena seperti halnya kita ingin mahir dalam bermain tenis meja misalnya, kita tidak dituntut untuk mempunyai latar belakang pendidikan olahraga agar bisa bermain tenis meja. Yang perlu kita siapkan adalah meja tenis, bet, dan bola pingpong. Barulah setelah itu kita bisa mulai latihan bermain tenis meja.</p>
                <p class="isi2">Ada banyak cara berbeda untuk menjadi seorang _programmer_. Ada yang mulai mempelajari pemrograman di dunia perkuliahan, ada yang belajar pemrograman secara otodidak, dan ada juga yang mulai mempelajari pemrograman karena ketagihan main game online.</p>
                <p class="isi2">Setiap orang mempunyai “cara” dan motivasi sendiri untuk memulai mempelajari pemrograman. Beberapa programmer Refactory juga ada loh yang mempunyai latar belakang pendidikan non-IT. Kita simak yuk alasan mereka memulai belajar pemrograman!</p>
                <p class="isi2">**Muhamad Firhat (Front End Developer) – Belajar Pemrograman Secara Otodidak**</p>
                <p class="isi2">“Saya mulai menyukai dan tertarik untuk belajar pemrograman sejak berada di bangku SMA. Saat itu belajar pemrograman saya jadikan sebagai hobi dan saya belajar secara otodidak. Namun di awal karir saya, saya tidak langsung bekerja sebagai _programmer_, melainkan akuntan. Saya berfikir bahwa bekerja akan terasa lebih menyenangkan ketika kita sekaligus bisa menyalurkan hobi kita. Dan benar saja, saat ini saya sangat menikmati pekerjaan saya sebagai _programmer_”.</p>
                <p class="isi2">**Akbar Rachman (Mobile Developer) – Belajar Pemrograman Secara Otodidak**</p>
                <p class="isi2">“Berbekal niat dan semangat untuk belajar pemrograman, saya beranikan diri untuk ikut belajar ngoding. Saya mengawalinya dengan menekuni mobile development dan sekarang saya mulai mempelajari DevOps. Hal terberat yang saya hadapi selama belajar pemrograman adalah tidak adanya latar belakang pendidikan IT pada diri saya. Namun dengan menerapkan metode belajar learning by doing secara intensif, saya mulai bisa memahami setiap proses ketika belajar pemrograman”.</p>
                <p class="isi2">Nah, setelah menyimak alasan mereka, kalian mulai termotivasi untuk belajar pemrograman belum nih? Intinya adalah apabila kita ingin mempelajari hal baru itu butuh proses. Jadi buat kalian yang ingin memulai belajar pemrograman, kalian juga harus siap untuk menikmati setiap proses yang akan kalian jalani selama proses belajar. Dan buat kalian yang tidak mempunyai latar belakang pendidikan IT, jangan cemas! Ada istilah _learning by doing_ (belajar dan melakukannya). Dalam realitanya, langkah ini sering menunjukkan hasil yang lebih baik daripada belajar menggunakan _text book_. Mengapa demikian? Karena seringkali buku sulit untuk dicerna. Apabila kita belajar sambil mempraktekkan langsung apa yang kita pelajari, kita akan lebih mudah mengingatnya. Kalian juga bisa memulai belajar basic programming gratis secara online lewat program [Bootcamp Prep Refactory](http://enroll.refactory.id/program/bootcamp-prep).</p>
            </div>
        </div>

        <div class="col-4 px-md-5">
            <p style="color: orange;"> HUBUNGKAN DENGAN KAMI</p>
            <h4 class="py-2">Ikuti refactory</h4>
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
            <br><br><br><br><br><br>
            <div class="p-3 bg-secondary">
                <p class="text-center" style="color: orange;"> ARTIKEL POPULER</p>
                <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/060-Refactory-Part1MembangunMicroserviceSederhanaMenggunakanGOGOMicro011-1.png?fit=768%2C403&amp;ssl=1" class="rounded" width="270px" height="180px">
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
                <img src="https://i1.wp.com/refactory.id/wp-content/uploads/2020/02/059-Refactory-10HalPentingSebelumMengikutiOnlineBootcamp012.png?fit=768%2C403&amp;ssl=1" class="rounded" width="262px" height="138px">
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
                    <button type="button" style="border-radius: 15px;" class="btn btn-outline-secondary">Artikel Lain -></button>
                </div>
            </div>
            <br><br><br>
            <div class="p-3 bg-secondary">
                <p class="text-center" style="color: orange;"> CASE STUDIES</p>
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
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
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
            <div class="row px-md-2 pt-md-5">
                <div class="col-lg-2 text-left">
                    <p class="artter">TAG </p>
                </div>
                <div class="col-lg-10">
                    <hr style="border:1px solid black">
                </div>
            </div>
            <p class="isi2">DevOps Front end Developer Mobile Developer Otodidak Programmer</p>
        </div>
    </div>
    <div class="row px-md-2 pt-md-5">
        <div class="col-lg-2 text-left artter">
            Artikel Terkait
        </div>
        <div class="col-lg-10">
            <hr style="border:0.5px solid #3a3a3a">
        </div>
    </div>
    <p class="font-weight-bold">Lihat lebih banyak artikel bagus dari kategori ini!</p>
    <div class="row mx-md-n5 mt-5">
        <div class="col-4 px-md-5">
            <img src="https://i0.wp.com/refactory.id/wp-content/uploads/2020/02/048-Refactory-ApaYangBaruDiLaravel5.5-011.png?fit=768%2C403&ssl=1" class="rounded" width="288px" height="151.13px">
            <p class="mt-3" style="color: Orange;">
                E N G I N E E R I N G
            </p>
            <p class="isi2">Apa Yang Baru Di Laravel 5.5</p>
            <p class="mt-3" style="color: Orange;">
                BACA ARTIKEL
            </p>
        </div>

        <div class="col-5 px-md-5">
            <img src="https://i2.wp.com/refactory.id/wp-content/uploads/2020/02/062-Refactory-ABetterWayOfReactWithHooksPart1012-1.png?fit=768%2C403&ssl=1" class="rounded" width="288px" height="151.13px">
            <p class="mt-3" style="color: Orange;">
                E N G I N E E R I N G
            </p>
            <p class="isi2">A Better Way Of React With Hooks | Part 1</p>
            <p class="mt-3" style="color: Orange;">
                BACA ARTIKEL
            </p>
        </div>
    </div>

</main>

<footer>
    @include('layout.footer')
</footer>


@endsection
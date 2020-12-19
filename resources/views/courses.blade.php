@extends('layout.app')

@section('content')
    
    <header>
        
        {{-- Background Header Image --}}
        <div class="header-image" style="background-image:url('{{asset('image/courses.jpg')}}');">
            <div class="overlay" style="background-image: linear-gradient(120deg, #00256C 9.05%, #04ACA4 84.05%)"></div>
             {{-- Header Content --}}
            <div class="container">
                <div class="course-container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="row head-content">
                                <div class="col-md-12 head-header">
                                    <h1 class="course-header-text">
                                        Tingkatkan <span class="course-text-span">skill pemograman</span> kapanpun, dimanapun
                                    </h1>
                                </div>
                                <div class="col-md-12 head-desc">
                                    <p>
                                        We’re a brand of passionate software engineers and educators with an engaging curriculum backed by real-world software projects ready to boost your career.
                                    </p>
                                </div>
                            </div>
                            <div class="row course-button">
                                <div class="col-md-6 col-sm-12">
                                    <a href="" type="button" class="btn-left">
                                        <span>
                                            Masuk & Mulai Belajar
                                        </span>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <a href="" type="button" class="btn-right">
                                        <span>
                                            Pelajari Lebih
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <li class="nav-item navbar-right">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li class="nav-item active navbar-right">
                            <a class="nav-link" href="/courses">Courses</a>
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
        
    </header>

    {{-- Body Content --}}
    <main class="body-container">
        
            {{-- First Course Content --}}
        <div class="container first-course">
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

            {{-- Second Course Content --}}
        <div class="second-course">
            <div class="container">

                    {{-- Second Course Top --}}
                <div class="row second-course-top">

                    <div class="col-md-6 second-course-left">
                        <div class="second-left-header">
                            <h3>
                                Kursus pemrograman untuk semua orang tanpa terkecuali
                            </h3>
                        </div>
                        <div class="second-left-desc">
                            <p>
                                Refactory Course dirancang untuk memudahkan setiap orang mampu meningkatkan keahlian dalam software engineering tanpa dibatasi oleh kesulitan akses, kesulitan waktu, batasan keahlian, ataupun usia.
                            </p>
                            <p>
                                Dengan pembelajaran berdasarkan pengalaman nyata pengerjaan project, bagi pelajar/mahasiswa, Refactory Course akan melengkapi keahlian yang sudah diperoleh dalam studi sehingga dapat membuka kesempatan tak terbatas pada karir software engineering.
                                    
                                Bagi karyawan atau tenaga profesional, Refactory Course dapat meningkatkan keahlian software engineer dalam menunjang menyelesaikan tugas pekerjaannya tanpa khawatir dengan keterbatasan waktu.
                            </p>
                            <p>    
                                Masyarakat secara luas juga dapat memanfaatkan pembelajaran untuk meningkatkan keahlian sehingga mampu berkarya dan mendapat keuntungan karir tanpa khawatir mahalnya belajar.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="second-course-right">
                                <img src="{{asset('image/couse-cont.jpg')}}" alt=""  width="600" style="object-fit: cover;">

                        </div>
                        </div>
                </div>

                    {{-- Second Course Bottom --}}
                <div class="second-course-bottom text-center">
                    <div class="second-bottom-header">
                        <h4>MEET OUR GRADUATES</h4>
                        <h2>Review</h2>
                    </div>
                    <div class="second-bottom-desc">
                        <p>Read what our alumni said on <span>Course Report</span></p>
                    </div>
                </div>
            </div>
        </div>

            {{-- Third Course --}}
        <div class="third-course">

        </div>

            {{-- Fourth Course --}}
        <div class="fourth-course">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 fourth-course-left">
                        <h3>Ready to Start Learning</h3>
                    </div>
                    <div class="col-md-6 col-sm-12  fourth-course-right">
                        <div class="fourth-course-button">
                            <a href="" type="button" class="btn-link">
                                <span>
                                    Pelajari Lebih
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            {{-- Fifth Course --}}
        <div class="fifth-course container">
            <div class="fifth-course-top">
                <h4>LANGKAH MUDAH</h4>
                <h3>Memulai Belajar di <br> Refactory Course</h3>
            </div>
            <div class="fifth-course-bottom">
                <img src="{{asset('image/langkah.png')}}" alt="">
                <div class="fifth-course-button">
                    <a href="" type="button" class="btn-link">
                        <span>
                            Pelajari Lebih
                        </span>
                    </a>
                </div>
            </div>
        </div>

    </main>

    <footer>
        @include('layout.footer')
    </footer>
   
@endsection

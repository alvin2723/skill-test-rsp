@extends('layout.app')


@section('content')
<div class="wrap">

    <header class="header" style="background-image:url('{{asset('image/homepage.jpg')}}');">
        <div class="overlay">

        </div>
    </header>
    !-- Navigation -->
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
                        <a class="nav-link" href="#">Home</a>
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
    <div class="text-center">
        <h1>Apa Yang Refactory Dapat Bantu?</h1>
    </div>
    <div class="row mx-md-n5 mt-5">
        <div class="col-6 px-md-5">
            <div class="p-3 border bg-light">Custom column padding</div>
        </div>
        <div class="col-6 px-md-5">
            <div class="p-3 border bg-light">Custom column padding</div>
        </div>
    </div>
</main> @endsection
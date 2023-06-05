@extends('layout.main')

@section('content')
    
<style>
    .button {
        background: #F47C46;
        color: #FFFFFF;
    }

    .button:hover {
        border-color: #F47C46;
        color: #7c7c7c;
    }

    .button-outline {
        border-style: ridge;
        border-color: #f47c46;
        color: #7c7c7c;
    }

    .button-outline:hover {
        background: #F47C46;
        color: #FFFFFF;
    }
</style>

<div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 250px; min-height: 100vh; background-color: #eb5a16bd;" data-aos="fade-right">
        <div class="text-center">
            <a href="/home" class="mb-3 mb-md-0 me-md-auto">
                <img src="LogoApp.png" alt="LogoApp" width="150px" height="100px">
            </a>
        </div>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto mx-2">
          <li class="nav-item mb-2">
            <a href="/dashboard" class="nav-link" style="background-color: white; color: black; font-weight: bold;">
                <span class="px-2"><i class="fa-solid fa-house"></i></span>
                Dashboard
            </a>
          </li>
          <li class="mb-2">
            <a href="/artikel" class="nav-link text-dark">
                <span class="px-2"><i class="fa-solid fa-newspaper"></i></span>
                Artikel
            </a>
          </li>
          <li class="mb-2">
            <a href="/listUser" class="nav-link text-dark">
                <span class="px-2"><i class="fa-solid fa-users"></i></span>
                Pengguna
            </a>
          </li>
          <li class="mb-2">
            <a href="/listPerusahaan" class="nav-link text-dark" >
                <span class="px-2"><i class="fa-solid fa-city"></i></span>
                Perusahaan
            </a>
          </li>
        </ul>
        <hr>
        <ul class="nav nav-pills flex-column mx-2">
            <li class="nav-item">
                <a href="/logout" class="nav-link text-dark">
                    <span class="px-2"><i class="fa-solid fa-right-from-bracket"></i></i></span>
                    Log Out
                </a>
            </li>
        </ul>
    </div>
    <div class="container mx-5 mt-5">
        <div class="row text-secondary">
            <div class="col" data-aos="fade-right">
                <span class="px-2"><i class="fa-solid fa-house"></i></span>
                Dashboard
            </div>
            <div class="col text-end mx-4" data-aos="fade-down">
                <i class="fa-regular fa-bell"></i>
            </div>
        </div>
        <hr>
        <div class="row mb-2 pt-1">
            <div class="col">
                <h2 class="fw-bold" data-aos="fade-right">Selamat Datang, Admin</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <h5 class="fw-medium text-secondary" data-aos="fade-right">Cek perkembangan ProfessionAble hari ini...</h5>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="card rounded-4 shadow border-light mb-2" style="width: 18rem; background-color: #cdb5b5;" data-aos="flip-up">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="card-title text-black-50">Perusahaan</h6>
                            <img src="arrow-up-right.png" alt="arrow-up-right" style="transform: rotate(10deg);">
                        </div>
                        <div class="mt-4 mb-3 text-black-50 text-center fs-5">
                            <i class="fa-solid fa-city fa-2xl"></i>
                        </div>
                        <div class="text-center">
                            <h1 class="card-subtitle text-dark fw-bold" style="font-size: 46px">123</h1>
                        </div>
                        <div class="text-center text-dark mb-1">
                            <h5 class="card-text fw-bold">Jumlah Perusahaan</h5>
                        </div>
                        <div class="fw-medium text-center text-black-50">
                            <h6 class="card-text" style="font-size: 14px;">Naik 5% dari minggu sebelumnya</h6>
                        </div>
                        <div class="text-end text-black-50 fw-medium mt-3">
                            <a href="#" class="text-reset" style="font-size: 14px;">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-4 shadow border-light mb-2" style="width: 18rem; background-color: #babfd0;" data-aos="flip-up">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="card-title text-black-50">Pengguna</h6>
                            <img src="arrow-up-right.png" alt="arrow-up-right" style="transform: rotate(10deg);">
                        </div>
                        <div class="mt-4 mb-3 text-black-50 text-center fs-5">
                            <i class="fa-solid fa-users fa-2xl"></i>
                        </div>
                        <div class="text-center">
                            <h1 class="card-subtitle text-dark fw-bold" style="font-size: 46px">1532</h1>
                        </div>
                        <div class="text-center text-dark mb-1">
                            <h5 class="card-text fw-bold">Jumlah Pengguna</h5>
                        </div>
                        <div class="fw-medium text-center text-black-50">
                            <h6 class="card-text" style="font-size: 14px;">Naik 20% dari minggu sebelumnya</h6>
                        </div>
                        <div class="text-end text-black-50 fw-medium mt-3">
                            <a href="#" class="text-reset" style="font-size: 14px;">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-4 shadow border-light mb-2" style="width: 18rem; background-color: #a89c9c;" data-aos="flip-up">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="card-title text-black-50">Artikel</h6>
                            <img src="arrow-down-right.png" alt="arrow-down-right" style="transform: rotate(-10deg);">
                        </div>
                        <div class="mt-4 mb-3 text-black-50 text-center fs-5">
                            <i class="fa-solid fa-newspaper fa-2xl"></i>
                        </div>
                        <div class="text-center">
                            <h1 class="card-subtitle text-dark fw-bold" style="font-size: 46px">56</h1>
                        </div>
                        <div class="text-center text-dark mb-1">
                            <h5 class="card-text fw-bold">Akses Artikel Hari Ini</h5>
                        </div>
                        <div class="fw-medium text-center text-black-50">
                            <h6 class="card-text" style="font-size: 14px;">Turun 12% dari hari sebelumnya</h6>
                        </div>
                        <div class="text-end text-black-50 fw-medium mt-3">
                            <a href="#" class="text-reset" style="font-size: 14px;">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @include('layout.footer') --}}
@endsection
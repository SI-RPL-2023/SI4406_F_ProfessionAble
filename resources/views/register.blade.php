@extends('navbar.navLogin')
@section('navLogin')
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <style>
        .row .col img {
            position: absolute;
            width: 500px;
            left: 100px;
            margin-top: 150px;
            bottom: 0;
            height: 100%;
            width: 42%;
            left: 0px;
        }

        .separator {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
            color: #000000;
        }

        .separator .line {
            display: block;
            width: 100%;
            height: 1px;
            border: 0;
            background-color: #000000;
        }

        .btn {
            background-color: coral;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="">
                    <img class="" src="/foto/Auth.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4 offset-sm-6">
                {{-- <div class="col-12 col-md-8 col-lg-5"> --}}
                <div class="card border-light">
                    <div class="card-body">
                        <h2 class="mb-4 text-center">Buat Akun</h2>
                        <p>Sudah punya akun? <a href="/login">Masuk</a></p>
                        <div class="d-flex flex-column mx-auto my-4">
                            <form action="/register/store" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Lengkap*</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor Handphone*</label>
                                    <input type="text" name="phone_number" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Email*</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password*</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <p>Password harus minimal 5 kata.</p> {{-- beneran 5 kata nih, bukan 5 huruf kah?? --}}
                                <div class="d-grid gap-2">
                                    <button class="btn fw-bold" type="submit">Buat Akun</button>
                                </div>
                            </form>
                            <div class="separator">
                                <hr class="line">
                                <span>atau </span>
                                <hr class="line">
                            </div>
                            <div class="d-flex align-items-center mx-auto">
                                <a href="#" class="box me-2 selection">
                                    <span class="fab fa-facebook-f mb-2"></span>
                                    <p class="mb-0">Facebook</p>
                                </a>
                                <a href="#" class="box me-2 selection">
                                    <span class="fab fa-google mb-2"></span>
                                    <p class="mb-0">Google</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

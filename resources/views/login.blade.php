@extends('layout.main')

@section('content')
<style>
    a {
        color: rgb(121, 121, 121);
        font-weight: bold;
    }

    a:hover {
        color: #e2770d;
    }

    .button {
        background: #F47C46;
        color: #FFFFFF;
    }

    .row .col img {
        position: fixed;
        width: 500px;
        bottom: 0;
        height: 100%;
        left: 0px;
    }

    .separator {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 25px;
        color: #000000;
    }

    .separator .line {
        display: block;
        width: 100%;
        height: 2px;
        border: 0;
        background-color: #000000;
    }
    
    .shadow-oren:focus {
        box-shadow: 0 0 0 .25rem rgba(244, 124, 70, .25);
        border-color: rgba(244, 124, 70, .5);
    }
</style>

@include('layout.navbar')

    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <img src="Auth.png" alt="Auth">
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 mx-auto me-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-4 offset-sm-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <h3 class="mb-4 text-center fw-bold">Masuk</h3>
                        <p>Belum punya akun? <a href="{{ url('/') }}">Buat Akun</a></p>
                        <form action="{{ url('/postlogin') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label for="" class="form-label">Email*</label>
                                <input type="email" name="email" class="form-control shadow-oren" style="background-color: #fde2d6" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password*</label>
                                <input type="password" name="password" class="form-control shadow-oren" style="background-color: #fde2d6" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn button fw-bold" type="submit">Masuk</button>
                            </div>
                        </form>
                        <div class="separator my-2">
                            <hr class="line">
                                <span> atau </span>
                            <hr class="line">
                        </div>
                        <div class="text-center justify-content-center">
                            <a href="#" class="mx-3">
                                <span class="fa-brands fa-google fa-3x"></span>
                            </a>
                            <a href="#" class="mx-3">
                                <span class="fa-brands fa-facebook fa-3x"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
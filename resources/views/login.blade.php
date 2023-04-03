@extends('navbar.navLogin')
@section('navLogin')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login Page</title>
        <link rel="stylesheet" href="/css/login.css">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"> --}}
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
    </head>

    <body>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        {{-- <div class="container">
        <div class="row">
            <div class="col">
                <img src="" alt="">
            </div>
        </div>
    </div> --}}

        {{-- <div class="container">
        <div class=" d-md-flex align-items-center justify-content-start">
            <div class="box-1 mt-md-0 mt-5">
                <img src="/foto/Auth.png" class="img-fluid" alt="">
            </div> --}}

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
                    <h3 class="fs-3 text-center">Masuk</h3>

                    <div class="mt-3">
                        <p class="mb-0 text-muted">belum punya akun?</p>
                        <div class="btn btn-primary">Buat Akun<span class="fas fa-chevron-right ms-1"></span></div>
                    </div>

                    <div class="d-flex flex-column mx-auto my-4">
                        <form action="{{ route('postlogin') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="col mb-3">
                                <label class="form-label" for="form3Example3">Email address</label>
                                <input type="text" class="form-control" name="email" placeholder="email">
                            </div>
                            <div class="col mb-3">
                                <label class="form-label" for="form3Example4">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="password">
                            </div>
                            <button type="submit" class="btn btn-sm btn-block mb-4 text-dark w-100">
                                Login
                            </button>
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
                {{-- <div class="bg" style="background-image: url('/foto/Auth.png');"></div> --}}
            </div>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </html>
@endsection

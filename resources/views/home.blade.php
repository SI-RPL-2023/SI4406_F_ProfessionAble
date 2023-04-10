@extends('navbar.after')
@section('homePage')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home Page</title>
        <link rel="stylesheet" href="/css/home.css">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> --}}
        <style>
            .btn {
                background-color: #ff6f2d;
            }
        </style>
    </head>

    <body>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <div data-aos="fade-down">

            <div class="container mt-2">
                <!--   <div class="card card-block mb-2">
                                    <h4 class="card-title">Card 1</h4>
                                    <p class="card-text">Welcom to bootstrap card styles</p>
                                    <a href="#" class="btn btn-primary">Submit</a>
                                  </div>   -->
                <div class="row align-items-start mb-4 pb-2">
                    <div class="col-md-8">
                        <div class="section-title text-md-start">
                            <h4 class="title mb-4">Lowongan Terbaru</h4>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4 mt-4 mt-sm-0 d-none d-md-block">
                        <div class=" text-md-end">
                            <a href="" class="text-dark" style="text-decoration: none">Lainnya</a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-md-3 col-sm-6 item">
                        {{-- <img src="/foto/logo1.png" class="" alt=""> --}}
                        <div class="card item-card card-block">
                            <p class="card-title text-end mx-3 mt-3 text-muted">3 hari yang lalu</p>
                            <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="logo">
                            <h5 class="item-card-title mt-3 mx-3 ">Sales</h5>
                            <span class="text-muted d-block mx-3"><i class="fa fa-map-marker"
                                    aria-hidden="true"></i>Bandung</span>
                            <p class="mx-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>

                            <div class="mt-3 text-end">
                                <a href="page-job-detail.html" class="btn  mx-3 btn-sm float-right mb-2 ">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <div class="card item-card card-block">
                            <p class="card-title text-end mx-3 mt-3 text-right text-muted">3 hari yang lalu</p>
                            <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="logo">
                            <h5 class="item-card-title mt-3 mx-3 ">Sales</h5>
                            <span class="text-muted d-block mx-3"><i class="fa fa-map-marker"
                                    aria-hidden="true"></i>Bandung</span>
                            <p class="mx-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>

                            <div class="mt-3 text-end">
                                <a href="page-job-detail.html" class="btn mx-3 btn-sm float-right mb-2">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <div class="card item-card card-block">
                            <p class="card-title text-end mx-3 mt-3 text-right text-muted">3 hari yang lalu</p>
                            <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="logo">
                            <h5 class="item-card-title mt-3 mx-3 ">Sales</h5>
                            <span class="text-muted d-block mx-3"><i class="fa fa-map-marker"
                                    aria-hidden="true"></i>Bandung</span>
                            <p class="mx-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>

                            <div class="mt-3 text-end">
                                <a href="page-job-detail.html" class="btn mx-3  btn-sm float-right mb-2">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <div class="card item-card card-block">
                            <p class="card-title text-end mx-3 mt-3 text-right text-muted">3 hari yang lalu</p>
                            <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="logo">
                            <h5 class="item-card-title mt-3 mx-3 ">Sales</h5>
                            <span class="text-muted d-block mx-3"><i class="fa fa-map-marker"
                                    aria-hidden="true"></i>Bandung</span>
                            <p class="mx-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>

                            <div class="mt-3 text-end text-end">
                                <a href="page-job-detail.html" class="btn mx-3  btn-sm float-right mb-2">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container mt-5 mb-5">

                <div class="row align-items-start mb-4 pb-2">
                    <div class="col-md-8">
                        <div class="section-title text-md-start">
                            <h4 class="title mb-2">Artikel</h4>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4 mt-4 mt-sm-0 d-none d-md-block">
                        <div class=" text-md-end">
                            <a href="" class="text-dark" style="text-decoration: none">Lainnya</a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-md-3 col-sm-6 item">
                        <div class="card item-card card-block">
                            <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="logo">
                            <h3 class="item-card-title mt-3 mx-3" style="background-color= #ff6f2d;">3 hal penting dalam
                                melamar kerja</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('layout.footer')
    </body>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    </html>
@endsection

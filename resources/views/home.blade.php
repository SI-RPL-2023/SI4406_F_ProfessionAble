@extends('layout.after')
@section('homePage')
    <style>
        .btn {
            background-color: #ff6f2d;
        }

        img {
            height: 150px;
            width: 100%;
        }

        .item {
            padding-left: 5px;
            padding-right: 5px;
        }

        .item-card {
            transition: 0.5s;
            cursor: pointer;
        }

        .item-card-title {
            font-size: 15px;
            transition: 1s;
            cursor: pointer;
        }

        .item-card-title i {
            font-size: 15px;
            transition: 1s;
            cursor: pointer;
            color: #ffa710
        }

        .card-title i:hover {
            transform: scale(1.25) rotate(100deg);
            color: #18d4ca;

        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
        }

        .card-text {
            height: 80px;
        }

        .card::before,
        .card::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: scale3d(0, 0, 1);
            transition: transform .3s ease-out 0s;
            background: rgba(255, 255, 255, 0.1);
            content: '';
            pointer-events: none;
        }

        .card::before {
            transform-origin: left top;
        }

        .card::after {
            transform-origin: right bottom;
        }

        .card:hover::before,
        .card:hover::after,
        .card:focus::before,
        .card:focus::after {
            transform: scale3d(1, 1, 1);
        }
    </style>

    <link rel="stylesheet" href="{{ asset('footer.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <div data-aos="fade-down">

        <div class="container mt-2">
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
                @foreach ($list as $key => $value)
                    <div class="col-md-3 col-sm-6 item">
                        <div class="card item-card card-block">
                            <p class="card-title text-end mx-3 mt-3 text-muted">{{ $value->created_at->diffForHumans() }}</p>
                            <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="logo">
                            <h5 class="item-card-title mt-3 mx-3 ">{{ $value->name }}</h5>
                            <span class="text-muted d-block mx-3"><i class="fa fa-map-marker"
                                    aria-hidden="true"></i>{{ $value->location }}</span>
                            <p class="mx-3">
                                <?php  
                                    
                                    $rincian_detail = $value["detail"];
                                    if (strlen($rincian_detail) > 10) {
                                        $rincian_detail = Str::substr($rincian_detail, 0, 30) . '...';
                                        echo $rincian_detail;
                                    };
                                ?>
                            </p>
                                <div class="mt-3 text-end">
                                    <a href="/view/detail/{{ $value->id }}"
                                        class="btn  mx-3 btn-sm float-right mb-2 ">View Details</a>
                                </div>
                        </div>
                    </div>
                @endforeach
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
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fbabae60e9.js" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    </body>
@endsection

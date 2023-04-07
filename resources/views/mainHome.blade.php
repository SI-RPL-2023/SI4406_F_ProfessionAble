@extends('navbar.index')
@section('content')
<<<<<<< HEAD
=======

>>>>>>> origin/Lala
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home Page</title>
<<<<<<< HEAD
        <link rel="stylesheet" href="/css/home.css">
         {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      
=======
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/home.css">

>>>>>>> origin/Lala
        <style>
            .btn {
                background-color: #ff6f2d;
            }

<<<<<<< HEAD
            /* .jumbotron {
                background-image: url('/foto/head.png');
                width: 100%;
                height: 550px;
                background-repeat: no-repeat;
            } */
=======
>>>>>>> origin/Lala
        </style>
    </head>

    <body>

<<<<<<< HEAD
        {{-- <main>
            <div class="position-absolute w-100 h-50 top-0"></div>
            <div class="position-relative py-vh-5 bg-cover bg-center" style="background-image: url(/foto/head.png)">

            </div>
        </main> --}}
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
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
                            <a href="page-job-detail.html" class="btn  mx-3 btn-sm float-right mb-3">View Details</a>
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
                            <a href="page-job-detail.html" class="btn mx-3 btn-sm float-right mb-3 ">View Details</a>
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
                            <a href="page-job-detail.html" class="btn mx-3  btn-sm float-right mb-3">View Details</a>
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
                            <a href="page-job-detail.html" class="btn mx-3  btn-sm float-right mb-3">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

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

                        {{-- <div class="mt-3 text-end">
                            <a href="page-job-detail.html" class="btn  mx-3 btn-sm float-right mb-3">View Details</a>
                        </div> --}}
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

                        {{-- <div class="mt-3 text-end">
                            <a href="page-job-detail.html" class="btn mx-3 btn-sm float-right mb-3 ">View Details</a>
                        </div>
                    </div> --}}
                </div>

                  <!-- Site footer -->
    {{-- <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">Scanfcode.com <i>isi penjelasan disini wknjsakdnkak</p>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Categories</h6>
              <ul class="footer-links">
                <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
              </ul>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="http://scanfcode.com/about/">About Us</a></li>
                <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
           <a href="#">Scanfcode</a>.
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
  </footer> --}}
                

        </div>

    </body>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

    </html>
=======
        
        <div data-aos="fade-up">
            <div class="container-fluid mt-2">
                <div class="row align-items-center mb-4 pb-2">
                    <div class="col-md-8 col-lg-8 col-sm-4">
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
                    <div class="col-md-3 col-sm-12 item">
                        <div class="card item-card card-block">
                            <p class="card-title text-end mx-3 mt-3 text-muted">3 hari yang lalu</p>
                            <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="logo">
                            <h5 class="item-card-title mt-3 mx-3 ">Sales</h5>
                            <span class="text-muted d-block mx-3"><i class="fa fa-map-marker"
                                    aria-hidden="true"></i>Bandung</span>
                            <p class="mx-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>

                            <div class="mt-3 text-end">
                                <a href="page-job-detail.html" class="btn  mx-3 btn-sm float-right mb-3">View Details</a>
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
                                <a href="page-job-detail.html" class="btn mx-3 btn-sm float-right mb-3 ">View Details</a>
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
                                <a href="page-job-detail.html" class="btn mx-3  btn-sm float-right mb-3">View Details</a>
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
                                <a href="page-job-detail.html" class="btn mx-3  btn-sm float-right mb-3">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-5">

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
                                <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg"
                                    alt="logo">
                                <h3 class="item-card-title mt-3 mx-3" style="background-color= #ff6f2d;">3 hal penting dalam
                                    melamar kerja</h3>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>


        @include('navbar.footer')

</body>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
>>>>>>> origin/Lala
@endsection

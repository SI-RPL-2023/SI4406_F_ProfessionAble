<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
    {{-- <link rel="stylesheet" href="/css/head.css"> --}}
    <style>
        a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        a:hover {
            color: #e2770d;
        }

        .button {
            position: absolute;
            width: 100px;
            height: 30px;
            background: #F47C46;
            font-weight: 700;
            font-style: normal;
            line-height: 150%;
            text-align: center;
            letter-spacing: -0.023em;
            color: #FFFFFF;

            .btn {
                background-color: #ff6f2d;
            }

        }
    </style>
</head>

<body>

    <main>
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col mb-5" style="background-image: url('/foto/head.png');
                height: 550px; background-size: cover;">
                    <div class="jumbotron">
                        <nav class="navbar navbar-expand-lg mt-0 mx-3" style="background-color:transparent">
                            <div class="container-fluid px-0">
                                <a class="navbar-brand" href="#"><img src="/foto/logoApp.png" width="120px"
                                    alt=""></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav mx-auto me-5 mt-3">
                                        <a class="active mx-3" aria-current="page" href="/mainHome">Home</a>
                                        <a class="active mx-5" aria-current="page" href="">Cari Lowongan</a>
                                        {{-- <a class="btn mx-3" href="#" role="button">Daftar</a> --}}
                                        {{-- <a class=" p-3 mb-1 bg-dark text-dark mx-3" href=''>Daftar</a> --}}
                                        <div class="text-end text-end">
                                            <a href="" class="btn mx-3 btn-md float-end">Daftar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <div class="container mt-5">
                            <div class="row">
                                <div class="col">
                                    <div class="input-group w-50 mx-auto mt-5">
                                        <input type="search" class="form-control opacity-50" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                        <button type="button" class="btn btn-white">search</button>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>




    <div class="container">
        @yield('content')
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous">
</script>
<script src="/js/head.js"></script>

</html>

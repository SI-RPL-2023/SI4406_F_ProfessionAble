<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProffesionAble Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dropdown.css') }}">
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
                <div class="col mb-5" style="background-image: url('head.png'); height: 550px; background-size: cover;">
                    <div class="jumbotron">
                        <nav class="navbar navbar-expand-lg mt-4 mx-5" style="background-color:transparent">
                            <div class="container-fluid px-0">
                                <a class="navbar-brand" href="#"><img src="logoApp.png" width="120px" alt=""></a>
                                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button> --}}
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav mx-auto me-5">
                                        <a class="active mx-3" aria-current="page" href="/home">Home</a>
                                            @if (auth()->user()->level == 'Pelamar')
                                                <a href="/carilowongan">Cari Lowongan</a>
                                            @elseif (auth()->user()->level == 'Company')
                                                <a href="/nambahpekerjaan">Post Lowongan</a>
                                            @endif

                                        <div class="dropdown mx-5">
                                            <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-bell-fill"></i>
                                                <span class="badge rounded-pill badge-notification"></span>
                                            </a>
                                        </div>

                                        @if (Auth::user())
                                            <img src="https://ui-avatars.com/api/?background=random&color=fff&name={{ Auth::user()->name }}" alt="" class="userPic" onclick="toggleMenu()">
                                            <h5 class="my-2 mx-2">{{ Auth::user()->name }} ({{ Auth::user()->level }})</h5>
                                        @endif

                                        <div class="sub-menu-wrap" id="subMenu">
                                            <div class="sub-menu">
                                                <div class="user-info">
                                                    <p>{{ Auth::user()->name }}</p>
                                                </div>
                                                <a 
                                                    href="/profile"
                                                class="sub-menu-link">
                                                    <p>Profile</p>
                                                    <span>></span>
                                                </a>
                                                @if (auth()->user()->level == "Pelamar")
                                                <a href="/riwayatlamaran" class="sub-menu-link">
                                                    <p>History</p>
                                                    <span>></span>
                                                </a>
                                                @elseif (auth()->user()->level == "Company")
                                                <a href="/melihatListPelamar" class="sub-menu-link">
                                                    <p>Daftar Pelamar</p>
                                                    <span>></span>
                                                </a>
                                                @endif
                                                <a href="/logout" class="sub-menu-link">
                                                    <p>Logout</p>
                                                    <span>></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @yield('homePage')

</body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script>
        let subMenu = document.getElementById('subMenu');

        function toggleMenu() {
            subMenu.classList.toggle('open-menu');
        }
    </script>
</html>
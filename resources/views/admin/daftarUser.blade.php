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
        <div class="d-flex flex-column flex-shrink-0 p-3"
            style="width: 250px; min-height: 100vh; background-color: #eb5a16bd;" data-aos="fade-right">
            <div class="text-center">
                <a href="/home" class="mb-3 mb-md-0 me-md-auto">
                    <img src="LogoApp.png" alt="LogoApp" width="150px" height="100px">
                </a>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto mx-2">
                <li class="nav-item mb-2">
                    <a href="/dashboard" class="nav-link text-dark" aria-current="page">
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
                    <a href="/listUser" class="nav-link" style="background-color: white; color: black; font-weight: bold;">
                        <span class="px-2"><i class="fa-solid fa-users"></i></span>
                        Pengguna
                    </a>
                </li>
                <li class="mb-2">
                    <a href="/listPerusahaan" class="nav-link text-dark">
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
        <div class="container mx-5 mt-5 mb-2" data-aos="fade-down">
            <div class="row text-secondary">
                <div class="col">
                    <span class="px-2"><i class="fa-solid fa-users"></i></span>
                    Pengguna
                </div>
                <div class="col text-end mx-4">
                    <i class="fa-regular fa-bell"></i>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <h5 class="mt-3 text-secondary">Pelamar</h5>
                </div>
            </div>
            <div class="row mt-2 mb-4">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr class="text-secondary">
                                        <th></th>
                                        <th scope="col" width="200px">User</th>
                                        <th scope="col" width="50px">Id</th>
                                        <th scope="col" width="290px">Email</th>
                                        <th scope="col" width="100px">Level</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    @foreach ($pelamar as $key)
                                        <tr>
                                            <td scope="row">
                                                @if ($key->foto === null)
                                                    <img src="https://ui-avatars.com/api/?background=random&color=fff&name={{ $key->name }}" alt="fotoProfile" width="50px"height="50px" class="rounded-circle">
                                                @else
                                                    <img src="/foto/{{ $key->foto }}" alt="fotoProfile" width="50px"height="50px" class="rounded-circle">
                                                @endif
                                            </td>
                                            <td class="fw-medium">{{ $key->name }}</td>
                                            <td class="fw-medium text-secondary">{{ $key->id }}</td>
                                            <td class="fw-medium text-secondary">{{ $key->email }}</td>
                                            <td class="fw-medium text-secondary">{{ $key->level }}</td>
                                            <td>
                                                <div class="container d-grid gap-3 d-md-block text-center">
                                                    <a href="/admin/{{ $key->id }}/lihatProfile"><button class="btn button-outline fw-bold"
                                                            style="width: 90px" type="button"> Show </button></a>
                                                    <a href="{{ $key->id }}/delete_pelamar"><button class="btn button fw-bold" style="width: 90px"
                                                            type="button">Hapus</button></a>
                                                </div>
                                            </td>
                                        </tr>           
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- @include('layout.footer') --}}
@endsection

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

        .shadow-oren:focus {
            box-shadow: 0 0 0 .25rem rgba(244, 124, 70, .25);
            border-color: rgba(244, 124, 70, .5);
        }
    </style>

    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3"
            style="width: 250px; min-height: 100vh; background-color: #eb5a16bd;">
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
                    <a href="/artikel" class="nav-link" style="background-color: white; color: black; font-weight: bold;">
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
        <div class="container mx-5 mt-5 mb-2">
            <div class="row text-secondary">
                <div class="col">
                    <span class="px-2"><i class="fa-solid fa-newspaper"></i></span>
                    Artikel
                </div>
                <div class="col text-end mx-4">
                    <i class="fa-regular fa-bell"></i>
                </div>
            </div>
            <hr>
            <form action="/tambahArtikel" method="GET" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="d-flex align-items-center gap-3 justify-content-end me-3">
                            <p class="mt-3 text-secondary">Tambah Artikel</p>
                            <button type="submit" class="btn button text-dark"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </form>
            <form action="{{ route('artikel') }}" method="GET">
                @csrf
                <div class="row mt-3 mb-4">
                    <div class="col">
                        <div class="card border border-white shadow">
                            <div class="card-body">
                                <div class="row mt-2 mb-2">
                                    <div class="col ms-3 mt-2">
                                        <h4 class="fw-bold">Artikel</h4>
                                    </div>
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="fa-solid fa-magnifying-glass"></i></span>
                                            <input type="text" class="form-control shadow-oren" placeholder="Search"
                                                aria-label="Search" aria-describedby="basic-addon1"
                                                value="{{ request('search') }}" name="search">
                                        </div>
                                    </div>
                                </div>

                                <table class="table">
                                    <thead class="text-secondary">
                                        <tr>
                                            <th scope="col" width="120px" class="fw-normal">Upload Artikel</th>
                                            <th scope="col" width="380px"></th>
                                            <th scope="col" width="150px" class="fw-normal text-center">Tanggal Posting
                                            </th>
                                            <th scope="col" class="text-center fw-normal">Aksi</th>
                                        </tr>
                                    </thead>
                                    @if ($tampil_artikel->isEmpty())
                                        <p>Belum ada artikel yang di posting</p>
                                    @else
                                        @foreach ($tampil_artikel as $tampil)
                                            <tbody class="align-middle">
                                                <tr>
                                                    <td scope="row" class="text-center"><img src="/cover/{{ $tampil->gambar }}"
                                                            alt="fotoProfile" width="75px" height="50px"
                                                            class="rounded-3"></td>
                                                    <td>
                                                        <div class="d-block-flex">
                                                            <div class="fw-bold mt-2">
                                                                {{ $tampil->title }}
                                                            </div>
                                                            <div class="fw-lighter text-secondary mb-2">
                                                                Dibuat Oleh {{ $tampil->author }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium text-center">{{ $tampil->posting_date }}</td>
                                                    <td>
                                                        <div class="container d-grid gap-3 d-md-block text-center">
                                                            <a href="#"><button class="btn button-outline fw-bold"
                                                                    style="width: 90px" type="button"> Edit </button></a>
                                                            <a href="/delete/artikel/{{ $tampil->id }}"><button class="btn button fw-bold"
                                                                    style="width: 90px" type="button">Hapus</button></a>
                                                        </div>
                                                    </td>
                                                </tr>                                          
                                            </tbody>
                                        @endforeach
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- @include('layout.footer') --}}
@endsection

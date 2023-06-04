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

    @include('layout.afternew')
    <div class="container">
        <div class="row justify-content-center my-5">
            <h2 class="fw-bold">Daftar Postingan</h2>
            <h4 class="fw-bold">Total Pelamar: {{ $total }}</h4>
        </div>
    </div>
    @foreach ($job as $jobs)
        <div class="container my-5">
            <div class="card">
                <div class="card-header">
                    <div class="container">
                        <div class="row my-1">
                            <div class="col col-lg-2">
                                <img src="/foto/{{ $jobs->foto }}" alt="logo-telkom-indonesia" width="150">
                            </div>
                            <div class="col col-lg-6">
                                <div class="row my-2 fw-bold fs-5">
                                    {{ $jobs->name }}
                                </div>
                                <div class="row fw-light text-secondary">
                                    {{ $jobs->nama_perusahaan }}
                                </div>
                            </div>
                            <div class="col my-2 fw-bold">
                                <i class="fa-solid fa-location-pin"></i>
                                {{ $jobs->location }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <div class="container mx-1">
                            <div class="row">
                                <div class="col-md-2">
                                    Tanggal Pengajuan
                                </div>
                                <div class="col">
                                    : {{ $jobs->posting_date }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    Tutup Pengajuan
                                </div>
                                <div class="col">
                                    : {{ $jobs->end_date }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="my-3 ms-3 me-2">
                                Daftar Pelamar :
                            </div>
                        </div>
                        <div class="col text-end">
                            <a href="#"><button class="btn button fw-bold" style="width: 150px"
                                    type="button">Close</button></a>
                        </div>
                    </div>
                    @foreach ($jobs->applies as $apply)
                        <div class="container">
                            <div class="row">
                                <div class="col-4 mt-2 mb-1">
                                    <div class="card border rounded-4">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-2">
                                                @if ($apply->user->foto === null)
                                                    <img src="https://ui-avatars.com/api/?background=random&color=fff&name={{ $apply->user->name }}"
                                                        alt="fotoProfile" width="40px" height="40px"
                                                        class="rounded-circle">
                                                @else
                                                    <img src="/foto/{{ $apply->user->foto }}" alt="fotoProfile"
                                                        width="40px" height="40px" class="rounded-circle">
                                                @endif
                                                <span class="me-auto">{{ $apply->user->name }}</span>
                                                <a href="#"><button class="btn button fw-medium btn-sm"
                                                        style="width: 40px" type="button">CV</button></a>>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach


    @include('layout.footer')
@endsection

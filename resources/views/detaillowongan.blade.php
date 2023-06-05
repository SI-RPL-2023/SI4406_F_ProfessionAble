@extends('layout.main')

@section('content')

<style>
    .button {
        background: #F47C46;
        color: #FFFFFF;
    }

    .button:hover {
        border-color: #F47C46;
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

<form action="/detail/Lowongan/applyPage/{{ $apply_job->id }}" method="POST">
    @csrf
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-2">
                <img src="/foto/{{$apply_job->foto}}" width="150px">
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-2 fw-bold fs-5 d-block">
                {{ $apply_job->name }}
            </div>
            <div class="col-12 fw-light text-secondary d-block">
                
            </div>
            <div class="col-3 my-1 fw-light text-secondary d-block">
                {{ $apply_job->location }}
            </div>
            <div class="col">
                <a href="/profileperusahaan/{{ $apply_job->id }}"><button class="btn button-outline fw-bold"
                        style="width: 175px" type="button">Profil Perusahaan</button></a>
            </div>
        </div>
        <div class="row mt-2 mb-4 align-items-center">
            <div class="col-3">
                <div class="col-12 my-1 fw-light text-secondary">
                    <i class="fa-regular fa-clock"></i>
                    {{ $apply_job->created_at->diffForHumans() }}
                    {{-- {{ $apply_job->posting_date }} --}}
                </div>
                <div class="col text-secondary">
                    <p class="fw-light d-inline">Berakhir pada</p>
                    <b class="fw-bolder">{{ $apply_job->end_date }}</b>
                </div>
            </div>
            <div class="col">
                @if (Auth::user()->level === 'Pelamar')
                    <div class="col">
                        <button type="submit" class="btn button fw-bold" style="width: 175px" role="button">Lamar
                            Sekarang</button>
                    </div>
                @elseif (Auth::user()->level === 'Company' && Auth::user()->name !== Auth::user()->name)
                    <div class="col">
                        <a href="/editJob/{{ $apply_job->id }}">Edit</a>
                        <br>
                        <a href="/hapusJob/{{ $apply_job->id }}">Hapus</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col">
                <h5 class="fw-bold mt-2 mb-4">Rincian Pekerjaan:</h5>
                <ul class="text-secondary fw-lighter">
                    {!! $apply_job->detail !!}
                </ul>
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col">
                <h5 class="fw-bold mt-3 mb-4">Kualifikasi Umum:</h5>
                <ul class="text-secondary fw-lighter">
                    {!! $apply_job->qualification !!}
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <h5 class="fw-bold mt-3 mb-4">Kualifikasi Khusus:</h5>
                <ul class="text-secondary fw-lighter">
                    {!! $apply_job->qualification_khusus !!}
                </ul>
            </div>
        </div>
    </div>
</form>

<div class="container mb-3">
    <div class="row">
        <hr>
        <div class="col">
            <h5 class="fw-bold mt-3 mb-5">Lowongan Kerja Lainnya</h5>
            @if ($total_lowongan <= 1)
            @else
                @foreach ($lowongan_lain as $lainnya)
                    @foreach ( $profile_company as $profile )
                        @if ($profile->id == $lainnya->user_id)
                        <div class="container mx-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col col-lg-2">
                                                <img src="/foto/{{$lainnya->foto}}" alt="logo-telkom-indonesia"
                                                    width="150">
                                            </div>
                                            <div class="col col-lg-6">
                                                <div class="row my-2 fw-bold fs-5">
                                                    {{ $lainnya->name }}
                                                </div>
                                                <div class="row fw-light text-secondary">
                                                    {{ $profile->name }}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row my-2 fw-bold">
                                                    <div class="col-12">
                                                        <i class="fa-solid fa-location-pin"></i>
                                                        {{ $lainnya->location }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-secondary fw-light ms-3">
                                                        {{ $lainnya->created_at->diffForHumans() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="card-text mx-3 mt-4">
                                                    {!! $lainnya->detail !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mx-3 mb-2">
                                                    <a href="/view/detail/{{ $lainnya->id }}" class="text-reset">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endforeach
            @endif
        </div>
    </div>
</div>

@include('layout.footer')
@endsection
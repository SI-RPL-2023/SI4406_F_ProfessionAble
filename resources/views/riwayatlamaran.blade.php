@extends('layout.main')

@section('content')

@include('layout.afternew')

<div class="container">
    <div class="row my-4">
        <h2 class="fw-bold">Riwayat Lamaran</h2>
    </div>
</div>
<div class="container my-4">
    @foreach ($list_history as $key)
        @foreach ($from_company as $company )
            @if ($company->id == $key->user_id)
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="container">
                            <div class="row my-1">
                                <div class="col col-lg-2">
                                    <img src="/foto/{{ $key->foto }}" alt="logo-telkom-indonesia" width="150">
                                </div>
                                <div class="col col-lg-6">
                                    <div class="row my-2 fw-bold fs-5">
                                        {{ $key->name }}
                                    </div>
                                    <div class="row fw-light text-secondary">
                                        {{ $key->nama_perusahaan }}
                                    </div>
                                </div>
                                <div class="col my-2 fw-bold">
                                    <i class="fa-solid fa-location-pin"></i>
                                    {{ $key->location }}
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
                                        : {{ $key->posting_date }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        Tutup Pengajuan
                                    </div>
                                    <div class="col">
                                        : {{ $key->end_date }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        Status
                                    </div>
                                    <div class="col">
                                        : <b>Waiting</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 mx-3">
                            <a href="/detailriwayat/{{ $key->id }}" class="text-reset">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endforeach
</div>

@include('layout.footer')
@endsection
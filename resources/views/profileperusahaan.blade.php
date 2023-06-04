@extends('layout.main')
@section('content')

@include('layout.afternew')

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card border-light shadow ">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            {{-- <input type="text" class="form-control" value="{{ $profile_perusahaan->user_id }}"> --}}
                            <img src="/foto/{{ $profile_perusahaan->foto }}" alt="logo-telkom-indonesia" width="200">
                            <h4 class="mt-4 mb-2 fw-bold">{{ $profile_perusahaan->name }}</h4>
                            <h6 class="text-secondary">{{ $profile_perusahaan->email }}</h6>
                            <h6 class="text-secondary pb-3">{{ $profile_perusahaan->phone_number }}</h6>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-10">
                            <hr>
                            <div class="row pb-1">
                                <div class="col">
                                    <h5 class="fw-bold">Deskripsi Perusahaan</h5>
                                </div>
                                <div class="col-auto mx-3">
                                    <a href="#"></a>
                                </div>
                            </div>
                            <div class="row">
                                <p class="pb-2 text-justify text-body-secondary">{{ $profile_perusahaan->description}}</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-10">
                            <h5 class="fw-bold">Identitas Perusahaan</h5>
                            <div class="row mt-3">
                                <div class="col-6 fw-semibold">
                                  Nama Perusahaan
                                </div>
                                <div class="col-6 text-body-secondary">
                                    {{ $profile_perusahaan->name }}
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6 fw-semibold">
                                  Website
                                </div>
                                <div class="col-6 text-body-secondary">
                                    {{ $profile_perusahaan->website}}
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6 fw-semibold">
                                  Kontak
                                </div>
                                <div class="col-6 text-body-secondary">
                                    {{ $profile_perusahaan->phone_number }}
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6 fw-semibold">
                                  Email
                                </div>
                                <div class="col-6 text-body-secondary">
                                    {{ $profile_perusahaan->email}}
                                </div>
                            </div>
                            <div class="row mt-2 pb-2">
                                <div class="col-6 fw-semibold">
                                  Url LinkedIn
                                </div>
                                <div class="col-6 text-body-secondary">
                                    {{ $profile_perusahaan->url}}
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row mt-2 mb-4 justify-content-center">
                        <div class="col-10">
                            <h5 class="fw-bold">Detail Perusahaan</h5>
                            <form action="#" class="my-4">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium text-secondary">Industri*</label>
                                    <input type="text" name="industri" class="form-control text-secondary" value="{{ $profile_perusahaan->industri}}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium text-secondary">Ukuran Perusahaan*</label>
                                    <input type="text" name="ukuran_perusahaan" class="form-control text-secondary" value="{{ $profile_perusahaan->ukuran_perusahaan}}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium text-secondary">Jenis Perusahaan*</label>
                                    <input type="text" name="jenis_perusahaan" class="form-control text-secondary" value="{{ $profile_perusahaan->jenis_perusahaan}}" readonly>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

@include('layout.footer')
@endsection
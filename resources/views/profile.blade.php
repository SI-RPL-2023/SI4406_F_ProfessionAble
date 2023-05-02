@include('layout.head')

@extends('layout.main')
@section('content')



<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card border-light shadow ">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <img src="fotoProfile.jpg" alt="fotoProfile" width="200" class="img-thumbnail rounded-circle">
                            <h4 class="mt-3 mb-2 fw-bold"> {{ $profile->name }} </h4>
                            <h6 class="text-secondary">{{ $profile->email }}</h6>
                            <h6 class="text-secondary pb-3">{{ $profile->phone_number }}</h6>
                            <hr>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-6 align-self-end">
                            <h4 class="fw-bold text-center">Lengkapi Profilmu</h4>
                        </div>
                        <div class="col-6">
                            <div class="row pb-1">
                                <div class="col">
                                    <h5 class="fw-bold">Deskripsi Diri</h5>
                                </div>
                                <div class="col-auto mx-3">
                                    <a href="{{ url('profile/'.$profile->id.'/edit') }}"><img src="iconEdit.png" alt="iconEdit" width="22"></a>
                                </div>
                            </div>
                            <div class="row">
                                <p class="pb-2 text-justify">{{ $profile->description }}</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col">
                            <img src="progress.png" class="position-relative top-50 start-50 translate-middle" alt="progress" width="200" >
                        </div>
                        <div class="col">
                            <h5 class="fw-bold">Data Diri</h5>
                            <div class="row mt-3">
                                <div class="col-6 fw-semibold">
                                  Nama Lengkap
                                </div>
                                <div class="col-6">
                                  {{ $profile->name }}
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6 fw-semibold">
                                  Jenis Kelamin
                                </div>
                                <div class="col-6">
                                  {{ $profile->gender }}
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6 fw-semibold">
                                  Nomor Telepon
                                </div>
                                <div class="col-6">
                                  {{ $profile->phone_number }}
                                </div>
                            </div>
                            <div class="row mt-2 pb-2">
                                <div class="col-6 fw-semibold">
                                  Email
                                </div>
                                <div class="col-6">
                                  {{ $profile->email }}
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row mt-2 justify-content-center">
                        <div class="col">
                            {{-- buat gambar progress kiri --}}
                        </div>
                        <div class="col">
                            <h5 class="fw-bold">Pendidikan Terakhir</h5>
                            @if ($profile->education)
                                <p class="py-2">- {{ $profile->education }}</p>
                            @else
                                <p class="fst-italic py-3">Masukkan riwayat pendidikan yang jalani selama ini</p>
                            @endif
                            <hr>
                        </div>
                    </div>
                    <div class="row mt-3 mb-4 justify-content-center">
                        <div class="col">
                            {{-- buat gambar progress kiri --}}
                        </div>
                        <div class="col">
                            <h5 class="fw-bold">Jenis Disabilitas</h5>
                            @if ($profile->type_disability)
                                <p class="py-2">- {{ $profile->type_disability }}</p>
                            @else
                                <p class="fst-italic py-2">Masukkan jenis disabilitas yang anda alami</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

@include('layout.footer')
@endsection
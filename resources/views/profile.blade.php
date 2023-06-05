@extends('layout.main')
@section('content')

@include('layout.afternew')

<style>
    .shadow-oren:focus {
    box-shadow: 0 0 0 .25rem rgba(244, 124, 70, .25);
    border-color: rgba(244, 124, 70, .5);
    }
</style>

<div data-aos="fade-up">
@if (Auth::user()->level === "Pelamar") 
    <div class="container mb-5 mt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card border-light shadow ">
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col">
                                <img src="/foto/{{ Auth::user()->foto }}" alt="fotoProfile" width="200" class="img-thumbnail rounded-circle">
                                <h4 class="mt-3 mb-2 fw-bold"> {{ Auth::user()->name }} </h4>
                                <h6 class="text-secondary">{{ Auth::user()->email }}</h6>
                                <h6 class="text-secondary pb-3">{{ Auth::user()->phone_number }}</h6>
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
                                        <a href="profile/{{ Auth::user()->id }}/editProfile"><img src="iconEdit.png" alt="iconEdit" width="22"></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="pb-2 text-justify">{{ Auth::user()->description }}</p>
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
                                    {{ Auth::user()->name }}
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6 fw-semibold">
                                    Jenis Kelamin
                                    </div>
                                    <div class="col-6">
                                    {{ Auth::user()->gender }}
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6 fw-semibold">
                                    Nomor Telepon
                                    </div>
                                    <div class="col-6">
                                    {{ Auth::user()->phone_number }}
                                    </div>
                                </div>
                                <div class="row mt-2 pb-2">
                                    <div class="col-6 fw-semibold">
                                    Email
                                    </div>
                                    <div class="col-6">
                                    {{ Auth::user()->email }}
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
                                @if (Auth()->user()->education)
                                    <p class="py-2">- {{ Auth::user()->education }}</p>
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
                                @if (Auth()->user()->type_disability)
                                    <p class="py-2">- {{ Auth::user()->type_disability }}</p>
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

@elseif(Auth::user()->level === "Company")

    <div class="container mb-5 mt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card border-light shadow ">
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col">
                                <img src="/foto/{{ Auth::user()->foto }}" alt="logo-telkom-indonesia" width="200">
                                <h4 class="mt-4 mb-2 fw-bold">{{ Auth::user()->name }}</h4>
                                <h6 class="text-secondary">{{ Auth::user()->email }}</h6>
                                <h6 class="text-secondary pb-3">{{ Auth::user()->phone_number }}</h6>
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
                                        <a href="profile/{{ Auth::user()->id }}/editProfile"><img src="/iconEdit.png" alt="iconEdit" width="22"></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="pb-2 text-justify text-body-secondary">{{ Auth::user()->description}}</p>
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
                                        {{ Auth::user()->name }}
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6 fw-semibold">
                                    Website
                                    </div>
                                    <div class="col-6 text-body-secondary">
                                        {{ Auth::user()->website}}
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6 fw-semibold">
                                    Kontak
                                    </div>
                                    <div class="col-6 text-body-secondary">
                                        {{ Auth::user()->phone_number }}
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6 fw-semibold">
                                    Email
                                    </div>
                                    <div class="col-6 text-body-secondary">
                                        {{ Auth::user()->email}}
                                    </div>
                                </div>
                                <div class="row mt-2 pb-2">
                                    <div class="col-6 fw-semibold">
                                    Url Perusahaan
                                    </div>
                                    <div class="col-6 text-body-secondary">
                                        {{ Auth::user()->url}}
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="row mt-2 mb-4 justify-content-center">
                            <div class="col-10">
                                <h5 class="fw-bold">Detail Perusahaan</h5>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium text-secondary">Industri</label>
                                    <input type="text" name="industri" class="form-control text-secondary shadow-oren" value="{{ Auth::user()->industri }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium text-secondary">Ukuran Perusahaan</label>
                                    <input type="text" name="ukuran_perusahaan" class="form-control text-secondary shadow-oren" value="{{ Auth::user()->ukuran_perusahaan }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium text-secondary">Jenis Perusahaan</label>
                                    <input type="text" name="jenis_perusahaan" class="form-control text-secondary shadow-oren" value="{{ Auth::user()->jenis_perusahaan }}" readonly>
                                </div>
                                {{-- <form action="/profile/update/{{ Auth::user()->id }}/company" method="post" class="my-4">
                                    @csrf

                                    <div class="mb-3 text-center">
                                        <button class="btn btn-dark">Simpan</button>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>

@elseif(Auth::user()->level === "Admin")

<div class="container mb-5 mt-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card border-light shadow ">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <img src="/foto/{{ Auth::user()->foto }}" alt="fotoProfile" width="200" class="img-thumbnail rounded-circle">
                            <h4 class="mt-3 mb-2 fw-bold"> {{ Auth::user()->name }} </h4>
                            <h6 class="text-secondary">{{ Auth::user()->email }}</h6>
                            <h6 class="text-secondary pb-3">{{ Auth::user()->phone_number }}</h6>
                            <hr>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-6 text-center align-self-center">
                            <h5 class="fw-bold pb-1">Administrator</h5>
                            <img src="LogoApp.png" alt="progress" width="200">
                        </div>
                        <div class="col-6">
                            <div class="row pb-1">
                                <div class="col">
                                    <h5 class="fw-bold">Deskripsi Diri</h5>
                                </div>
                                <div class="col-auto mx-3">
                                    <a href="profile/{{ Auth::user()->id }}/editProfile"><img src="iconEdit.png" alt="iconEdit" width="22"></a>
                                </div>
                            </div>
                            <div class="row">
                                <p class="pb-2 text-justify">{{ Auth::user()->description }}</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col text-center">
                            {{-- <img src="progress.png" class="position-relative top-50 start-50 translate-middle" alt="progress" width="200" > --}}
                        </div>
                        <div class="col">
                            <h5 class="fw-bold">Data Diri</h5>
                            <div class="row mt-3">
                                <div class="col-6 fw-semibold">
                                Nama Lengkap
                                </div>
                                <div class="col-6">
                                {{ Auth::user()->name }}
                                </div>
                            </div>
                            {{-- <div class="row mt-2">
                                <div class="col-6 fw-semibold">
                                Jenis Kelamin
                                </div>
                                <div class="col-6">
                                {{ Auth::user()->gender }}
                                </div>
                            </div> --}}
                            <div class="row mt-2">
                                <div class="col-6 fw-semibold">
                                Nomor Telepon
                                </div>
                                <div class="col-6">
                                {{ Auth::user()->phone_number }}
                                </div>
                            </div>
                            <div class="row mt-2 pb-2">
                                <div class="col-6 fw-semibold">
                                Email
                                </div>
                                <div class="col-6">
                                {{ Auth::user()->email }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 justify-content-center">
                        <div class="col">
                            {{-- buat gambar progress kiri --}}
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <div class="row mt-3 mb-4 justify-content-center">
                        <div class="col">
                            {{-- buat gambar progress kiri --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

@endif
</div>

@include('layout.footer')
@endsection
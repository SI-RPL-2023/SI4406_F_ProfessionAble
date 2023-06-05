@extends('layout.main')

@section('content')

<style>
    .button {
        background: #F47C46;
        color: #FFFFFF;
    }
    .button:hover {
      border-color: #F47C46;
      color: #F47C46;
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
    img.atas {
    min-height: 100%;
    width: 100%;
    height: auto;
    max-width: 100%;
    }
</style>

@include('layout.afternew')

<div class="d-flex justify-content-center">
    <img src="impian.png" alt="impian" class="atas">
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-3 me-3">
            <div class="card rounded-4">
                <ul class="list-group list-group-flush rounded-top-4">
                    <li class="list-group-item fw-bold">
                        <span class="d-flex justify-content-between">
                            Filter
                            <a href="#" class="text-decoration-none" style="color: #F47C46;">Clear All</a>
                        </span>
                    </li>
                </ul>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-11 mt-3">
                            <label class="fw-bold">Tanggal Posting</label>
                            <select class="form-select mt-2 mb-4 text-secondary">
                                <option selected>Kapan saja</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <label class="fw-bold">Posisi</label>
                            <div class="row">
                                <div class="col-7 mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type_job[]" value="Admin" id="flexCheckChecked1">
                                        <label class="form-check-label" for="flexCheckChecked1">
                                            Admin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type_job[]" value="UI/UX" id="flexCheckChecked2">
                                        <label class="form-check-label" for="flexCheckChecked2">
                                            UI/UX
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type_job[]" value="Management" id="flexCheckChecked3">
                                        <label class="form-check-label" for="flexCheckChecked3">
                                            Management
                                        </label>
                                    </div>
                                </div>
                                <div class="col-5 mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type_job[]" value="Sales" id="flexCheckChecked4">
                                        <label class="form-check-label" for="flexCheckChecked4">
                                            Sales
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type_job[]" value="CS" id="flexCheckChecked5">
                                        <label class="form-check-label" for="flexCheckChecked5">
                                            CS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type_job[]" value="Lainnya" id="flexCheckChecked6">
                                        <label class="form-check-label" for="flexCheckChecked6">
                                            Lainnya
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <label class="fw-bold">Lokasi</label>
                            <div class="row">
                                <div class="col mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="locations[]" value="Kota Bandung" id="flexCheckChecked7">
                                        <label class="form-check-label" for="flexCheckChecked7">
                                            Kota Bandung
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="locations[]" value="Kota Cimahi" id="flexCheckChecked8">
                                        <label class="form-check-label" for="flexCheckChecked8">
                                            Kota Cimahi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="locations[]" value="Kabupaten Bandung" id="flexCheckChecked9">
                                        <label class="form-check-label" for="flexCheckChecked9">
                                            Kabupaten Bandung
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="locations[]" value="Kabupaten Bandung Barat" id="flexCheckChecked10">
                                        <label class="form-check-label" for="flexCheckChecked10">
                                            Kabupaten Bandung Barat
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <label class="fw-bold">Jenis Disabilitas</label>
                            <div class="row">
                                <div class="col mt-2 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Daksa" id="flexCheckChecked11">
                                        <label class="form-check-label" for="flexCheckChecked11">
                                            Tuna Daksa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Netra" id="flexCheckChecked12">
                                        <label class="form-check-label" for="flexCheckChecked12">
                                            Tuna Netra
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Rungu" id="flexCheckChecked13">
                                        <label class="form-check-label" for="flexCheckChecked13">
                                            Tuna Rungu
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Wicara" id="flexCheckChecked14">
                                        <label class="form-check-label" for="flexCheckChecked14">
                                            Tuna Wicara
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <form action="{{ route('carilowongan') }}" method="GET">
                @csrf
                <div class="row">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control shadow-oren"  name="search" placeholder="Nama pekerjaan atau perusahaan" value="{{ request('search') }}">
                        <button class="btn button fw-medium fs-5" type="submit" value="search" id="button-addon1" style="width: 100px;">Cari</button>
                    </div>
                </div>
            </form>
            <div class="row mt-3 mb-2">
                <p class="fw-bold">{{ $total_lowongan }} Pekerjaan ditemukan</p>
            </div>
            @if ($lowongan_search->isEmpty())
            <p>Tidak ada hasil</p>
            @else
                @foreach ($lowongan_search as $tampil)
                            <div class="row mb-4">
                                <div class="container">
                                    <div class="card rounded-4">
                                        <div class="card-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col col-lg-3 d-flex align-self-center">
                                                        <img src="/foto/{{ $tampil->foto }}" alt="logo-telkom-indonesia" width="150">
                                                    </div>
                                                    <div class="col col-lg-6">
                                                        <div class="row mt-3 mb-1 fw-bold fs-5">
                                                            {{ $tampil->name }}
                                                        </div>
                                                        <div class="row fw-light text-secondary mb-3">
                                                            {{ $tampil->nama_perusahaan }}
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-12 mt-3 mb-2 fw-bold">
                                                                <i class="fa-solid fa-location-pin"></i>
                                                                {{ $tampil->location }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col text-secondary fw-light ms-3">
                                                                {{ $tampil->created_at->diffForHumans() }}  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="card-text">
                                                {!! $tampil->detail !!}
                                            </div>
                                            <div class="mx-4">
                                                <a href="/view/detail/{{ $tampil->id }}" class="text-reset">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

@include('layout.footer')
@endsection
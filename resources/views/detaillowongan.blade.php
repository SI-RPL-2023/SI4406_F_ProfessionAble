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

<form action="/detail/Lowongan/applyPage/{{ $apply_job->id }}" method="POST">
    @csrf
    <div class="container my-5">
        <div class="row mb-3">
            <div class="col-2">
                <img src="{{ asset('logo-telkom-indonesia.png') }}" alt="logo-telkom-indonesia" width="150px">
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-2 fw-bold fs-5 d-block">
                Operator
            </div>
            <div class="col-12 fw-light text-secondary d-block">
                {{  $apply_job->name }}
            </div>
            <div class="col-3 my-1 fw-light text-secondary d-block">
                
                {{  $apply_job->location }}
            </div>
            <div class="col">
                <a href="#"><button class="btn button-outline fw-bold" style="width: 175px" type="button">Profil Perusahaan</button></a>
            </div>
        </div>
        <div class="row mt-2 mb-4 align-items-center">
            <div class="col-3">
                <div class="col-12 my-1 fw-light text-secondary">
                    <i class="fa-regular fa-clock"></i> 
                    
                    {{ $apply_job->posting_date }}
                  </div>
                <div class="col text-secondary">
                    <p class="fw-light d-inline">Berakhir pada</p>
                    
                    <b class="fw-bolder">{{ $apply_job->end_date }}</b>
                </div>
            </div>
            <div class="col">
                <div class="col">
                    <button type="submit" class="btn button fw-bold" style="width: 175px" role="button">Lamar Sekarang</button>
                </div>
            </div>
        </div>
    
        <div class="row">
            <hr>
            <div class="col mb-3">
                <h5 class="fw-bold mt-2 mb-4">Rincian Pekerjaan:</h5>
                <ul class="text-secondary fw-lighter">
                    
                    <li>{{ $apply_job->detail }}</li>
                    <li>Menjawab pertanyaan yang diajukan pelanggan tentang produk atau layanan perusahaan</li>
                    <li>Mendengarkan keluhan pelanggan agar dapat mengidentifikasi penyebab masalah dan memberikan solusi terbaik</li>
                    <li>Melakukan pemasukan berbagai data ke dalam sistem perusahaan</li>
                </ul>
            </div>
        </div>
    
        <div class="row">
            <hr>
            <div class="col">
                <h5 class="fw-bold mt-3 mb-4">Kualifikasi Umum:</h5>
                <ul class="text-secondary fw-lighter">
                    <li>Pria/Wanita, maksimal usia 26 tahun</li>
                    <li>Pendidikan minimal SMA/K</li>
                    
                    <li>{{ $apply_job->qualification }}</li>
                </ul>
            </div>
        </div>
    
        <div class="row">
            <div class="col mb-3">
                <h5 class="fw-bold mt-3 mb-4">Kualifikasi Khusus:</h5>
                <ul class="text-secondary fw-lighter">
                    <li>Tuna daksa diperbolehkan (disabilitas daksa bagian bawah)</li>
                    <li>Dapat berbahasa inggris</li>
                    <li>Dapat mengoperasikan microsoft office, minimal microsoft word</li>
                    <li>Kemampuan menganalisa dan dapat memecahkan permasalahan yang dihadapi</li>
                    <li>Berorientasi dengan target</li>
                </ul>
            </div>
        </div>
</form>

    <div class="row">
        <hr>
        <div class="col">
            <h5 class="fw-bold mt-3 mb-4">Lowongan Kerja Lainnya</h5>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                          <div class="col col-lg-2">
                            <img src="logo-telkom-indonesia.png" alt="logo-telkom-indonesia" width="150">
                          </div>
                          <div class="col col-lg-6">
                            <div class="row my-2 fw-bold fs-5">
                                Customer Service
                            </div>
                            <div class="row fw-light text-secondary">
                                Telkom Indonesia
                            </div>
                          </div>
                          <div class="col">
                            <div class="row my-2 fw-bold">
                                <div class="col-12">
                                    <i class="fa-solid fa-location-pin"></i>
                                    Bandung, Indonesia
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-secondary fw-light ms-3">
                                    3 Hari yang lalu  
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  <div class="card-text">
                        <ul>
                            <li>Tuna daksa, tuna wicara diperbolehkan</li>
                            <li>Kemapuan untuk mau belajar hal baru dan dapat cepat tanggap terhadap ilmu tersebut</li>
                            <li>Bertanggung jawab dan dapat bekerja di bawah tekanan</li>
                        </ul>
                  </div>
                  <div class="mx-4">
                    <a href="#" class="text-reset">Selengkapnya</a>
                  </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                          <div class="col col-lg-2">
                            <img src="logo-telkom-indonesia.png" alt="logo-telkom-indonesia" width="150">
                          </div>
                          <div class="col col-lg-6">
                            <div class="row my-2 fw-bold fs-5">
                                Staff Admin
                            </div>
                            <div class="row fw-light text-secondary">
                                Telkom Indonesia
                            </div>
                          </div>
                          <div class="col">
                            <div class="row my-2 fw-bold">
                                <div class="col-12">
                                    <i class="fa-solid fa-location-pin"></i>
                                    Bandung, Indonesia
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-secondary fw-light ms-3">
                                    3 Hari yang lalu  
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  <div class="card-text">
                        <ul>
                            <li>Tuna daksa dan tuna rungu (dengan memakai alat) diperbolehkan</li>
                            <li>Kemapuan untuk mau belajar hal baru dan dapat cepat tanggap terhadap ilmu tersebut</li>
                            <li>Bertanggung jawab dan dapat bekerja di bawah tekanan</li>
                        </ul>
                  </div>
                  <div class="mx-4">
                    <a href="#" class="text-reset">Selengkapnya</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layout.footer')
@endsection
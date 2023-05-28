@extends('layout.main')

@section('content')
<<<<<<< HEAD
    <div class="container">
        <div class="row justify-content-center my-5">
            <h2 class="fw-bold">Riwayat Lamaran</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="card">
            @foreach ($list_history as $key => $value)
            <div class="card-body">
                <div class="card-text">
                    <div class="container mx-1">
                        <div class="row">
                            <div class="col-md-2">
                                Tanggal Pengajuan
                            </div>
                            <div class="col">
                                : {{ $value->posting_date }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Tutup Pengajuan
                            </div>
                            <div class="col">
                                : {{ $value->end_date }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Status
                            </div>
                            <div class="col">
                                : <b>Diterima</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 mx-3">
                    <a href="/detailriwayat/{{ $value->id }}" class="text-reset">Selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <div class="container">
                    <div class="row my-1">
                        <div class="col col-lg-2">
                            <img src="trisula.png" alt="trisula" width="150">
                        </div>
                        <div class="col col-lg-6">
                            <div class="row my-2 fw-bold fs-5">
                                Staff Admin
                            </div>
                            <div class="row fw-light text-secondary">
                                Trisula Textile Industries
                            </div>
                        </div>
                        <div class="col my-2 fw-bold">
                            <i class="fa-solid fa-location-pin"></i>
                            Cimahi, Indonesia
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
                                : 18 Februari 2023
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Tutup Pengajuan
                            </div>
                            <div class="col">
                                : 31 Februari 2023
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Status
                            </div>
                            <div class="col">
                                : <b>Ditolak</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 mx-3">
                    <a href="#" class="text-reset">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer')
@endsection
=======

<div class="container">
  <div class="row justify-content-center my-5">
      <h2 class="fw-bold">Riwayat Lamaran</h2>
  </div>
</div>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <div class="container">
                <div class="row my-1">
                  <div class="col col-lg-2">
                    <img src="logo-telkom-indonesia.png" alt="logo-telkom-indonesia" width="150">
                  </div>
                  <div class="col col-lg-6">
                    <div class="row my-2 fw-bold fs-5">
                        Operator
                    </div>
                    <div class="row fw-light text-secondary">
                        Telkom Indonesia
                    </div>
                  </div>
                  <div class="col my-2 fw-bold">
                    <i class="fa-solid fa-location-pin"></i>
                    Bandung, Indonesia
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
                  : 23 Maret 2023
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  Tutup Pengajuan
                </div>
                <div class="col">
                  : 31 Maret 2023
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  Status
                </div>
                <div class="col">
                  : <b>Diterima</b>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-3 mx-3">
            <a href="#" class="text-reset">Selengkapnya</a>
          </div>
        </div>
    </div>
</div>

<div class="container my-5">
  <div class="card">
      <div class="card-header">
          <div class="container">
              <div class="row my-1">
                <div class="col col-lg-2">
                  <img src="trisula.png" alt="trisula" width="150">
                </div>
                <div class="col col-lg-6">
                  <div class="row my-2 fw-bold fs-5">
                      Staff Admin
                  </div>
                  <div class="row fw-light text-secondary">
                      Trisula Textile Industries
                  </div>
                </div>
                <div class="col my-2 fw-bold">
                  <i class="fa-solid fa-location-pin"></i>
                  Cimahi, Indonesia
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
                : 18 Februari 2023
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                Tutup Pengajuan
              </div>
              <div class="col">
                : 31 Februari 2023
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                Status
              </div>
              <div class="col">
                : <b>Ditolak</b>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-3 mx-3">
          <a href="#" class="text-reset">Selengkapnya</a>
        </div>
      </div>
  </div>
</div>

@include('layout.footer')
@endsection
>>>>>>> d9b4a77630e0c3499d5c6f822c3ab8715a953b29

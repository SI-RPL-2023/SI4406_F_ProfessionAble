@extends('layout.main')

@section('content')

{{-- <div class="container">
    <div class="row text-center">
        <div class="col">
            
        </div>
    </div>
</div> --}}

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card border-light shadow ">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <img src="fotoProfile.jpg" alt="fotoProfile" width="200" class="img-thumbnail rounded-circle">
                            <h4 class="mt-3 mb-2 fw-bold"> Doni Noerman </h4>
                            <h6 class="text-secondary">dnoerman@gmail.com</h6>
                            <h6 class="text-secondary">+62 81213141516</h6>
                        </div>
                    </div>
                    <div class="row mt-5 justify-content-center">
                        <div class="col-6">
                            {{-- buat gambar progress kiri --}}
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col">
                                    <h5 class="fw-bold">Deskripsi Diri</h5>
                                </div>
                                <div class="col-auto mx-3">
                                    <a href=""><img src="iconEdit.png" alt="iconEdit" width="22"></a>
                                </div>
                            </div>
                            <div class="row">
                                <p>Perkenalkan nama saya Doni Noerman berumur 22 tahun dan berdomisili di Buah Batu, Jawa Barat. Saya tertarik dalam mempelajari hal baru sehingga saya terus mengembangkan diri.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 justify-content-center">
                        <div class="col">
                            {{-- buat gambar progress kiri --}}
                        </div>
                        <div class="col">
                            <h5 class="fw-bold">Data Diri</h5>
                            <div class="row mt-3">
                                <div class="col-6 fw-semibold">
                                  Nama Lengkap
                                </div>
                                <div class="col-6">
                                  Doni Noerman
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6 fw-semibold">
                                  Jenis Kelamin
                                </div>
                                <div class="col-6">
                                  Laki-Laki
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6 fw-semibold">
                                  Nomor Telepon
                                </div>
                                <div class="col-6">
                                  +62 81213141516
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6 fw-semibold">
                                  Email
                                </div>
                                <div class="col-6">
                                  dnoerman@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 justify-content-center">
                        <div class="col">
                            {{-- buat gambar progress kiri --}}
                        </div>
                        <div class="col">
                            <h5 class="fw-bold">Pendidikan Terakhir</h5>
                            <p class="fst-italic">Masukkan riwayat pendidikan yang jalani selama ini</p>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4 justify-content-center">
                        <div class="col">
                            {{-- buat gambar progress kiri --}}
                        </div>
                        <div class="col">
                            <h5 class="fw-bold">Jenis Disabilitas</h5>
                            <p class="fst-italic">Masukkan jenis disabilitas yang anda alami</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
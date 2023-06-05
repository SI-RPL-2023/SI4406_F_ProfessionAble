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

    .shadow-oren:focus {
        box-shadow: 0 0 0 .25rem rgba(244, 124, 70, .25);
        border-color: rgba(244, 124, 70, .5);
    }

    input[type="checkbox"]:checked {
        background-color: #F47C46;
        border-color: #FFFFFF;
    }
</style>

<div class="container text-center">
    <h2 class="mt-4 fw-bold" style="color: #F47C46">PROFILE USER</h2>
</div>

<div class="container mb-5 mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card border-light shadow ">
                <div class="card-body mx-5 my-2">
                    <form action="" method="GET" enctype="multipart/form-data">
                        @csrf
                        <div class="row text-center">
                            <div class="col">
                                @if ($data->foto === null)
                                    <img src="https://ui-avatars.com/api/?background=random&color=fff&name={{ $data->name }}"
                                        class="userPic rounded-5">
                                @else
                                    <img src="/foto/{{ $data->foto }}" alt="fotoProfile" width="200px" height="200px"
                                        class="img-thumbnail rounded-circle">
                                @endif
                                <hr>
                            </div>
                        </div>
                        {{-- @method('PUT') --}}
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Deskripsi Diri</label>
                            <textarea name="description" class="form-control shadow-oren" rows="4" style="background-color: #ffeae1" readonly>{{ $data->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control shadow-oren" value="{{ $data->name }}"
                                style="background-color: #ffeae1" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Nomor Telepon</label>
                            <input type="text" name="phone_number" class="form-control shadow-oren"
                                value="{{ $data->phone_number }}" style="background-color: #ffeae1" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Email</label>
                            <input type="email" name="email" class="form-control shadow-oren" value="{{ $data->email }}"
                                style="background-color: #ffeae1" readonly>
                        </div>
                        @if ($data->level === 'Pelamar')
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Pendidikan Terakhir</label>
                                <input type="text" name="education" class="form-control shadow-oren"
                                    value="{{ $data->education }}" style="background-color: #ffeae1" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Jenis Kelamin</label>
                                <input type="text" name="gender" class="form-control shadow-oren" value="{{ $data->gender }}"
                                    style="background-color: #ffeae1" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Jenis Disabilitas</label>
                                <p class="pt-2">- {{ $data->type_disability }}</p>
                            </div>
                        @endif
                        @if ($data->level === 'Company')
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">URL Perusahaan</label>
                                <input type="text" name="url" class="form-control shadow-oren"
                                    value="{{ $data->url }}" style="background-color: #ffeae1" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Website
                                    Perusahaan</label>
                                <input type="text" name="website" class="form-control shadow-oren"
                                    value="{{ $data->website }}" style="background-color: #ffeae1" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Industri</label>
                                <input type="text" name="industri" class="form-control shadow-oren"
                                    value="{{ $data->industri }}" style="background-color: #ffeae1" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Ukuran
                                    Perusahaan</label>
                                <input type="text" name="ukuran_perusahaan" class="form-control shadow-oren"
                                    value="{{ $data->ukuran_perusahaan }}" style="background-color: #ffeae1"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Jenis
                                    Perusahaan</label>
                                <input type="text" name="jenis_perusahaan" class="form-control shadow-oren"
                                    value="{{ $data->jenis_perusahaan }}" style="background-color: #ffeae1"
                                    readonly>
                            </div>
                        @endif
                        <div class="d-grid gap-2 d-md-block">
                            @if ($data->level == 'Company')
                                <a href="/listPerusahaan" class="btn button fw-bold my-2" style="width: 175px"
                                    type="submit">Kembali</a>
                            @elseif ($data->level == 'Pelamar')
                                <a href="/listUser" class="btn button fw-bold my-2" style="width: 175px"
                                    type="submit">Kembali</a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')
@endsection

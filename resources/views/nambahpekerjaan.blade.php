@extends('layout.main')

@section('content')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

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

@include('layout.afternew')

<div data-aos="zoom-in-up">
<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-11">
            <h4 class="fw-bold">Lowongan Pekerjaan</h4>
        </div>
    </div>
</div>
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-11">
            <div class="card border-light shadow">
                <div class="card-body mx-3 my-4">
                    <form action="/add/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container mb-3">
                            <input type="hidden" name="nama_perusahaan" value="{{ Auth::user()->name }}">
                            <input type="hidden" name="foto" value="{{ Auth::user()->foto }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="row">
                                <div class="col">
                                    <label for="" class="form-label fw-medium mb-3">Nama Perusahaan</label>
                                    <input type="text" name="name" class="form-control text-secondary shadow-oren"
                                        value="{{ Auth::user()->name }}" style="background-color: #d3d3d3" readonly>
                                </div>
                                <div class="col">
                                    <label for="" class="form-label fw-medium mb-3">Nomor Telepon</label>
                                    <input type="text" name="phone_number" class="form-control text-secondary shadow-oren"
                                        value="{{ Auth::user()->phone_number }}" style="background-color: #d3d3d3"
                                        readonly>
                                </div>
                                <div class="col">
                                    <label for="location" class="form-label fw-medium mb-3">Alamat</label>
                                    <input type="text" name="location" class="form-control shadow-oren">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <label for="name" class="form-label fw-medium mt-3">Jenis Pekerjaan</label>
                            <input type="text" name="name" class="form-control my-3 shadow-oren">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label for="end_date" class="form-label fw-medium mt-3">Tanggal Berakhir Lowongan</label>
                                    <input type="date" name="end_date" class="form-control my-3 shadow-oren">
                                </div>
                                <div class="col">
                                    <div class="container">
                                        <label for="" class="form-label fw-medium mt-3">Jenis
                                            Disabilitas</label>
                                        <div class="row">
                                            <div class="col mt-2">
                                                <div class="form-check">
                                                    <input class="form-check-input shadow-oren" type="checkbox"
                                                        name="type_disability[]" value="Tuna Daksa"
                                                        id="flexCheckChecked1">
                                                    @if (in_array('Tuna Daksa', explode(', ', Auth::user()->type_disability)))
                                                        checked
                                                    @endif
                                                    <label class="form-check-label" for="flexCheckChecked1">
                                                        Tuna Daksa
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input shadow-oren" type="checkbox"
                                                        name="type_disability[]" value="Tuna Netra"
                                                        id="flexCheckChecked2">
                                                    @if (in_array('Tuna Netra', explode(', ', Auth::user()->type_disability)))
                                                        checked
                                                    @endif
                                                    <label class="form-check-label" for="flexCheckChecked2">
                                                        Tuna Netra
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col mt-2">
                                                <div class="form-check">
                                                    <input class="form-check-input shadow-oren" type="checkbox"
                                                        name="type_disability[]" value="Tuna Rungu"
                                                        id="flexCheckChecked3">
                                                    @if (in_array('Tuna Rungu', explode(', ', Auth::user()->type_disability)))
                                                        checked
                                                    @endif
                                                    <label class="form-check-label" for="flexCheckChecked3">
                                                        Tuna Rungu
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input shadow-oren" type="checkbox"
                                                        name="type_disability[]" value="Tuna Wicara"
                                                        id="flexCheckChecked4">
                                                    @if (in_array('Tuna Wicara', explode(', ', Auth::user()->type_disability)))
                                                        checked
                                                    @endif
                                                    <label class="form-check-label" for="flexCheckChecked4">
                                                        Tuna Wicara
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <label for="detail" class="form-label fw-medium mt-3">Rincian Pekerjaan</label>
                            <textarea name="detail" id="rincian_pekerjaan" class="form-control my-3" rows="8"></textarea>
                        </div>
                        <div class="container">
                            <label for="qualification" class="form-label fw-medium mt-3">Kualifikasi Umum</label>
                            <textarea name="qualification" id="qualification" class="form-control my-3" rows="8"></textarea>
                        </div>
                        <div class="container">
                            <label for="" class="form-label fw-medium mt-3">Kualifikasi Khusus</label>
                            <textarea name="qualification_khusus" id="khusus" class="form-control my-3" rows="8"></textarea>
                        </div>
                        <div class="container d-grid gap-2 d-md-block">
                            <a href="/home"><button class="btn button-outline fw-bold mt-3" style="width: 175px"
                                    type="button"> Batal </button></a>
                            <button class="btn button fw-bold mx-5 mt-3" style="width: 175px"
                                type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    $('#rincian_pekerjaan').summernote({
        placeholder: 'Rincian Pekerjaan',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>
<script>
    $('#qualification').summernote({
        placeholder: 'Kualifikasi Umum',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>
<script>
    $('#khusus').summernote({
        placeholder: 'Kualifikasi Khusus',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>


@include('layout.footer')
@endsection

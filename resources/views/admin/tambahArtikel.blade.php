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
        color:#7c7c7c;
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
</style>

<div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 250px; min-height: 100vh; background-color: #eb5a16bd;" data-aos="fade-right">
        <div class="text-center">
            <a href="/home" class="mb-3 mb-md-0 me-md-auto">
                <img src="LogoApp.png" alt="LogoApp" width="150px" height="100px">
            </a>
        </div>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto mx-2">
            <li class="nav-item mb-2">
            <a href="/dashboard" class="nav-link text-dark" aria-current="page">
                <span class="px-2"><i class="fa-solid fa-house"></i></span>
                Dashboard
            </a>
            </li>
            <li class="mb-2">
            <a href="/artikel" class="nav-link" style="background-color: white; color: black; font-weight: bold;">
                <span class="px-2"><i class="fa-solid fa-newspaper"></i></span>
                Artikel
            </a>
            </li>
            <li class="mb-2">
            <a href="/listUser" class="nav-link text-dark " >
                <span class="px-2"><i class="fa-solid fa-users"></i></span>
                Pengguna
            </a>
            </li>
            <li class="mb-2">
            <a href="/listPerusahaan" class="nav-link text-dark" >
                <span class="px-2"><i class="fa-solid fa-city"></i></span>
                Perusahaan
            </a>
            </li>
        </ul>
        <hr>
        <ul class="nav nav-pills flex-column mx-2">
            <li class="nav-item">
                <a href="/logout" class="nav-link text-dark">
                    <span class="px-2"><i class="fa-solid fa-right-from-bracket"></i></i></span>
                    Log Out
                </a>
            </li>
        </ul>
    </div>
    <div class="container mx-5 mt-5 mb-2" data-aos="zoom-in">
        <div class="row text-secondary">
            <div class="col">
                <span class="px-2"><i class="fa-solid fa-newspaper"></i></span>
                Artikel
            </div>
            <div class="col text-end mx-4">
                <i class="fa-regular fa-bell"></i>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center my-4">
            <div class="col">
                <div class="card border-light shadow">
                    <div class="card-body mx-3">
                        <form action="/add/store/artikel" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                <label for="title" class="form-label fw-bold">Judul*</label>
                                <input type="text" name="title" class="form-control my-3 shadow-oren">
                            </div>
                            <div class="container mb-3 mt-3">
                                <div class="row gap-2">
                                    <div class="col">
                                        <label for="author" class="form-label fw-bold mb-3">Nama*</label>
                                        <input type="text" name="author" class="form-control text-secondary shadow-oren">
                                    </div>
                                    <div class="col">
                                        <label for="gambar" class="form-label fw-bold mb-3">Unggah Gambar*</label>
                                        <input type="file" class="form-control shadow-oren" id="gambar" name="gambar">
                                    </div>
                                    <div class="col">
                                        <label for="posting_date" class="form-label fw-bold mb-3">Tanggal Posting*</label>
                                        <input type="date" name="posting_date" class="form-control shadow-oren">
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <label for="isi" class="form-label fw-bold mt-2 mb-3">Isi Artikel*</label>
                                <textarea name="isi" id="fill_article" class="form-control my-3 shadow-oren" rows="8"></textarea>
                            </div>
                            <div class="container d-grid gap-2 d-md-block text-center">
                                <a href="/artikel"><button class="btn button-outline fw-bold mt-3" style="width: 150px"
                                        type="button">Batal</button></a>
                                <button class="btn button fw-bold mx-5 mt-3" style="width: 150px"
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
    $('#fill_article').summernote({
        placeholder: 'Isi artikel',
        tabsize: 2,
        height: 200,
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

{{-- @include('layout.footer') --}}
@endsection
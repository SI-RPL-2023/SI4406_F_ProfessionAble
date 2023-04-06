@extends('layout.main')

@section('content')
@include('layout.navbar')
    
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5">
                <div class="card border-light">
                    <div class="card-body">
                        <h2 class="mb-4 text-center">Buat Akun</h2>
                        <p>Sudah punya akun? <a href="#">Masuk</a></p>
                        <form action="" method="POST">
                        @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Lengkap*</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nomor Handphone*</label>
                                <input type="text" name="phone_number" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email*</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password*</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <p>Password harus minimal 5 kata.</p> {{-- beneran 5 kata nih, bukan 5 huruf kah?? --}}
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary fw-bold" type="submit">Buat Akun</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
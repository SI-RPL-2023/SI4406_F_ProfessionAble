@extends('layout.main')

@section('content')
    
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card border-light shadow ">
                    <div class="card-body mx-5 my-2">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Deskripsi Diri</label>
                                <textarea name='description' class="form-control" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Jenis Kelamin</label>
                                <input type="text" name="gender" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Nomor Telepon</label> {{-- ini klo di regist nomor HP btw, bukan telepon --}}
                                <input type="text" name="phone_number" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Pendidikan Terakhir</label>
                                <input type="text" name="education" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Jenis Disabilitas</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="tuna_daksa" id="flexCheckDefault">
                                    <label class="form-check-label" for="">
                                      Tuna Daksa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="tuna_netra" id="flexCheckChecked">
                                    <label class="form-check-label" for="">
                                      Tuna Netra
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="tuna_rungu" id="flexCheckChecked">
                                    <label class="form-check-label" for="">
                                      Tuna Rungu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="tuna_wicara" id="flexCheckChecked">
                                    <label class="form-check-label" for="">
                                      Tuna Wicara
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-block">
                                <button class="btn btn-outline-primary fw-bold text-secondary" style="width: 175px" type="button">Batal</button>
                                <button class="btn btn-primary fw-bold mx-5" style="width: 175px" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
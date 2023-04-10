@extends('navbar.after')
@section('homePage')
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card border-light shadow ">
                    <div class="card-body mx-5 my-2">
                        <form action="{{ url('profile/'.$data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Deskripsi Diri</label>
                                <textarea name="description" class="form-control" rows="4">{{ $data->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Jenis Kelamin</label>
                                <input type="text" name="gender" class="form-control" value="{{ $data->gender }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Nomor Telepon</label> {{-- ini klo di regist nomor HP btw, bukan telepon --}}
                                <input type="text" name="phone_number" class="form-control" value="{{ $data->phone_number }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $data->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Pendidikan Terakhir</label>
                                <input type="text" name="education" class="form-control" value="{{ $data->education }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Jenis Disabilitas</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Daksa" id="flexCheckDefault">
                                    <label class="form-check-label" for="">
                                      Tuna Daksa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Netra" id="flexCheckChecked">
                                    <label class="form-check-label" for="">
                                      Tuna Netra
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Rungu" id="flexCheckChecked">
                                    <label class="form-check-label" for="">
                                      Tuna Rungu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Wicara" id="flexCheckChecked">
                                    <label class="form-check-label" for="">
                                      Tuna Wicara
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-block">
                                <a href="{{ url('profile') }}"><button class="btn btn-outline-primary fw-bold text-secondary" style="width: 175px" type="button"> Batal </button></a>
                                <button class="btn btn-primary fw-bold mx-5" style="width: 175px" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layout.footer')
@endsection
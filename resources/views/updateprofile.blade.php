@extends('layout.main')

@section('content')

<style>
    .button {
        background: #F47C46;
        color: #FFFFFF;
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
    input[type="checkbox"]:checked {
        background-color: #F47C46;
        border-color: #FFFFFF;
    }
</style>

    <div class="container text-center">
        <h2 class="mt-4 fw-bold" style="color: #F47C46"> Edit Profil</h2>
    </div>
    <div class="container mb-5 mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card border-light shadow ">
                    <div class="card-body mx-5 my-2">
                        <form action="{{ url('profile/'.$data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Deskripsi Diri</label>
                                <textarea name="description" class="form-control" rows="4" style="background-color: #ffeae1">{{ $data->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" value="{{ $data->name }}" style="background-color: #ffeae1">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Jenis Kelamin</label>
                                <input type="text" name="gender" class="form-control" value="{{ $data->gender }}" style="background-color: #ffeae1">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Nomor Telepon</label> {{-- ini klo di regist nomor HP btw, bukan telepon --}}
                                <input type="text" name="phone_number" class="form-control" value="{{ $data->phone_number }}" style="background-color: #ffeae1">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $data->email }}" style="background-color: #ffeae1">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Pendidikan Terakhir</label>
                                <input type="text" name="education" class="form-control" value="{{ $data->education }}" style="background-color: #ffeae1">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Jenis Disabilitas</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Daksa" id="flexCheckChecked1"
                                    @if (in_array('Tuna Daksa', explode(', ', $data->type_disability)))
                                        checked 
                                    @endif>
                                    <label class="form-check-label" for="flexCheckChecked1">
                                      Tuna Daksa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Netra" id="flexCheckChecked2"
                                    @if (in_array('Tuna Netra', explode(', ', $data->type_disability)))
                                        checked    
                                    @endif>
                                    <label class="form-check-label" for="flexCheckChecked2">
                                      Tuna Netra
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Rungu" id="flexCheckChecked3"
                                    @if (in_array('Tuna Rungu', explode(', ', $data->type_disability)))
                                        checked    
                                    @endif>
                                    <label class="form-check-label" for="flexCheckChecked3">
                                      Tuna Rungu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Wicara" id="flexCheckChecked4"
                                    @if (in_array('Tuna Wicara', explode(', ', $data->type_disability)))
                                        checked    
                                    @endif>
                                    <label class="form-check-label" for="flexCheckChecked4">
                                      Tuna Wicara   
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-block">
                                <a href="{{ url('profile') }}"><button class="btn button-outline fw-bold" style="width: 175px" type="button"> Batal </button></a>
                                <button class="btn button fw-bold mx-5" style="width: 175px" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layout.footer')
@endsection
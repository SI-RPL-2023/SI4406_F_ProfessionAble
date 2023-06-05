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

@include('layout.afternew')

{{-- <div class="container text-center">
    <h2 class="fw-bold" style="color: #F47C46">UPDATE PROFILE</h2>
</div> --}}
<div data-aos="fade-up">
<div class="container mb-5 mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card border-light shadow ">
                <div class="card-body mx-5 my-2">
                    <form action="/profile/update/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row text-center">
                            <div class="col">
                                @if (Auth::user()->foto === NULL)
                                <img src="https://ui-avatars.com/api/?background=random&color=fff&name={{ Auth::user()->name }}" class="userPic rounded-5">
                                @else
                                    <img src="/foto/{{ Auth::user()->foto }}" alt="fotoProfile" width="200px" height="200px" class="img-thumbnail rounded-circle">
                                @endif
                                <div class="my-4">
                                    <input type="file" class="form-control shadow-oren" name="foto">
                                </div>
                                <hr>
                                
                            </div>
                        </div>
                        {{-- @method('PUT') --}}
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Deskripsi Diri</label>
                            <textarea name="description" class="form-control shadow-oren" rows="4" style="background-color: #ffeae1">{{ Auth::user()->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control shadow-oren" value="{{ Auth::user()->name }}" style="background-color: #ffeae1">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Nomor Telepon</label> {{-- ini klo di regist nomor HP btw, bukan telepon --}}
                            <input type="text" name="phone_number" class="form-control shadow-oren" value="{{ Auth::user()->phone_number }}" style="background-color: #ffeae1">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Email</label>
                            <input type="email" name="email" class="form-control shadow-oren" value="{{ Auth::user()->email }}" style="background-color: #ffeae1">
                        </div>
                        @if (Auth::user()->level === "Pelamar")
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Pendidikan Terakhir</label>
                                <input type="text" name="education" class="form-control shadow-oren" value="{{ Auth::user()->education }}" style="background-color: #ffeae1">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Jenis Kelamin</label>
                                <input type="text" name="gender" class="form-control shadow-oren" value="{{ Auth::user()->gender }}" style="background-color: #ffeae1">
                            </div>
                            
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Jenis Disabilitas</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Daksa" id="flexCheckChecked1"
                                    @if (in_array('Tuna Daksa', explode(', ', Auth::user()->type_disability)))
                                        checked 
                                    @endif>
                                    <label class="form-check-label" for="flexCheckChecked1">
                                    Tuna Daksa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Netra" id="flexCheckChecked2"
                                    @if (in_array('Tuna Netra', explode(', ', Auth::user()->type_disability)))
                                        checked    
                                    @endif>
                                    <label class="form-check-label" for="flexCheckChecked2">
                                    Tuna Netra
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Rungu" id="flexCheckChecked3"
                                    @if (in_array('Tuna Rungu', explode(', ', Auth::user()->type_disability)))
                                        checked    
                                    @endif>
                                    <label class="form-check-label" for="flexCheckChecked3">
                                    Tuna Rungu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Wicara" id="flexCheckChecked4"
                                    @if (in_array('Tuna Wicara', explode(', ', Auth::user()->type_disability)))
                                        checked    
                                    @endif>
                                    <label class="form-check-label" for="flexCheckChecked4">
                                    Tuna Wicara   
                                    </label>
                                </div>
                            </div>
                        @endif
                            @if (Auth::user()->level === "Company")
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium">URL Perusahaan</label>
                                    <input type="text" name="url" class="form-control shadow-oren" value="{{ Auth::user()->url }}" style="background-color: #ffeae1">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium">Website Perusahaan</label>
                                    <input type="text" name="website" class="form-control shadow-oren" value="{{ Auth::user()->website }}" style="background-color: #ffeae1">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium">Industri</label>
                                    <input type="text" name="industri" class="form-control shadow-oren" value="{{ Auth::user()->industri }}" style="background-color: #ffeae1">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium">Ukuran Perusahaan</label>
                                    <input type="text" name="ukuran_perusahaan" class="form-control shadow-oren" value="{{ Auth::user()->ukuran_perusahaan }}" style="background-color: #ffeae1">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-medium">Jenis Perusahaan</label>
                                    <input type="text" name="jenis_perusahaan" class="form-control shadow-oren" value="{{ Auth::user()->jenis_perusahaan }}" style="background-color: #ffeae1">
                                </div>
                            @endif
                        <div class="d-grid gap-2 d-md-block">
                            {{-- <a href="{{ url('profile') }}"><button class="btn button-outline fw-bold" style="width: 175px" type="button"> Batal </button></a> --}}
                            <button class="btn button fw-bold mb-3 mt-2" style="width: 175px" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('layout.footer')
@endsection
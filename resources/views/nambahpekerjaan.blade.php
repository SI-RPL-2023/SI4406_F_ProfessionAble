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
    input[type="checkbox"]:checked {
        background-color: #F47C46;
        border-color: #FFFFFF;
    }
</style>

    <div class="container my-3">
      <div class="row justify-content-center">
        <div class="col-12 col-md-11">
          <h2 class="fw-bold">Lowongan Pekerjaan</h2>
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
                              <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                <div class="row">
                                  <div class="col">                                 
                                    <label for="" class="form-label fw-medium mb-3">Nama Perusahaan</label>
                                    <input type="text" name="name" class="form-control text-secondary" value="{{ Auth::user()->name }}" style="background-color: #d3d3d3" readonly>
                                  </div>
                                  <div class="col">
                                    <label for="" class="form-label fw-medium mb-3">Nomor Telepon</label>
                                    <input type="text" name="phone_number" class="form-control text-secondary" value="{{ Auth::user()->phone_number }}" style="background-color: #d3d3d3" readonly>
                                  </div>
                                  <div class="col">
                                    <label for="location" class="form-label fw-medium mb-3">Alamat</label>
                                    <input type="text" name="location" class="form-control text-secondary" style="background-color: #d3d3d3">
                                  </div>
                                </div>
                            </div>
                            <div class="container">
                                <label for="name" class="form-label fw-medium mt-3">Jenis Pekerjaan</label>
                                <input type="text" name="name" class="form-control my-3">
                            </div>
                            <div class="container">
                                <div class="row">
                                  <div class="col">
                                    <label for="posting_date" class="form-label fw-medium mt-3">Tanggal Buka Lowongan</label>
                                    <input type="date" name="posting_date" class="form-control my-3">
                                  </div>
                                  <div class="col">
                                    <label for="end_date" class="form-label fw-medium mt-3">Tanggal Berakhir Lowongan</label>
                                    <input type="date" name="end_date" class="form-control my-3">
                                  </div>
                                  <div class="col">
                                    <div class="container">
                                        <label for="" class="form-label fw-medium mt-3">Jenis Disabilitas</label>
                                        <div class="row">
                                          <div class="col mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Daksa" id="flexCheckChecked1">
                                                <label class="form-check-label" for="flexCheckChecked1">
                                                  Tuna Daksa
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Netra" id="flexCheckChecked2">
                                                <label class="form-check-label" for="flexCheckChecked2">
                                                  Tuna Netra
                                                </label>
                                            </div>
                                          </div>
                                          <div class="col mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Rungu" id="flexCheckChecked3">
                                                <label class="form-check-label" for="flexCheckChecked3">
                                                  Tuna Rungu
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type_disability[]" value="Tuna Wicara" id="flexCheckChecked4">
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
                                <textarea name="detail" class="form-control my-3" rows="8"></textarea>
                            </div>
                            <div class="container">
                                <label for="qualification" class="form-label fw-medium mt-3">Kualifikasi Umum</label>
                                <textarea name="qualification" class="form-control my-3" rows="8"></textarea>
                            </div>
                            <div class="container">
                                <label for="" class="form-label fw-medium mt-3">Kualifikasi Khusus</label>
                                <textarea name="description_KHU" class="form-control my-3" rows="8"></textarea>
                            </div>  
                            <div class="container d-grid gap-2 d-md-block">
                                <a href="#"><button class="btn button-outline fw-bold mt-3" style="width: 175px" type="button"> Batal </button></a>
                                <button class="btn button fw-bold mx-5 mt-3" style="width: 175px" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layout.footer')
@endsection
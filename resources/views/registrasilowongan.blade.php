@extends('layout.main')

@section('content')

<style>
    .button {
        background: #F47C46;
        color: #FFFFFF;
    }
    .button:hover {
        color: #7c7c7c;
        border-color:  #f47c46;
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
    input[type="checkbox"]:hover {
        background-color: #fdc3a8;
    }
    input[type="checkbox"]:checked {
        background-color: #F47C46;
        border: #F47C46;
    }

</style>


    <div class="container">
        <div class="row justify-content-center my-2">
            <div class="col-12 col-md-10">
                <h2 class="mt-4 fw-bold"> Daftar Lowongan Pekerjaan</h2>
                <p class="text-secondary">Lengkapi persyaratan pekerjaan yang kamu tuju sehingga kamu dapat mengirimkan lamaran. Yuk, lengkapi dulu.</p>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card border-light shadow ">
                    <div class="card-body mx-5 my-2">
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Deskripsi Diri*</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Nama Lengkap*</label>
                                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Jenis Kelamin*</label>
                                <input type="text" name="gender" class="form-control" value="{{ Auth::user()->gender}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Nomor Telepon*</label>
                                <input type="text" name="phone_number" class="form-control" value="{{Auth::user()->phone_number}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Email*</label>
                                <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Pendidikan Terakhir*</label>
                                <input type="text" name="education" class="form-control" value="{{ Auth::user()->education }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Jenis Disabilitas*</label>
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
                            
                            <form action="/apply/job" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="name" value="{{ $apply_page->name }}">
                                <input type="hidden" name="location" value="{{ $apply_page->location }}">
                                <input type="hidden" name="posting_date" value="{{ $apply_page->posting_date }}">
                                <input type="hidden" name="end_date" value="{{ $apply_page->end_date }}">
                                <input type="hidden" name="detail" value="{{ $apply_page->detail }}">
                                <input type="hidden" name="qualification" value="{{ $apply_page->qualification }}">
                                <input type="hidden" name="posting_date" value="{{ $apply_page->posting_date }}">
                                <input type="hidden" name="end_date" value="{{ $apply_page->end_date }}">
                                @csrf
                                
                                {{-- //Note: adnan tolong benerin tampilannya --}}
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Dokumen</label>
                                    <input type="file" class="form-control" id="formFile" name="file">
                                </div>

                                <div class="mb-3">
                                    <label for="apply" class="form-label">Tanggal Apply</label>
                                    <input type="date" class="form-control" id="apply" name="apply_date" value="{{ $apply_page->apply_date }}">
                                </div>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn button fw-bold" style="width: 175px" type="submit">Lamar</button>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layout.footer')
@endsection
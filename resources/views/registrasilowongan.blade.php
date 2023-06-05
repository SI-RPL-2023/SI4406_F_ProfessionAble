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
.shadow-oren:focus {
        box-shadow: 0 0 0 .25rem rgba(244, 124, 70, .25);
        border-color: rgba(244, 124, 70, .5);
    }
input[type="checkbox"]:hover {
    background-color: #fdc3a8;
}
input[type="checkbox"]:checked {
    background-color: #F47C46;
    border: #F47C46;
}
</style>

@include('layout.afternew')

<div class="container">
    <div class="row justify-content-center my-2">
        <div class="col-12 col-md-10">
            <h2 class="mt-3 fw-bold">Daftar Lowongan Pekerjaan</h2>
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
                            <textarea name="description" class="form-control shadow-oren" rows="4">{{ Auth::user()->description}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Nama Lengkap*</label>
                            <input type="text" name="name" class="form-control shadow-oren" value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Jenis Kelamin*</label>
                            <input type="text" name="gender" class="form-control shadow-oren" value="{{ Auth::user()->gender}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Nomor Telepon*</label>
                            <input type="text" name="phone_number" class="form-control shadow-oren" value="{{Auth::user()->phone_number}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Email*</label>
                            <input type="email" name="email" class="form-control shadow-oren" value="{{ Auth::user()->email }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Pendidikan Terakhir*</label>
                            <input type="text" name="education" class="form-control shadow-oren" value="{{ Auth::user()->education }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-medium">Jenis Disabilitas*</label>
                            <p class="pt-1">- {{ Auth::user()->type_disability }}</p>
                        </div> 
                        <form action="/apply/job" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="job_id" value="{{ $apply_page->id }}">
                            <input type="hidden" name="name" value="{{ $apply_page->name }}">
                            <input type="hidden" name="location" value="{{ $apply_page->location }}">
                            <input type="hidden" name="posting_date" value="{{ $apply_page->posting_date }}">
                            <input type="hidden" name="end_date" value="{{ $apply_page->end_date }}">
                            <input type="hidden" name="detail" value="{{ $apply_page->detail }}">
                            <input type="hidden" name="qualification" value="{{ $apply_page->qualification }}">
                            <input type="hidden" name="posting_date" value="{{ $apply_page->posting_date }}">
                            <input type="hidden" name="end_date" value="{{ $apply_page->end_date }}">
                            <input type="hidden" name="nama_perusahaan" value="{{ $apply_page->nama_perusahaan }}">
                            <input type="hidden" name="foto" value="{{ $apply_page->foto }}">
                            @csrf
                            <div class="mb-4">
                                <label for="formFile" class="form-label fw-medium">Upload CV</label>
                                <input type="file" class="form-control shadow-oren" id="formFile" name="file">
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
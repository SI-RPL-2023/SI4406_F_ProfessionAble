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
        <div class="row justify-content-center my-4">
            <div class="col-12 col-md-10">
                <h2 class="mt-4 fw-bold"> Riwayat Lamaran</h2>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card border-light shadow ">
                    <div class="card-body mx-4">
                        <div class="container my-2">
                            <div class="row">
                              <div class="col-3">
                                <img src="logo-telkom-indonesia.png" alt="logo-telkom-indonesia" width="150">
                              </div>
                              <div class="col">
                                <div class="row my-2 fw-bold fs-5">
                                    Operator
                                </div>
                                <div class="row fw-light text-secondary">
                                    Telkom Indonesia
                                </div>
                              </div>
                            </div>
                        </div>
                        <form action="#" class="my-4">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Status</label>
                                <input type="text" name="status" class="form-control text-secondary" value="Diterima" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Mulai Bekerja</label>
                                <input type="text" name="start_working" class="form-control text-secondary" value="1 April 2023" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">PIC</label>
                                <textarea name="PIC" class="form-control text-secondary" rows="3" readonly>Nama PIC : Deni Simatupang&#13;&#10;&#13;&#10;Kontak PIC : 081233448756</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-medium">Alamat Perusahaan</label>
                                <textarea name="address_company" class="form-control text-secondary" rows="3" readonly>{{ $detail_history->location }}</textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layout.footer')
@endsection
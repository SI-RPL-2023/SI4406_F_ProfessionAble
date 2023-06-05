@extends('layout.main')

@section('content')

<style>
    .button {
        background: #F47C46;
        color: #FFFFFF;
    }
    .button:hover {
      border-color: #F47C46;
      color: #F47C46;
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
    img.atas {
    min-height: 100%;
    width: 100%;
    height: auto;
    max-width: 100%;
    }
</style>

@include('layout.afternew')

<div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
<div class="d-flex justify-content-center">
    <img src="kursi_roda.png" alt="kursi_roda" class="atas">
</div>

<div class="container">
    <div class="row text-center">
        <div class="col mt-5 mb-3">
            <h3 class="fw-bold">Tentang Kami</h3>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <h5 class="fw-medium lh-base">ProfessionAble merupakan perusahaan yang bergerak dari tahun 2023 dengan memberikan layanan berupa penyedia informasi mengenai perusahaan yang membuka loongan pekerjaan untuk orang disabilitas. Sehingga, penggunanya dapat mendaftarkan diri ke perusahaan yang mereka impikan.</h5>
        </div>
    </div>
    <div class="row text-center">
        <div class="col mt-5 mb-4">
            <h3 class="fw-bold">Fokus Kami</h3>
        </div>
    </div>
    <div class="row text-center mb-5 mt-1">
        <div class="col">
            <div class="card text-bg-dark border border-0 shadow-lg">
                <img src="speaker.jpg" class="card-img" alt="speaker" style="box-shadow: 0 0 15px .25rem rgba(255, 118, 54, 0.5);">
                <div class="card-img-overlay">
                  <h5 class="card-title text-start">Menyediakan <br> lowongan pekerjaan</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-dark border border-0 shadow-lg">
                <img src="jam.jpg" class="card-img" alt="jam" style="box-shadow: 0 0 12px .25rem #9e997b;">
                <div class="card-img-overlay">
                  <h5 class="card-title text-start">Tidak butuh waktu <br> lama mengakses</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-dark border border-0 shadow-lg">
                <img src="lampu.jpg" class="card-img" alt="lampu" height="355px" style="box-shadow: 0 0 15px .25rem #ebc2c0;">
                <div class="card-img-overlay">
                  <h5 class="card-title text-start">Memberikan informasi <br> up to date</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col mt-3 mb-4">
            <h3 class="fw-bold">Kontribusi Terhadap SDGs</h3>
        </div>
    </div>
    <div class="row mt-1 mb-4">
        <div class="col-8 mb-4 d-flex align-items-center">
            <h5 class="fw-medium lh-base" style="text-align: justify; text-indent: 65px;">Berkontribusi untuk mengurangi kemiskinan dan meningkatkan kesejahteraan rakyat. Dengan terciptanya lapangan kerja yang layak dan pertumbuhan ekonomi yang inklusif dan berkelanjutan, diharapkan akan mengarah pada akses yang lebih baik bagi semua orang terhadap pendidikan, kesehatan, dan utilitas publik lainnya. Ini akan mendorong pembangunan berkelanjutan dan menciptakan lebih banyak kemakmuran bagi masyarakat secara keseluruhan.</h5>
        </div>
        <div class="col text-center">
            <img src="sdgs_8.png" alt="sdgs_8" width="250px" class="rounded-4 shadow-lg">
        </div>
    </div>
    <div class="row mb-5">
        <div class="col">
            <img src="orang.jpg" alt="orang" width="500px">
        </div>
        <div class="col d-flex align-items-center justify-content-center flex-column">
            <h1 class="text-center fw-bold text-black mx-auto">Ayo Lihat Pekerjaan <br> yang Tersedia</h1>
            <a href="/carilowongan"><button class="btn button btn-lg my-3 fw-bold" style="width: 175px" type="button">Selengkapnya</button></a>
        </div>
    </div>
</div>
</div>

@include('layout.footer')
@endsection
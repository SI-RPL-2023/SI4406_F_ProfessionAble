<style>
    .button2-outline {
        border-style: ridge;
        color: #000000;
    }

    .button2-outline:hover {
        background: #F47C46;
        color: #FFFFFF;
    }
    .linkNav {
        color: #000000;
    }
    .linkNav:hover {
        color: #F47C46;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="ms-4 my-1">
                <a href="/home"><img src="{{ asset("LogoApp.jpg") }}" alt="LogoApp" height="80px"></a>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-2 text-center">
                    <div class="fw-bold fs-5 mt-4 pt-1 linkNav">
                        <a href="/home" class="text-decoration-none text-reset">Beranda</a>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="fw-bold fs-5 mt-4 pt-1 linkNav">
                        @if (auth()->user()->level == 'Pelamar')
                            <a href="/carilowongan" class="text-decoration-none text-reset">Cari Lowongan</a>
                        @elseif (auth()->user()->level == 'Company')
                            <a href="/nambahpekerjaan" class="text-decoration-none text-reset">Unggah Pekerjaan</a>
                            @elseif (auth()->user()->level == 'Admin')
                            <a href="/dashboard" class="text-decoration-none text-reset">Admin</a>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="mt-4 d-inline-flex align-items-center">
                        <div class="me-2">
                            <i class="fa-regular fa-bell fa-lg"></i>
                        </div>
                        <div class="me-2">
                            <img src="https://ui-avatars.com/api/?background=random&color=fff&name={{ Auth::user()->name }}" alt="UserPicture" width="40px" class="rounded-circle">
                        </div>
                        <div class="dropdown">
                            <button class="btn button2-outline dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }} ({{ Auth::user()->level }})
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                @if (auth()->user()->level == "Pelamar")
                                    <li><a class="dropdown-item" href="/riwayatlamaran">Riwayat</a></li>
                                @elseif (auth()->user()->level == "Company")
                                    <li><a class="dropdown-item" href="/daftarPelamar">Daftar Pelamar</a></li>
                                @endif
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
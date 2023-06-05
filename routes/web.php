<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\applyController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\artikelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [registerController::class, 'view']) -> name('register');
Route::post('/', [registerController::class, 'registerStore']);

Route::get('/login', [LoginController::class, 'index']) -> name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout']);

//Profile
// Route::resource('profile', profileController::class);
Route::get('/profile/{id}/editProfile', [profileController::class, "editProfile"]);
Route::post('/profile/update/{id}', [profileController::class, "updateProfile"]);
Route::get('/profile', [profileController::class, "viewProfile"]);

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/nambahpekerjaan', function () {
    return view('nambahpekerjaan');
})->name('nambahpekerjaan');

Route::get('/registrasilowongan', function () {
    return view('registrasilowongan');
})->name('registrasilowongan');

Route::get('/detailriwayat', function () {
    return view('detailriwayat');
})->name('detailriwayat');

Route::get('/detaillowongan', function () {
    return view('detaillowongan');
})->name('detaillowongan');

Route::get('/profileperusahaan/{id}', [profileController::class, "detail_perusahaan"]);


//tambahan dr lala
Route::get('/company/create', [jobController::class, "createJob_view"]);
Route::get('/home', [jobController::class, "index"]);
Route::post('/add/store', [jobController::class, "createJob_store"]);
Route::get('/detailLowongan', [jobController::class, "job_detail"]);
Route::get('/view/detail/{id}', [jobController::class, "viewPage_detailApply"]);
Route::get('/view/detail/{id}', [jobController::class, "viewPage_detailApply"]);
Route::post('/detail/Lowongan/applyPage/{id}', [applyController::class, "showApplyPage"]);
Route::post('/apply/job/', [applyController::class, "apply_store"]);
//hapusJob
Route::get('/hapusJob/{id}', [jobController::class, "destroy"]);
//history
Route::get('/riwayatlamaran', [applyController::class, "historyPage"]);
Route::get('/detailriwayat/{id}', [applyController::class, "detailHistory"]);


//tampil list user
Route::get('/listUser', [adminController::class, "listPelamar"]);
Route::get('/listPerusahaan', [adminController::class, "listPerusahaan"]);
//lihat profile user
Route::get('/admin/{id}/lihatProfile', [adminController::class, "view_profile"]);

//hapus user
Route::get('/{id}/delete_pelamar', [adminController::class, "delete_akun_pelamar"]);
Route::get('/{id}/delete_perusahaan', [adminController::class, "delete_akun_perusahaan"]);
//search
Route::get('/carilowongan', [jobController::class, "listSearch"])->name('carilowongan');

// Route::get('/listUser', function () {
//     return view('/admin/listUser');
// })->name('/admin/listUser');

Route::get('/artikel', function () {
    return view('/admin/artikel');
})->name('/admin/artikel');

Route::get('/tambahartikel', function () {
    return view('/admin/tambahartikel');
})->name('/admin/tambahartikel');

Route::get('/dashboard', function () {
    return view('/admin/dashboard');
})->name('/admin/dashboard');

Route::get('/tentang', function () {
    return view('/tentang');
})->name('/tentang');

//daftar pelamar
Route::get('/melihatListPelamar', [jobController::class, "listPelamar"]);

// Route::get('/melihatListPelamar', function () {
//     return view('/melihatListPelamar');
// })->name('/melihatListPelamar');

// Route::get('/dashboard', function () {
//     return view('/admin/dashboard');
// })->name('/admin/dashboard');

// Route::get('/listPerusahaan', function () {
//     return view('/admin/listPerusahaan');
// })->name('/admin/listPerusahaan');

Route::get('/afternew', function () {
    return view('/layout/afternew');
})->name('/layout/afternew');

//artikel
Route::get('/tambahArtikel', [artikelController::class, "article_view"]);
Route::post('/add/store/artikel', [artikelController::class, "make_article"]);
Route::get('/artikel', [artikelController::class, "tampilArtikel"])->name('artikel');
Route::get('/delete/artikel/{id}', [artikelController::class, "destroy"]);
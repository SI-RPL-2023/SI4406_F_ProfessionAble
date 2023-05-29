<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\applyController;
use App\Http\Controllers\adminController;

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

//history
Route::get('/riwayatlamaran', [applyController::class, "historyPage"]);
Route::get('/detailriwayat/{id}', [applyController::class, "detailHistory"]);

//admin
Route::get('/admin/pantauUser', function () {
    return view('/admin/pantauUser');
})->name('/admin/pantauUser');

//tampil list user
Route::get('/admin/pantauUser', [adminController::class, "listUser"]);
//edit user
Route::get('/admin/{id}/editUser', [adminController::class, "editUser"]);
Route::post('/updateUser/{id}', [adminController::class, "updateUser"]);
//hapus user
Route::get('/admin/{id}/delete_akun', [adminController::class, "delete_akun"]);
//search
Route::get('/carilowongan', [jobController::class, "listSearch"])->name('carilowongan');
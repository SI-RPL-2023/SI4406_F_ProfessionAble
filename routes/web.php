<?php

use App\Http\Controllers\applyController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\jobController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mainHome');
});

Route::get('/pages/perusahaan', function () {
    return view('/pages/perusahaan');
});

Route::get('/pages/detailPerusahaan', function () {
    return view('/pages/detailPerusahaan');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

// Register Start

Route::get('/register', function () {
    return view('/register');
})->name('register');

Route::post('/register/store', [registerController::class, "register_store"]);

// Register ends here

Route::get('/mainHome', function () {
    return view('/mainHome');
});

Route::post('/postlogin', [LoginController::class, "postlogin"])->name('postlogin');
Route::get('/logout', [LoginController::class, "logout"]);

//hanya untuk admin dan company
Route::group(['middleware'=>['auth', 'ceklevel:Admin,Pelamar,Company']], function(){
    Route::get('/home', function () {
        return view('home');
    });

    // Route::get('/detailPerusahaan', [PageController::class, "detailPerusahaan"])->name('detailPerusahaan');
    // Route::get('/perusahaan', [PageController::class, "perusahaan"])->name('perusahaan');
});


Route::group(['middleware'=>['auth', 'ceklevel:Pelamar']], function(){

    Route::get('/detailPerusahaan', [PageController::class, "detailPerusahaan"])->name('detailPerusahaan');
});

Route::group(['middleware'=>['auth', 'ceklevel:Company']], function(){

Route::get('/perusahaan', [PageController::class, "perusahaan"])->name('perusahaan');
});

Route::get('profile', [profileController::class, "index"]);

Route::get('/home', [jobController::class, "index"]);

Route::get('/company/create', [jobController::class, "createJob_view"]);
Route::post('/company/create/store', [jobController::class, "createJob_store"]);


Route::get('/company/{id}', [jobController::class, "job_detail"]);

// Route::get('/Mapilnas/apply/page', [applyController::class, "viewPage_apply"]);
Route::get('/view/detail/{id}', [jobController::class, "viewPage_detailApply"]);
Route::post('/apply/job/', [applyController::class, "apply_store"]);
Route::post('/apply/page/{id}', [applyController::class, "showApplyPage"]);
Route::get('/history/historyPage/{id}', [applyController::class, "historyPage"]);
Route::get('/history/detailHistory/{id}', [applyController::class, "detailHistory"]);
Route::post('/foto_profil/{id}/foto', [registerController::class, "upload_foto"]);
// Route::get('/detailJob', [applyController::class, "apply"])->name('file.upload');
// Route::post('/detailJob', [applyController::class, "applyPost"])->name('file.upload.post');

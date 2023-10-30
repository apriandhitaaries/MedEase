<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AntreanController;
use App\Http\Controllers\BatalController;



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

Route::get('/', function () {
    // return ' Hello WPU!';
    return view('welcome');
});

Route::get('/home', function () {
    // return ' Hello WPU!';
    return view('index');
});



Route::get('/admin', function () {
    // return ' Hello WPU!';
    return view('login');
});

// routes/web.php

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'showRegistrationForm']);
Route::post('/create', [LoginController::class, 'create']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Route::get('/pasien', function () {
//     // return ' Hello WPU!';
//     return view('dashboardP');
// });

Route::get('/dashboardP', [PasienController::class, 'index']);


// Rute untuk menampilkan formulir pendaftaran
Route::get('/daftar', function () {
    return view('pendaftaran');
});

// Rute untuk menyimpan data pendaftaran
Route::post('/daftar', [PasienController::class, 'create'])->name('pendaftaran');

// Rute untuk menampilkan daftar pasien
Route::get('/pasiens', [PasienController::class, 'index'])->name('pasiens.index');

// Rute untuk menampilkan detail pasien
Route::get('/pasiens/{id}', [PasienController::class, 'show'])->name('pasiens.show');

// Rute untuk menampilkan formulir edit pasien
Route::get('/pasiens/{id}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');

// Rute untuk menyimpan perubahan data pasien yang diedit
Route::put('/pasiens/{id}', [PasienController::class, 'update'])->name('pasiens.update');

// Rute untuk menghapus data pasien
Route::delete('/pasiens/{id}', [PasienController::class, 'destroy'])->name('pasiens.destroy');

// Rute untuk menampilkan formulir pendaftaran
Route::get('/antrean', function () {
    return view('cekantrean');
});

Route::post('/cek-antrean', [AntreanController::class, 'cekAntrean']);

Route::get('/bataldaftar', function () {
    return view('bataldaftar');
});

Route::post('/cek-batal', [BatalController::class, 'cekBatal'])->name('cekbatal');

Route::get('/suksesbatal', function () {
    return view('suksesbatal');
})->name('bataldaftar');

Route::delete('/batalkan-pendaftaran/{id}', [BatalController::class, 'batalkanPendaftaran'])->name('batalkan-pendaftaran');


Route::get('/artikel', function () {
    return view('artikel');
});



Route::get('/aboutus', function () {
    return view('aboutus');
});

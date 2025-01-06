<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DaftarguruController;
use App\Http\Controllers\DaftarpelajaranController;
use App\Http\Controllers\DaftarsiswaController;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KegiatanekskulController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\OsisController;
use App\Http\Controllers\PiketController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UdinController;
use App\Models\Kegiatanekskul;
use Illuminate\Support\Facades\Route;







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



Route::get('/', [DepanController::class, 'home'])->name('home'); 
Route::get('/artikel', [DepanController::class, 'artikel'])->name('artikel');
Route::get('/artikel/{slug}', [DepanController::class, 'artikeldetail'])->name('artikeldetail'); 




//dashboard routes
Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard', 'as' => 'admin.'], function () {
    //single action controllers
    Route::get('/', HomeController::class)->name('home'); 
    //ini data dari controller
    Route::resource('artikel',ArtikelController::class);

    Route::resource('siswa',SiswaController::class);

    Route::resource('kategori',KategoriController::class);

    Route::resource('tag',TagController::class);

    Route::resource('daftarsiswa',DaftarsiswaController::class);

    Route::resource('jadwal',JadwalController::class);

    Route::resource('daftarguru',DaftarguruController::class);

    Route::resource('nilai',NilaiController::class);

    Route::resource('kegiatanekskul',KegiatanekskulController::class);

    Route::resource('piket',PiketController::class);

    Route::resource('absen',AbsenController::class);

    Route::resource('daftarpelajaran',DaftarpelajaranController::class);

    Route::resource('osis',OsisController::class);
    
    Route::resource('slider',SliderController::class);


    //link that return view, to get compoment from there
    Route::view('/buttons', 'admin.buttons')->name('buttons');
    Route::view('/cards', 'admin.cards')->name('cards');
    Route::view('/charts', 'admin.charts')->name('charts');
    Route::view('/forms', 'admin.forms')->name('forms');
    Route::view('/modals', 'admin.modals')->name('modals');
    Route::view('/tables', 'admin.tables')->name('tables');

    Route::group(['prefix' => 'pages', 'as' => 'page.'], function () {
        Route::view('/404-page', 'admin.pages.404')->name('404');
        Route::view('/blank-page', 'admin.pages.blank')->name('blank');
        Route::view('/create-account-page', 'admin.pages.create-account')->name('create-account');
        Route::view('/forgot-password-page', 'admin.pages.forgot-password')->name('forgot-password');
        Route::view('/login-page', 'admin.pages.login')->name('login');
    });
});


require __DIR__ . '/auth.php';

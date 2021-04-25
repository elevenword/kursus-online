<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\KursuspController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\ValidasipController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DetailController;




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admin
    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);
       // Route::resource('/admin/kursus'KursusController::class, ':class);

       //untuk kursus
       Route::get('/admin/kursus', [KursusController::class, 'index']);
       Route::get('/admin/tkursus', [KursusController::class, 'tambah']);
       Route::post('/admin/kursus/store', [KursusController::class, 'store']);
       Route::get('/admin/ekursus/{id}', [KursusController::class, 'edit']);
       Route::put('/admin/kursus/update/{id}', [KursusController::class, 'update']);
       Route::get('/admin/kursus/hapus/{id}', [KursusController::class, 'delete']);
       
       //untuk data pendaftar 
        Route::get('/admin/listdaftar', [DaftarController::class, 'index']); 
        Route::get('/admin/detail', [DaftarController::class, 'detailadmin']);
        
        //untuk validasi
        
       Route::get('/admin/validasi', [ValidasiController::class, 'index']); 
       Route::get('/admin/evalidasi/{id}', [ValidasiController::class, 'edit']); 
       Route::put('/admin/validasi/update/{id}', [ValidasiController::class, 'update']);
       Route::get('/admin/validasi/hapus/{id}', [ValidasiController::class, 'delete']);

       //untuk data akun
       Route::get('/admin/akun', [AkunController::class, 'index']);
       Route::get('/admin/eakun/{id}', [AkunController::class, 'edit']); 
       Route::put('/admin/eakun/update/{id}', [AkunController::class, 'update']);
       Route::get('/admin/eakun/hapus/{id}', [AkunController::class, 'delete']);
    });



//operator
    Route::middleware(['user'])->group(function () {
        Route::get('user', [UserController::class, 'index']);


        //untuk kursusp
       Route::get('/user/kursus', [KursuspController::class, 'index']);
       Route::get('/user/tkursus', [KursuspController::class, 'tambah']);
       Route::post('/user/kursus/store', [KursuspController::class, 'store']);
       Route::get('/user/ekursus/{id}', [KursuspController::class, 'edit']);
       Route::put('/user/kursus/update/{id}', [KursuspController::class, 'update']);
       Route::get('/user/kursus/hapus/{id}', [KursuspController::class, 'delete']);
       Route::get('/user/listdaftar', [UsersController::class, 'index']); 
      });

      //untuk validasi
      
         Route::get('/user/validasi', [ValidasipController::class, 'index']); 
       Route::get('/user/evalidasi/{id}', [ValidasipController::class, 'edit']); 
       Route::put('/user/validasi/update/{id}', [ValidasipController::class, 'update']);
       Route::get('/user/validasi/hapus/{id}', [ValidasipController::class, 'delete']);


      //untuk lit daftar member
      Route::get('/user/listdaftar', [DaftarController::class, 'indexuser']); 
      Route::get('/user/detail', [DaftarController::class, 'detailuser']);


//member
    Route::middleware(['member'])->group(function () {
        Route::get('member', [MemberController::class, 'index']);
        Route::get('/member/konfirmasi', [MemberController::class, 'konfir']);
        Route::get('/member/materi', [KursusController::class, 'materi']);
        Route::get('/member/detail', [DaftarController::class, 'detail']);
        Route::get('/member/edetail/{id}', [DetailController::class, 'edit']);
        Route::put('/member/detail/update/{id}', [DetailController::class, 'update']);
        Route::get('/memeber/detail/hapus/{id}', [DetailController::class, 'delete']);
    });



    Route::get('/logout', function() {
        Auth::logout();
        return view('home');
    });

});



Route::get('blog', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/blogs/{id}', 'BlogController@show');

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel";
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableUserController;


Route::get('/Dashboard', function () {
    return view('welcome');
});

// Route::get('table-kegiatan', function () {
//     return view('table.t_user');
// });

Route::get('table-kegiatan', [TableUserController::class, 'index']);


Route::get('/table-kegiatan-admin', function () {
    //return view('table.table');
    return view('table.t_admin');
});

Route::get('/notification', function () {
    return view('notification.notif');
});

Route::get('/user', function () {
    return view('user.data');
});

Route::get('/percobaan', function () {
    return view('percobaan.percobaan');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

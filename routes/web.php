<?php

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

Route::get('/Dashboard', function () {
    return view('welcome');
});

Route::get('/table-kegiatan', function () {
    return view('table.table');
});

Route::get('/notification', function () {
    return view('notification.notif');
});

Route::get('/user', function () {
    return view('user.user');
});




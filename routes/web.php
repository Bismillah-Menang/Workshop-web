<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Access;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});
// 127.0.0.1:8000/siswa ==> <h1>
Route::get('/mahasiswa', function () {
    return "<h1>SAYA MAHASISWA</h1>";
});

Route::group(['namemspaace' => 'Frontend'], function() {
    Route::resource('home', HomeController::class);
});

Route::group(['namemspaace' => 'Backend'], function() {
    Route::resource('dashboard', DashboardController::class);
});



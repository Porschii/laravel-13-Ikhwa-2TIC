<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;

//Mahasiswa route
Route::get('/pcr', function () {
    return ('Selamat datang di website Kampus PCR');
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' .$param1;
});


Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'Nim saya: ' .$param1;
});


Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa' ;
})->name('mahasiswa.show');


Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);


Route::get('/about', function () {
    return view ('halaman-about');
});

//Matakuliah route

Route::get('/matakuliah', function () {
    return 'Halo-matakuliah';
});

Route::get('/matakuliah', function () {
    return 'Halo-matakuliah'; ;
})->name('matakuliah.show');

Route::get('/matakuliah/{param2}', [MatakuliahController::class, 'show']);


//Home Route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

//Questions
Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
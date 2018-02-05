<?php
use App\mahasiswa;
use App\dosen;
use App\jurusan;
use App\wali;
use App\mata_kuliah;
use App\matpel_mahasiswa;
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
    return view('welcome');
});
 Route::get('soal1', function() {
 		$dosen = dosen::with('mahasiswa')->get();
 		return View::make('soal1', compact('dosen'));
	});

 Route::get('soal2', function() {
 		$wali = wali::with('mahasiswa')->get();
 		return View::make('soal2', compact('wali'));
	});

 Route::get('soal3', function() {
 		$mahasiswa = mahasiswa::with('jurusan')->get();
 		return View::make('soal3', compact('mahasiswa'));
	});

 Route::get('bonus', function() {
 	
 		$mahasiswa = mahasiswa::with('dosen','jurusan','wali','mata_kuliah')->get();
 		return View::make('bonus', compact('mahasiswa'));
	});	

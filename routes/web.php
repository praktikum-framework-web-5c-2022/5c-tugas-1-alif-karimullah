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
Route::redirect('/','/dosen');
Route::get('/dosen', function () {
    $dosens = ["Kaito","Shinichi","Aizen","Ayanokouji","Arima","Shinpei","Ushio","Mio","Nagumo","Nezu"];
    $pelajaran = ["Bahasa Inggris","Bahasa Indonesia","Pemrograman Berbasis Web","Teknik Jepang","Artificial Intelegence","Kalkulus","Aljabar Linear","Fisika Dasar","Algoritma Pemrograman","Technoprenur"];
    return view('dosen.dosen')->with('dosens',$dosens)
    ->with('pelajaran',$pelajaran);
}
);
Route::get('/mahasiswa', function () {
    $siswas = ["Alif Karimullah","Altolyto Sitanggang","Adrian Wibisono","Anandito Rafi","Asyifa Maulana","Ali dongan","Adrian Yoga","Yohanes Anjar","Babelan Pride","Pencari Cinta"];
    $nim = ["20001","20002","20003","20004","20005","20006","20007","20008","20009","20010"];
    return view('mahasiswa.mahasiswa')->with('siswas',$siswas)
    ->with('nim',$nim);
}
);
Route::get('/matakuliah', function () {
    $matkuls = ["Bahasa Inggris","Bahasa Indonesia","Pemrograman Berbasis Web","Teknik Jepang","Artificial Intelegence","Kalkulus","Aljabar Linear","Fisika Dasar","Algoritma Pemrograman","Technoprenur"];
    $semester = ["2","2","2","3","3","4","3","2","3","3"];
    return view('matakuliah.matakuliah')->with('matkuls',$matkuls)
    ->with('semester',$semester);
}
);
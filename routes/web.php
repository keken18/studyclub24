<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/studyclub/', function () {
// echo "anda tidak memasukkan nama";
// });

// Route::get('/studyclub/{nama}', function ($nama) {
// echo "selamat datang di study club ".$nama;
// });

// Route::get('/latihankirimdata', function () {
//     return view('welcome', ['title' => 'mahasiswa sistem informasi']);
// });

// Route::get('/latihankirimdata/{title}', function ($title) {
//     return view('welcome', ['title' => $title]);
// });


// //latihan blade1
// Route::get('/latihanBlade', function () {
//     return view('latihan', ['data1' => 0]);
// });


// //latihan blade2
// Route::get('/latihanBlade2', function () {
//     return view('home');
// });

// //latihan tempalting
// Route::get('/dasboard', function () {
//     return view('index');
// });



// use App\Http\Controllers\kategoricontroller;
// Route::get('/Kategori/semua',[kategoricontroller::class, 'semua']);

use App\Http\Controllers\kategoricontroller2;
Route::resource('kategori',kategoricontroller2::class);

// use App\Models\kategori;

// Route::get('Kategori/semua', function () {
//     $kategori = Kategori::all();
//     foreach ($kategori as $data) {
//         echo $data->id . "." . $data->nama_kategori. "<br>";
//     }
// });

// Route::get('Kategori/tambah', function () {
//     Kategori::create([
//         'nama_kategori' => "Pakaian baru",
//         'deskripsi' => "Semua jenis pakaian baru"
//     ]);
// });

// Route::get('Kategori/update/{id}', function ($id) {
//     Kategori::find($id)->update([
//         'nama_kategori' => "Pakaian anak",
//         'deskripsi' => "Semua jenis pakaian anak"
//     ]);
// });

// Route::get('Kategori/hapus/{id}', function ($id) {
//     Kategori::find($id)->delete();
// });




// use App\Models\mhs;

// Route::get('mhs/semua', function () {
//     $mhs = mhs::all();
//     foreach ($mhs as $data) {
//         echo $data->id . "." . $data->nama. "<br>";
//     }
// });

// Route::get('mhs/tambah', function () {
//     mhs::create([
//         'nim'=> "123",
//         'nama'=> "nurul",
//         'kelas'=> "r003",
//         'des'=> "mahasiswa sc24"   
//     ]);

//     mhs::create([
//         'nim' => "124",
//         'nama' => "Reza",
//         'kelas' => "r003",
//         'des' => "mahasiswa sc24"
//     ]);

//     mhs::create([
//         'nim' => "125",
//         'nama' => "Mukhtada",
//         'kelas' => "r003",
//         'des' => "mahasiswa sc24"
//     ]);

//     mhs::create([
//         'nim' => "126",
//         'nama' => "Wildan",
//         'kelas' => "r003",
//         'des' => "mahasiswa sc24"
//     ]);

// Route::get('mhs/update/{id}', function ($id) {
//     mhs::find($id)->update([
//         'nim' => "123",
//         'nama' => "memey"
//     ]);
// });

// Route::get('mhs/hapus/{id}', function ($id) {
//     mhs::find($id)->delete();
// });

Route::get('/dasboard', function () {
    return view('index');
})->name('dasboard');

use App\Http\Controllers\mahasiswacontroller;
Route::resource('mahasiswa',mahasiswacontroller::class);   


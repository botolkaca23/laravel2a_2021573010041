<?php

use Facade\FlareClient\View;
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

//JOBSHEET1: INSTALASI LARAVEL DAN ROUTE

// 1. route bawaan laravel
Route::get('/', function () {
    return view('welcome');
});

// 2. membuat route
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/mahasiswa/profile/coba', function () {
    echo '<h2>style="text-align: center"><u>Welcome Profile Coba-coba</u></h2>';
});

// 3. route parameter
Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

// 4. route dengan 2 parameter
Route::get('/stok_barang/{jenis}/{merek}', function ($jenis, $merek) {
    return "Cek sisa stok untuk $jenis,$merek";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($a, $b) {
    return "Cek sisa stok untuk $a,$b";
});

// 5. route dengan optional parameter
Route::get('/stok_barang/{jenis?}/{merek?}', function ($a = 'smartphone', $b = 'samsung') {
    return "Cek sisa stok untuk $a $b";
});

// 6. route parameter dengan regular expression
Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id= $id";
});

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id= $id";
})->where('id', '[0-9]+');

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id= $id";
})->where('id', '[A-Z]{2}[0-9]+');


// 7. Route redirect
Route::get('/hubungi-kami', function () {
    return "<h1>Hubungan Kami</h1>";
});
Route::redirect('/contact-us', 'hubungi-kami');

// 8. route groub
Route::get('/admin/mahasiswa', function () {
    return "<h1>Daftar Mahasiswa</h1>";
});
Route::get('/admin/dosen', function () {
    return "<h1>Daftar Dosen</h1>";
});
Route::get('/admin/karyawan', function () {
    return "<h1>Daftar Karyawan</h1>";
});

Route::prefix('/admin')->group(function (){
    Route::get('/mahasiswa', function () {
        echo "<h1>Daftar Mahasiswa</h1>";
    });
    Route::get('/dosen', function () {
        echo "<h1>Daftar Dosen</h1>";
    });
    Route::get('/karyawan', function () {
        echo "<h1>Daftar Karyawan</h1>";
    });
});

// 9. route fallback
Route::fallback( function () {
    return "Maaf,alamat tidak ditemukan";
});

// 10. route priority
// Route::get('/buku/1', function () {
//     return "Buku ke-1";
// });
// Route::get('/buku/1', function () {
//     return "Buku saya ke-1";
// });
// Route::get('/buku/1', function () {
//     return "Buku kita ke-1";
// });


// Route::get('/buku/1', function ($a) {
//     return "Buku ke-$a";
// });
// Route::get('/buku/1', function ($b) {
//     return "Buku saya ke-$b";
// });
// Route::get('/buku/1', function ($c) {
//     return "Buku kita ke-$c";
// });

Route::get('/mahasiswa/andi', function () {
    echo "Halaman mahasiswa andi";
});


//JOBSHEET2: VIEW

// 1. membuat view
Route::get('/home', function () {
    return view ('halaman_home');
});

// Route::get('/mahasiswa', function () {
//     return View::make('mahasiswa');
// });

// 2. Membuat Struktur Folder view
Route::get('/mahasiswa', function () {
    return view ('kampus.mahasiswa');
});

Route::get('/mahasiswa', function () {
    return view ('kampus/mahasiswa');
});

//mengirim data ke view
// 4. Mengirim Data ke View Sebagai Argumen
Route::get('/mahasiswa', function () {
    return view ('kampus.mahasiswa',["mahasiswa01"=>"Dudung"]);
});

Route::get('/mahasiswa', function () {
    return view ('kampus.mahasiswa',
    [
        "mahasiswa01"=>"Muhammad Harist Almahdawi",
        "mahasiswa02"=>"Teuku Adrian Saputra",
        "mahasiswa03"=>"Zawil Abrar",
        "mahasiswa04"=>"",
    ]);
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa=[
        "mahasiswa01"=>"Muhammad Harist Almahdawi",
        "mahasiswa02"=>"Teuku Adrian Saputra",
        "mahasiswa03"=>"Zawil Abrar",
        "mahasiswa04"=>"",
    ];
    return view('kampus.mahasiswa',$arrMahasiswa);
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa=["Muhammad Harist Almahdawi",
        "Teuku Adrian Saputra",
        "Zawil Abrar",
        "Dinda",];
    return view('kampus.mahasiswa',['mahasiswa'=>$arrMahasiswa]);
});

// mengirimkan data ke View menggunakan method with
Route::get('/mahasiswa', function () {
    return view ('kampus.mahasiswa')->with('mahasiswa01','Raisa Lestari');
});

// dengan banyak data dan menampilkan dengan looping
Route::get('/mahasiswa', function () {
    $arrMahasiswa= ['Boccah','Raisa Lestari','Slugger','Stinger'];
    return view('kampus.mahasiswa')->with('mahasiswa',$arrMahasiswa);
});

//jika ingin mengirimkan banyak variabel , method view() bisa dipanggil beberapa kali dengan method 
//chaining(disambung) satu sama lain
Route::get('/mahasiswa', function () {
    return view('kampus.mahasiswa')->with('mahasiswa01','Doni Sadikin')
    ->with('mahasiswa02','Sahara')->with('mahasiswa03','Deliana Putri');
});

// agar lebih rapi bisa begini
Route::get('/mahasiswa', function () {
    return view('kampus.mahasiswa')
    ->with('mahasiswa01','Doni Sadikin')
    ->with('mahasiswa02','Sahara')
    ->with('mahasiswa03','Deliana Putri');
});

// cara penulisan lain dari method with dengan menyambungkan lansung setiap nama
Route::get('/mahasiswa', function () {
    return view('kampus.mahasiswa')->withmahasiswa01('Doni Sadikin');
});
// teknik chaining bersambung
Route::get('/mahasiswa', function () {
    return view('kampus.mahasiswa')
    ->withmahasiswa01('kumaha atuh')
    ->withmahasiswa02('Budy')
    ->withmahasiswa03('Donald');
});

// //5. mengenal Function Compact()
// Route::get('/mahasiswa', function () {
//     $mahasiswa01 = "Indra Kenz",
//     $mahasiswa02 = "Doni Salmanan",
//     $mahasiswa03 = "Ulfi Riskia",
//     $mahasiswa04 = "Deliana Putri"
//     return view('kampus.mahasiswa',compact("mahasiswa01","mahasiswa02","mahasiswa03","mahasiswa04"));
// });

// // atau mengunakan method with, bisa dituliskan sebagai berikut
// Route::get('/mahasiswa',function()){
//     $mahasiswa01 = "Indra Kenz",
//     $mahasiswa02 = "Doni Salmanan",
//     $mahasiswa03 = "Ulfi Riskia",
//     $mahasiswa04 = "Deliana Putri"
//     return view('kampus.mahasiswa')->(compact("mahasiswa01","mahasiswa02","mahasiswa03","mahasiswa04"));
// }


//jobsheet3 Blade template Engine
Route::get('/mahasiswa', function () {
    $nama = 'Jonh Paijo Simatuphang';
    $nilai = 75;
    return view ('mahasiswa',compact('nama','nilai'));
});


//function htmlspecialchars()
Route::get('/mahasiswa', function () {
    $nama = '<u>Elon Musk Batubara</u>';
    $nilai = 75;
    return view ('mahasiswa',compact('nama','nilai'));
});

// kondisi if else
Route::get('/mahasiswa', function () {
    $nama = '<u>Elon Musk Batubara</u>';
    $nilai = 75;
    return view ('mahasiswa',compact('nama','nilai'));
});

//perulangan foreach1
Route::get('/mahasiswa', function () {
    $nama = 'Vladimir putin Harahap';
    $nilai = [80,64,30,76,95];
    return view ('mahasiswa',compact('nama','nilai'));
});

//perintah continue dan break
Route::get('/mahasiswa', function () {
    $nama = 'Tya Kirana Putri';
    $nilai = [80,64,30,76,95];
    return view ('mahasiswa',compact('nama','nilai'));
});
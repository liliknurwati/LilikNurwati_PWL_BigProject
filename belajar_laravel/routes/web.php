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

Route::get('/', function () {
    return view('welcome');
});



Route::get('mahasiswa','mahasiswaController@index');

Route::get('jumlah','tugas1_Lilik@penjumlahan');

Route::get('/belajar-jumlah/{a?}/{b?}', function ($a=3, $b=1) {
    $jumlah=$a+$b;
    return "Nilai dari penjumlahan ".$a. " + " .$b." adalah ".$jumlah;
});

Route::get('/belajar-route-first', function () {
    return 'Hello World, I am Lilik';
});



Route::get('/belajar-optional/{page?}', function ($page='beranda') {
    return "Hello, sekarang anda di berada di halaman ".$page;
});
Route::get('/belajar/{nama}', function ($nama) {
    return "Hello, ini adalah halaman Belajar dari ".$nama;
});

Route::get('/belajar-jumlah/{a?}/{b?}', function ($a=3, $b=1) {
    $jumlah=$a+$b;
    return "Nilai dari penjumlahan ".$a. " + " .$b." adalah ".$jumlah;
});


Route::get('jumlah','tugas1_Lilik@penjumlahan');

Route::get('mahasiswa','mahasiswaController@index');

Auth::routes();















Route::get('/about', 'AboutController@about');

Route::get('/article', 'ArticleController@article');

Route::get('/pageAwal', 'HomeController@pageAwal');

Route::get('/artic', 'HomeController@arhome');

Route::get('/articar/{id}', 'ArticleController@show');

Route::get('/articl', 'HomeController@arhom');

Route::get('/webKuis1', 'kuis1Controller@kuis1');

Route::get('/bigProject', 'bPController@project');

Route::resource('/employee', 'PegawaiController');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/satu', 'bPcontroller@pertama');
Route::get('/awaladmin', 'HalSatucontroller@tampil');
Route::get('/register', 'bPcontroller@signup');
Route::get('/addmenu', 'MenuController@tampilmenu');
Route::resource('/review', 'ReviewController');
Route::get('/reviewAdmin', 'RvAdminController@index');
Route::get('/reviewAdmin/{id}', 'RvAdminController@hapus');
Route::post('/register/proses', 'bPcontroller@proses_upload');
Route::get('/awaladmin/hapus/{id}', 'HalSatuController@destroy');
Route::post('/addmenu/proses', 'MenuController@upload_menu');
Route::get('/maincourse', 'MenuController@tampilmaincourse');
Route::get('/appetizer', 'MenuController@tampilappetizer');
Route::get('/dessert', 'MenuController@tampildessert');
Route::get('/drink', 'MenuController@tampildrink');
Route::get('/drink2', 'MenuController@tampildrink2');
Route::get('/menuadmin', 'MenuController@tampilmenuadmin');
Route::get('/menuadmin/hapus/{id}', 'MenuController@destroy');
Route::get('/awaladmin/edit/{id}', 'HalSatuController@update_data');
Route::post('/awaladmin/update', 'HalSatuController@update');
Route::get('/menuadmin/edit/{id}', 'MenuController@data_update');
Route::post('/menuadmin/update', 'MenuController@update');
Route::post('/satu/login', 'bPcontroller@auth_login');

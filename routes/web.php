<?php

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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['auth','role:admin']], function(){
    Route::resource("admin", "AdminController");
    Route::view('/templates/reportPasien', 'templates.reportPasien');
    Route::resource('/templates/reportObat', 'ReportController');
    Route::resource('/templates/reportUser', 'ReportUserController');

});

Route::group(['middleware' => ['auth','role:resepsionis']], function(){
    Route::resource('/templates/forms', 'pasiensController');
    // Route::get('/templates/search', 'SearchController@index');
});

Route::group(['middleware' => ['auth','role:dokter']], function(){
    Route::resource('/templates/antrian', 'pasiensController');
    Route::get('/templates/periksa/{id}/forms', 'pasiensController@edit');
    Route::put('/templates/periksa/{id}', 'pasiensController@update');
    // Route::get('/dokter', function(){
    //     return view('templates.index2');
    // });
    // Route::get('/templates/search', 'SearchController@index');
    // Route::get('/templates/search/hasilsearch', 'SearchController@search');
    // Route::get('/templates/search/{id}', 'pasiensController@destroy');


});

Route::group(['middleware' => ['auth','role:apoteker']], function(){
    // Route::resource('/templates/transaksiobat', 'transaksiController');
    Route::resource("obat","ObatController");
    Route::get("obat/cek/{id}","ObatController@cek");
    Route::resource("masuk","ObatMasukController");
    Route::resource("keluar","ObatKeluarController");
});


// Medical Record
Route::get('/templates/search', 'SearchController@index');
Route::get('/templates/search/hasilsearch', 'SearchController@search');
Route::get('/templates/search/{id}', 'pasiensController@destroy');






/* CoreUI templates */
// Route::view('/', 'auth.login');
// Route::view('/resepsionis', 'templates.index');
// Route::view('/dokter', 'templates.index2');
// Section UI elements
// Route::view('/templates/buttons', 'templates.buttons');
// Route::view('/templates/social', 'templates.social');
// Route::view('/templates/cards', 'templates.cards');
// Route::get('/templates/forms', function () {
//     return view('templates.forms');
// });
// Route::get("/templates/forms/create","pasienController@create");
// Route::post("/templates/forms/store","pasienController@store");


Route::get('/templates/detail/{id}/page', 'pasiensController@show');

Route::view('/templates/antrian2', 'templates.antrian2');
Route::view('/templates/riwayat-pasien', 'templates.riwayat-pasien');

// Route::view('/templates/modals', 'templates.modals');
// Route::view('/templates/switches', 'templates.switches');
// Route::view('/templates/tabs', 'templates.tabs');
// Route::view('/templates/font-awesome-icons', 'templates.font-awesome-icons');
// Route::view('/templates/simple-line-icons', 'templates.simple-line-icons');
// Route::view('/templates/widgets', 'templates.widgets');
// Route::view('/templates/charts', 'templates.charts');

// Section Pages
// Route::view('/templates/login', 'templates.login')->name('login');
// Route::view('/templates/register', 'templates.register')->name('register');
// Route::view('/templates/error404', 'templates.error404')->name('error404');
// Route::view('/templates/error500', 'templates.error500')->name('error500');

// Route::get('form', function () {
//     return view('templates.forms');
// });
//
// Route::get("index","pasienController@index");
// Route::post('store','pasienController@store');

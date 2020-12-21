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

Auth::routes();

Route::get('/blank',function(){
    return view('home');
});
Route::get('/','HomeController@index');
Route::get('/usiachart','HomeController@usia');
Route::get('/ambilnik','MutasiController@ambilnik');

Route::group(['middleware'=>['auth']],function(){
    //routing penduduk
    Route::get('/penduduk','PendudukController@index');
    Route::prefix('/penduduk')->group(function(){
        Route::name('penduduk.')->group(function(){
            Route::get('tambah','PendudukController@add')->name('add');
            Route::post('tambah','PendudukController@post')->name('post');
            Route::get('edit/{id}','PendudukController@edit')->name('edit');
            Route::post('update/{id}','PendudukController@update')->name('update');
            Route::get('detail/{id}','PendudukController@detail')->name('detail');
            Route::get('delete/{id}','PendudukController@delete')->name('delete');
        });
    });
    //routing keluarga
    Route::get('/keluarga','KeluargaController@index');
    Route::prefix('keluarga')->group(function(){
        Route::name('keluarga.')->group(function(){
            Route::get('detail/{nokk}','KeluargaController@detail')->name('detail');
        });
    });
    //routing mutasi
    Route::get('/mutasi','MutasiController@index');
    Route::prefix('mutasi')->group(function(){
        Route::name('mutasi.')->group(function(){
            Route::get('cetak/{id}','MutasiController@cetak')->name('cetak');
            Route::get('laporan/','MutasiController@laporan')->name('laporan');
            Route::post('laporan/cetak','LaporanController@mutasi')->name('cetak_laporan');
            Route::get('rekap','MutasiController@rekap')->name('rekap');
            Route::post('rekap/cetak','LaporanController@rekap')->name('cetak_rekap');
            //
            Route::get('detail/{id}','MutasiController@detail')->name('detail');
            Route::get('tambah','MutasiController@add')->name('add');
            Route::get('tambah/{nik}','MutasiController@import')->name('import');
            Route::get('edit/{id}','MutasiController@edit')->name('edit');
            Route::post('post','MutasiController@post')->name('post');
            Route::post('update/{id}','MutasiController@update')->name('update');
            Route::get('delete/{id}','MutasiController@delete')->name('delete');
        });
    });
    //routing user
    Route::get('/user','UserController@index');
        Route::prefix('user')->group(function(){
            Route::name('user.')->group(function(){
                Route::get('tambah','UserController@add')->name('add');
                Route::post('post','UserController@post')->name('post');
                Route::get('edit/{id}','UserController@edit')->name('edit');
                Route::post('update/{id}','UserController@update')->name('update');
                Route::get('delete/{id}','UserController@delete')->name('delete');
            });
        }); 
    Route::get('/kades','UserController@kades_index');
        Route::prefix('kades')->group(function(){
            Route::name('kades.')->group(function(){
                Route::post('update','UserController@kades_update')->name('update');
            });
        });
});

//routing laporan
Route::get('/laporan','LaporanController@index');
Route::post('/laporan/cetak','LaporanController@cetak');

//routing surat
Route::get('/surat','SuratController@index');
Route::get('/surat/kematian','SuratController@formKematian');
Route::get('/surat/kematian/cari','SuratController@loadData');
Route::post('/surat/kematian/cetak','SuratController@cetakKematian');
Route::get('/surat/kelahiran','SuratController@formKelahiran');
Route::post('/surat/kelahiran/cetak','SuratController@cetakKelahiran');

//routing grafik
Route::get('grafik/pekerjaan','GrafikController@pekerjaan');
Route::get('grafik/pendidikan','GrafikController@pendidikan');
Route::get('grafik/agama','GrafikController@agama');
Route::get('grafik/usia','GrafikController@usia');
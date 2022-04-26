<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'yonetim', 'namespace' => 'Yonetim'], function () {
    Route::redirect('/', '/yonetim/oturumac');
    // Route::match(['get','post'],'/oturumac','KullaniciController@oturumac')->name('yonetim.oturumac');
    Route::post('/oturumac', 'KullaniciController@giris');
    Route::get('/oturumac', 'KullaniciController@oturumac')->name('yonetim.oturumac');
    Route::get('/cikis', 'KullaniciController@cikisyap')->name('yonetim.cikisyap');
    Route::get('/kaydol', 'KullaniciController@kaydol_form')->name('yonetim.kaydol');
    Route::post('/kaydol', 'KullaniciController@kaydol');
    Route::get('/aktiflestir/{anahtar}', 'KullaniciController@aktiflestir')->name('aktiflestir');
    Route::get('/anasayfa', 'AnasayfaController@index')->name('yonetim.anasayfa')->middleware('auth');

        Route::group(['prefix' => 'kullanici'], function () {
            Route::match(['get', 'post'], '/', 'KullaniciController@index')->name('yonetim.kullanici')->middleware('auth');;
            Route::get('/yeni', 'KullaniciController@form')->name('yonetim.kullanici.yeni')->middleware('auth');;
            Route::get('/duzenle/{id?}', 'KullaniciController@form')->name('yonetim.kullanici.duzenle')->middleware('auth');;
            Route::post('/kaydet/{id?}', 'KullaniciController@kaydet')->name('yonetim.kullanici.kaydet')->middleware('auth');
            Route::get('/sil/{id}', 'KullaniciController@sil')->name('yonetim.kullanici.sil')->middleware('auth');
        });

        Route::group(['prefix' => 'kategori'], function () {

            Route::match(['get', 'post'], '/', 'KategoriController@index')->name('yonetim.kategori');
            Route::get('/yeni', 'KategoriController@form')->name('yonetim.kategori.yeni');
            Route::get('/duzenle/{id}', 'KategoriController@form')->name('yonetim.kategori.duzenle');
            Route::post('/kaydet/{id?}', 'KategoriController@kaydet')->name('yonetim.kategori.kaydet');
            Route::get('/sil/{id}', 'KategoriController@sil')->name('yonetim.kategori.sil');
        });
    Route::group(['prefix' => 'blog'], function () {

        Route::match(['get', 'post'], '/', 'BlogController@index')->name('yonetim.blog');
        Route::get('/yeni', 'BlogController@form')->name('yonetim.blog.yeni');
        Route::get('/duzenle/{id}', 'BlogController@form')->name('yonetim.blog.duzenle');
        Route::post('/kaydet/{id?}', 'BlogController@kaydet')->name('yonetim.blog.kaydet');
        Route::get('/sil/{id}', 'BlogController@sil')->name('yonetim.blog.sil');
    });
    Route::group(['prefix' => 'hakkimda'], function () {

        Route::match(['get', 'post'], '/', 'HakkimdaController@index')->name('yonetim.hakkimda');
        Route::get('/yeni', 'HakkimdaController@form')->name('yonetim.hakkimda.yeni');
        Route::get('/duzenle/{id}', 'HakkimdaController@form')->name('yonetim.hakkimda.duzenle');
        Route::post('/kaydet/{id?}', 'HakkimdaController@kaydet')->name('yonetim.hakkimda.kaydet');
        Route::get('/sil/{id}', 'HakkimdaController@sil')->name('yonetim.hakkimda.sil');
    });
    Route::group(['prefix' => 'iletisim'], function () {
        Route::match(['get', 'post'], '/', 'IletisimController@index')->name('yonetim.iletisim');
        Route::get('/yeni', 'IletisimController@form')->name('yonetim.iletisim.yeni');
        Route::get('/duzenle/{id}', 'IletisimController@form')->name('yonetim.iletisim.duzenle');
        Route::post('/kaydet/{id?}', 'IletisimController@kaydet')->name('yonetim.iletisim.kaydet');
        Route::get('/sil/{id}', 'IletisimController@sil')->name('yonetim.iletisim.sil');
    });
});
Route::get('/', 'AnasayfaController@index')->name('anasayfa');
Route::get('/blogspot/{blog_slug?}', 'BlogspotController@index')->name('blogspot');
Route::post('/ara', 'blogspotController@ara')->name('blog_ara');
Route::get('/ara', 'blogspotController@ara')->name('blog_ara');
Route::get('/hakkimda', 'HakkimdaController@index')->name('hakkimda');
Route::get('/iletisim', 'IletisimController@index')->name('iletisim');
Route::post('/iletisim', 'IletisimController@indexPost');
Route::get('/kategori', 'KategoriController@index')->name('kategori');
Route::get('/kategori/{slug_kategoriad?}', 'KategoriController@kategori')->name('kategoriP');

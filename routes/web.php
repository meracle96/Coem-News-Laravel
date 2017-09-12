<?php

Route::get('/', 'DepanController@index')->name('depan.index');
Route::get('/berita/{id}', 'DepanController@beritaDetail')->name('depan.beritaDetail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin Kategori
Route::resource('/admin/kategori', 'AdminKategoriController');

// Admin Berita
Route::resource('/admin/berita', 'AdminBeritaController');

// Admin Dashboard
Route::get('/admin', 'AdminController@index')->name('admin.home');

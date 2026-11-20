<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/category', 'category')->name('category');
Route::view('/explore', 'explore')->name('explore');
Route::view('/order-coffee', 'order')->name('order');
Route::view('/contact', 'contact')->name('contact');

Route::redirect('/products', '/category');
Route::redirect('/order', '/order-coffee');
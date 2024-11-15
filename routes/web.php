<?php

use App\Http\Controllers\HomeController;
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

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about-us', 'about')->name('about-us');
    Route::get('/contact-us', 'contact')->name('contact-us');

    Route::get('/forex', 'forex')->name('forex');
    Route::get('/equities', 'equities')->name('equities');
    Route::get('/indices', 'indices')->name('indices');
    Route::get('/commodities', 'commodities')->name('commodities');
    Route::get('/account', 'account')->name('account');
    Route::get('/tools', 'tools')->name('tools');
    Route::get('/conditions', 'conditions')->name('conditions');
    Route::get('/FAQ', 'FAQ')->name('FAQ');
    Route::get('/cryptocurrencies', 'cryptocurrencies')->name('cryptocurrencies');
    Route::get('/metatrader5', 'Metatrader5')->name('metatrader5');

    Route::get('/forex-glossary', 'forexglossary')->name('forexglossary');
    
    
    Route::get('/login', 'login')->name('login');
});
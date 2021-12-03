<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\checkUserCredentials;

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

/* Pamata skats nav nepieciešams; saglabāju, lai pārliecinātos, vai Laravel strādā
Route::get('/', function() {
    return view('welcome');
});*/

//pirmais skats, kas parādās mājaslapas atvēršanā; nekur citur nevar aiziet neievadot savus datus
Route::get('/', function() {
    return view('logIn');
}) -> name('login');

//centrālais skats, no kura iespējams pāriet uz visiem pārējiem
Route::get('/home', function() {
    return view('registered.home');
}) -> name('home');

//kalendāra skats, kas kalendārā attēlo plānotās (un bijušās?) medības
Route::get('/calendar', function() {
    return view('registered.calendar');
}) -> name('calendar');
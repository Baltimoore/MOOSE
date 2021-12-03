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

/*Route::get('/', function() {
    return view('welcome');
});*/

// Kad mājaslapa saņem pieprasījumu uz bāzes lapu, atver 'funkciju' kas atrodas iekš checkUserCredentials(.php)
// Route::get('/', [checkUserCredentials::class, 'homepage']); fsfr nestrādā

//pirmais skats, kas parādās mājaslapas atvēršanā; nekur citur nevar aiziet neievadot savus datus
//gribēju caur kontrolieri novadīt mājaslapu avēršanu, bet maukurs hz kāpēc negrib vērties caur to vaļā
Route::get('/', function() {
    return view('logIn');
}) -> name('login');
//centrālais skats, no kura iespējams pāriet uz visiem pārējiem
Route::get('/home', function() {
    return view('registered.home');
}) -> name('home');
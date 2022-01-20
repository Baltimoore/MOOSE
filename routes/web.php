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

//pirmais skats, kas parādās mājaslapas atvēršanā; nekur citur nevar aiziet neievadot savus datus
Route::get('/', function() {
    return view('logIn');
}) -> name('login');


//kalendāra skats, kas digitālā kalendārā attēlo plānotās un bijušās medības
Route::get('/calendar', function() {
    return view('member.calendar');
}) -> name('calendar');


//kartes skats, kas ievietotā logā attēlo medību teritoriju rajonus. pašlaik tikai fotka
Route::get('/map', function() {
    return view('member.map');
}) -> name('map');

//inventāra labošanas skats, kur visi ekipējuma dati ir modificējami
Route::get('/inventory-edit', function() {
    return view('member.inventory-edit');
}) -> name('inventory-edit');

//inventāra skats, kas attēlo visu ekipējumu, kas tieši pieder biedrībai
Route::get('/inventory', function() {
    return view('member.inventory');
}) -> name('inventory');


//ierakstu skats, kas attēlo visus datubāzē saglabātos videoierakstus
Route::get('/recordings', function() {
    return view('member.recordings');
}) -> name('recordings');


//profila skats, kas attēlo lietotāja informāciju; izskatās līdzīgi kā CSDD
Route::get('/profile', function() {
    return view('member.profile');
}) -> name('profile');

//profila skats, kas ļauj labot lietotāja informāciju
Route::get('/profile-edit', function() {
    return view('member.profile-edit');
}) -> name('profile-edit');

//profilu saraksts, kas attēlo visus biedrībā reģistrētos dalībniekus
Route::get('/profile-all', function() {
    return view('member.profile-list');
}) -> name('profile-list');

//profila skats, kas ļauj pievienot jaunu lietotāju
Route::get('/profile-new', function() {
    return view('member.profile-new');
}) -> name('profile-new');

//administratora pieslēgšanās skats
Route::get('/home', function() {
    return view('admin.base');
}) -> name('adminHome');
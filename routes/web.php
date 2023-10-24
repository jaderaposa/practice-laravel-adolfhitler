<?php

use App\Http\Controllers\DictatorController;
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

// Route::get('/', function () {
//     return view('layouts/app');
// });
Route::get('/', function () {
    return view('home');
});
// Route::get('/', function () {
//     return view('section');
// });
// Route::get('/section', function () {
//     return view('section');
// });

/*create a link source throught the dictator controller class*/
Route::resource('dictator', DictatorController::class);
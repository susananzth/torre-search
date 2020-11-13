<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TorreController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/opportunities', function () {
    return view('search.opportunities');
});
Route::get('/people', function () {
    return view('search.people');
});
Route::get('/biopeople', [TorreController::class, 'index'])->name('biopeople');

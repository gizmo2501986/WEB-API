<?php

use App\Http\Controllers\pytania_kontroler;
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

// Route::get('/', function () {
//     return view('witaj');
// });


Route::get('/', [pytania_kontroler::class, 'pokaz'])->name('pokaz');


Route::get('/fetch', [pytania_kontroler::class, 'fetch_insert']);

Route::get('/show', [pytania_kontroler::class, 'show']);

Route::get('/delete', [pytania_kontroler::class, 'delete'])->name('delete');


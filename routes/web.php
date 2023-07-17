<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\booksController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\AuthorController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function() {
    return view('Home.welcome');
});



Route::get('/books',[booksController::class, 'index']);
Route::get('/book/{bookId}', [booksController::class, 'show'])->name('kniga.prikazi');


Route::get('/avtori', [AuthorController::class, 'index']);
Route::get('/author/{authorId}', [AuthorController::class, 'show'])->name('avtor.prikazi');


Route::get('/korisnici', [usersController::class, 'index']);




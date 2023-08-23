<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\booksController;
use App\Http\Controllers\korisniciController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\EmployeesController;
//use App\Http\Controllers\OTPController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\rentController;
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


Route::get('/users', [korisniciController::class, 'index']);
Route::get('/users/{userId}',[korisniciController::class,'show'])->name('user.prikazi');


Route::get('/employees', [EmployeesController::class, 'index']);

Route::get('/rent', [rentController::class, 'index']);

//LOGIN AND REGISTER
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dash'); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//TWO-FACTOR
Route::get('profile/2fa', [ProfileController::class,'twofa'])->name('twofa');
Route::post('profile/2fa', [ProfileController::class,'twofaEnable'])->name('twofaenable');

Route::get('/login/otp', [App\Http\Controllers\OTPController::class, 'show'])->name('otp.show');
Route::post('/login/otp',[App\Http\Controllers\OTPController::class,'check'])->name('otp.check');

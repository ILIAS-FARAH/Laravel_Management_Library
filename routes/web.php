<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\VisitorController;
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
Route::get('/', [BookController::class, "index"])->name('home');
Route::get('/manage_books', [BookController::class, "Management"])->name('manage_books');
Route::get('/book/create', [BookController::class, "create"])->name('create');
Route::post('/book/store', [BookController::class, "store"])->name("store");
Route::get('/book/{book}', [BookController::class, "destroy"])->name("destroy");
Route::patch('/book/{book}', [BookController::class, "update"])->name("update");
Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('edit');







Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->middleware(['auth'])->name('signin');
// Route::post('/home',[HomeController::class,'post'])->middleware(['auth','admin'])->middleware(['auth'])->name('signin');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





//----------------------------------------------

// web.php
use App\Http\Controllers\UserController;

Route::get('/admin/users', [HomeController::class, 'showUsers'])->name('info_user');














//----------------------------------------------


Route::get('/search-books', [VisitorController::class, 'search']);
Route::get('/books/{book}', [VisitorController::class, 'show'])->name('show');







//----------------------------------------------


Route::post('/reserve', [ReservationController::class, 'reserve'])->name('reserve');


Route::get('/my-reservations', [ReservationController::class, 'userReservations'])->name('user_reservations');
Route::delete('/reservations/{id}', [ReservationController::class, 'cancelReservation'])->name('reservations_cancel');

//-----------------------------------------------------------------------------------------------------

Route::get('/admin/pending-users', [HomeController::class, 'userSatus'])->name('admin.pending-users');
Route::middleware(['auth', 'check.status'])->group(function () {
    Route::get('/home', [HomeController::class, 'index']); });
Route::post('/admin/update-status/{status}/{id}', [HomeController::class, 'updateStatus'])->name('admin.update-status');

//----------------------------------------------------------------------------------

Route::post('/users/{user}/penalize', [ReservationController::class, 'penalize'])->name('users.penalize');

require __DIR__ . '/auth.php';

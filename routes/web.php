<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\BanUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Organizer\EventController;
use App\Http\Controllers\Admin\EventAdminController;
use App\Http\Controllers\Organizer\OrganizerController;
use App\Http\Controllers\Participant\ParticipantController;
use App\Http\Controllers\Reservation\ReservationController;
use App\Http\Controllers\Admin\UserController as AdminUsersController;

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
// ========================================== Admin ==========



Route::get('Car',[HomeController::class,'car']);










// ========================================== Participant ==========

Route::resource('participant', ParticipantController::class);
// ========================================== Organizer ==========

Route::resource('organizer', OrganizerController::class);
// ========================================== Events ==========

Route::resource('event', EventController::class);
Route::get('/events/search', [EventController::class, 'searchByTitle'])->name('events.search');
Route::get('/events/{id}', [EventController::class, 'show'])->name('event.show');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('event.destroy');
Route::get('/', [EventController::class, 'getAcceptedEvents'])->name('welcome');

// ========================================== pdf ==========

Route::get('pdf', [PDFController::class, 'index']);

// ========================================== Admin ==========
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// Route::resource('adminevent',EventAdminController::class);

// ============================

// Route::get('/banuser/{id}', [BanUserController::class, 'banuser'])->name('banuser');

// ======================

Route::post('reservation/{id}', [ReservationController::class, 'Reservation'])->name('reservation');
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// ====================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//search

Route::get('/SearchEvent', [FilterController::class, 'searchEvent']);
Route::get('/FilterEvent/{search}', [FilterController::class, 'FilterEvent'])->name('FilterEvent');

// Route::middleware(['admin'])->group(function () {

// });

Route::get('/banuser/{id}', [BanUserController::class, 'banuser'])->name('banuser');
Route::put('adminevent/{adminevent}', [EventAdminController::class, 'update'])->name('adminevent.update');
Route::get('adminevent/{adminevent}', [EventAdminController::class, 'edit'])->name('adminevents.edit');
Route::resource('admin', AdminUsersController::class);

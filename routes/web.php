<?php

use App\Http\Controllers\Admin\UserController as AdminUsersController;
use App\Http\Controllers\BanUserController;
use App\Http\Controllers\Organizer\EventController;
use App\Http\Controllers\Organizer\OrganizerController;
use App\Http\Controllers\Participant\ParticipantController;

use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use App\Models\Event;
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
// ========================================== Admin ==========

Route::resource('admin', AdminUsersController::class);
// ========================================== Participant ==========

Route::resource('participant', ParticipantController::class);
// ========================================== Organizer ==========

Route::resource('organizer', OrganizerController::class);
// ========================================== Events ==========

// Route::resource('organizer', OrganizerController::class);

// Route::get('organizer', [OrganizerController::class, 'index']);
// Route::POST('organizer', [OrganizerController::class, 'store']);
// Route::get('organizer', [OrganizerController::class, 'create']);
// Route::get('organizer/{organizer}', [OrganizerController::class, 'show']);
// Route::POST('organizer/{organizer}', [OrganizerController::class, 'update']);
// Route::DELETE('organizer/{organizer}', [OrganizerController::class, 'destroy']);
// Route::get('organizer/{organizer}/edit', [OrganizerController::class, 'edit']);

// ========================================== pdf ==========

Route::get('pdf', [PDFController::class, 'index']);

// ========================================== Admin ==========

Route::get('/', [EventController::class, 'getAcceptedEvents']);

// ============================

// Route::get('/', function () {
//     $events = Event::where('status', 'confirmed')->get();

//     return view('welcome', compact('events'));
// })->name('home');
Route::get('/banuser/{id}', [BanUserController::class, 'banuser'])->name('banuser');
// ======================
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

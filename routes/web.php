<?php

use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//*******Participants controller  ***********/
Route::get('/', [ParticipantController::class, 'welcome']);
Route::post('/', [ParticipantController::class, 'store'])->name('participants.store');
Route::get('/participants/index', [ParticipantController::class, 'index'])->name('participants.index');
Route::get('/participants/{participant}/edit', [ParticipantController::class, 'edit'])->name('participants.edit');
Route::get('/participants/{participant}/view', [ParticipantController::class,'view'])->name('participants.view');
Route::get('/participants/{participant}/qr', [ParticipantController::class,'qr'])->name('participants.qr');
Route::delete('/participants/{participant}', [ParticipantController::class, 'destroy'])->name('participants.destroy');






require __DIR__.'/auth.php';


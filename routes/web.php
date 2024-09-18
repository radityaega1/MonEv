<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\DeleteCommentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventIndexController;
use App\Http\Controllers\EventShowController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreCommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('event', EventIndexController::class)->name('event');
    Route::get('event/{id}', EventShowController::class)->name('eventShow');
    Route::get('calendar', CalendarController::class)->name('calendar');

//    Route::get('/provinces/{province}', function (Province $province) {
//        return response()->json($province->districts);
//    });
//    Route::get('getKabupaten/{province}', [EventController::class, 'getKabupaten']);

    // Rute untuk mengambil kabupaten berdasarkan provinsi
    Route::get('/getKabupaten/{id}', [EventController::class, 'getKabupaten'])->middleware('getKabupaten');

    Route::get('dashboard/{locale}', [LocalizationController::class, 'index'])->name('localization.index');

    Route::post('events/{id}/comments', StoreCommentController::class)->name('events.comments');
    Route::delete('events/{id}/comments/{comment}', DeleteCommentController::class)->name('events.comments.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/editor-auth.php';

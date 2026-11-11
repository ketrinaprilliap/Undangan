
<?php
use App\Http\Controllers\UcapanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UndanganController;
use App\Http\Controllers\RsvpController;

Route::get('/', [UndanganController::class, 'index'])
    ->name('undangan');

Route::post('/rsvp', [RsvpController::class, 'store'])
    ->name('rsvp.store');
Route::post('/ucapan', [UcapanController::class, 'store'])
    ->name('ucapan.store');
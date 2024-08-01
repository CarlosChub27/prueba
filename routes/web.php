<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\PDFController;
use App\Livewire\ArchivosMultiples;
use App\Livewire\Counter;
use App\Livewire\Facephi;
use App\Livewire\Prueba;
use App\Livewire\Prueba2;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/counter', Counter::class);
});

// Route::get('/prueba', Prueba::class);

Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('/archivos', ArchivosMultiples::class);

Route::get('/prueba', [BackController::class, 'handleGet']);
Route::post('/back', [BackController::class, 'handlePost']);
Route::get('/facephi', Facephi::class);

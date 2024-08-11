<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Actions\Trade\GetCurrenctQuotation;
use Inertia\Inertia;

Route::get('/', function (GetCurrenctQuotation $getCurrenctQuotation) {
    return Inertia::render('LandingPage', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'quotation' => $getCurrenctQuotation->get()
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

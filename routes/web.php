<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;

use App\Livewire\Calendar;
use App\Livewire\Map;

use App\Models\Shift;

Route::get('/', function () {
    return view('welcome');
});

route::get('/calender', [CalendarController::class, 'index'])->name('get_calender');

Livewire::component('calendar', Calendar::class);
Livewire::component('map', Map::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

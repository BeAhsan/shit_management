<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\StaffController;

use App\Livewire\Calendar;
use App\Livewire\Map;
use App\Livewire\CreateStaff;
use App\Livewire\StaffList;
use App\Models\Shift;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});


Livewire::component('calendar', Calendar::class);
Livewire::component('map', Map::class);
Livewire::component('staff-list', StaffList::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () { 
    
    route::get('/calender', [CalendarController::class, 'index'])->name('get_calender');

    route::post('/applicationProcess/{user}', [StaffController::class, 'applicationProcess'])->name('applicationProcess');
  
    Route::get('/dashboard', function () { 
        return view('dashboard');
    })->name('dashboard');

    Route::get('/applicant/{id}', function ($id) { 
        return view('applicant', ['id'=> $id]);
    })->name('applicant');

    Route::get('/staff/{id}', function ($id) { 
        return view('staff', ['id'=> $id]);
    })->name('staff');

});

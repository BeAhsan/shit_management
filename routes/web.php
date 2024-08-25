<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;

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
Livewire::component('create-staff', CreateStaff::class);
Livewire::component('staff-list', StaffList::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () { 
    
    route::get('/calender', [CalendarController::class, 'index'])->name('get_calender');
  
    Route::get('/dashboard', function () { 
        return view('dashboard');
    })->name('dashboard');

    Route::get('/applicant/{id}', function ($id) { 
        return view('applicant', ['id'=> $id]);
    })->name('applicant');

});

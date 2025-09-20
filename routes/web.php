<?php

use App\Http\Controllers\ModulesController;
use App\Http\Controllers\ReceiptController;
use Laravel\Fortify\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ShiftsController;


use App\Livewire\Calendar;
use App\Livewire\Map;
use App\Livewire\StaffList;
use App\Livewire\ShiftsList;
use Laravel\Fortify\Fortify;
use Livewire\Livewire;

Route::get('/', function () {
    return view('welcome');
});


Livewire::component('calendar', Calendar::class);
Livewire::component('map', Map::class);
Livewire::component('staff-list', StaffList::class);
Livewire::component('shifts-list', ShiftsList::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    route::get('/calender', [CalendarController::class, 'index'])->name('get_calender');
    route::get('/shifts/manager', [ShiftsController::class, 'index'])->name('go_to_shifts_manager');


    route::post('/applicationProcess/{user}', [StaffController::class, 'applicationProcess'])->name('applicationProcess');

    Route::get('/shifts/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/applicant/{id}', function ($id) {
        return view('applicant', ['id' => $id]);
    })->name('applicant');

    Route::get('/staff/{id}', function ($id) {
        return view('staff', ['id' => $id]);
    })->name('staff');

})->prefix('receipts')->group(function () {
    Route::get('/dashboard', [ReceiptController::class, 'index'])->name('receipt.index');
    Route::get('/list', [ReceiptController::class, 'list'])->name('receipt.list');
    Route::get('/create', [ReceiptController::class, 'create'])->name('receipt.create');
    Route::post('/store', [ReceiptController::class, 'store'])->name('receipt.store');
    Route::get('/{id}', [ReceiptController::class, 'show'])->name('receipt.show');
    Route::get('/{id}/download', [ReceiptController::class, 'download'])->name('receipt.download');
    Route::get('/{id}/print', [ReceiptController::class, 'print'])->name('receipt.print');
})->prefix('modules')->group(function () {
    Route::get('/', [ModulesController::class, 'index'])->name('modules.index');
    Route::post('/{module}/change_status', [ModulesController::class, 'changeStatus'])->name('module.change_status');
    Route::post('/{module}/make_it_default', [ModulesController::class, 'makeItDefault'])->name('module.make_it_default');
});

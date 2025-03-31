<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ExcelController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CalendarController::class, 'index'])->name('calendar.index');

// Excel
Route::get('/excel', [ExcelController::class, 'index'])->name('excel.index');
Route::post('/excel/convert', [ExcelController::class, 'convert'])->name('excel.convert');

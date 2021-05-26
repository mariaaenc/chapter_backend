<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchedulesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get("/schedules", [SchedulesController::class, 'index'])->name("schedules.index");

Route::post("/schedules", [SchedulesController::class, 'store']);

Route::get("/schedules/create", [SchedulesController::class, 'create']);

Route::get("/schedules/{schedule}", [SchedulesController::class, 'show'])->name("schedules.show");

Route::get("/schedules/{schedule}/edit", [SchedulesController::class, 'edit']);

Route::put("/schedules/{schedule}", [SchedulesController::class, 'update']);

Route::delete("/schedules/{schedule}", [SchedulesController::class, 'destroy']);

require __DIR__.'/auth.php';

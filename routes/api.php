<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('test-event', function () {
    Artisan::call('app:test-broadcast-command');
});

Route::get('/latest', [EventsController::class, 'latest']);
Route::post('/find-previous-event', [EventsController::class, 'findPrevious']);
Route::post('/find-next-event', [EventsController::class, 'findNext']);



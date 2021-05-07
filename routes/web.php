<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\CurrentWeekController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::resource('schedules', ScheduleController::class);
    Route::get('current-week', CurrentWeekController::class)->name('current-week');
});

require __DIR__.'/auth.php';

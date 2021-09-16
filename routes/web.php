<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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

Route::fallback(function () {
    return view('error.404');
});

//Dashboard
Route::get('dashboard',[DashboardController::class,'dashboardMain'])->name('dashboard');
Route::get('dark',[DashboardController::class,'dashboardDark'])->name('dark');
Route::get('light',[DashboardController::class,'dashboardLight'])->name('light');

//Widgets
Route::get('widgets',[DashboardController::class,'widgets'])->name('widgets');

//Charts
Route::get('charts',[DashboardController::class,'charts'])->name('charts');

//Calender
Route::get('calender',[DashboardController::class,'calender'])->name('calender');

//Contact
Route::get('contact',[DashboardController::class,'contact'])->name('contact');


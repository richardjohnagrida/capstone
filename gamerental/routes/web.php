<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupMemberController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RentalsController;
/*
|x`--------------------------------------------------------------------------
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
// 
// Route::resource('/members', SignupMemberController::class);

// Route::get('/admin_dashboard', [DashboardController::class, 'showProfit']);
Route::get('/signup', [SignupMemberController::class, 'show_signup_form']);
Route::get('/add_games', [GamesController::class, 'showPlatforms']);
Route::get('/admin_dashboard', [DashboardController::class, 'show']);



Route::post('/signup_member', [SignupMemberController::class, 'store']);
Route::post('/add_games', [GamesController::class, 'store']);



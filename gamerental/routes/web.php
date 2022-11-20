<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupMemberController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RentalsController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\WelcomeController;

/*
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


// 
// Route::resource('/members', SignupMemberController::class);

// Route::get('/admin_dashboard', [DashboardController::class, 'showProfit']);
Route::get('/signup', [SignupMemberController::class, 'show_signup_form']);
Route::get('/add_games', [GamesController::class, 'showPlatforms']);
Route::get('/admin_dashboard', [DashboardController::class, 'show']);
Route::post('/search', [FilterController::class, 'result']);
Route::get('/members', [MemberController::class, 'show']);
Route::get('/approval/{id}', [ApprovalController::class, 'show']);
Route::get('/orders', [OrdersController::class, 'show']);
Route::get('/', [WelcomeController::class, 'showGames']);


Route::put('/games/{id}', [GamesController::class, 'update'])->name("games.update");
Route::put('/members/{id}', [MemberController::class, 'update']);
Route::put('/orders/{id}', [OrdersController::class, 'update']);



Route::post('/signup_member', [SignupMemberController::class, 'store']);
Route::post('/add_games', [GamesController::class, 'store']);




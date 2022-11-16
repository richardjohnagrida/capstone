<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupMemberController;
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

Route::get('/signup', [SignupMemberController::class, 'show_signup_form']);

Route::post('/signup_member', [SignupMemberController::class, 'store']);



<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubmitPropertyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\LoginCheck;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/",[HomeController::class,"index"])->name('home');
Route::get("/submit-property",[SubmitPropertyController::class,"index"])->name('submit-property');
// Route::get("/login",[LoginController::class,"login"])->name('login');
Route::get("/forgot-password",[LoginController::class,"forgot_password"])->name('forgot-password');
Route::get("/change-password/{email}/{token}",[LoginController::class,"change_password"])->name('change-password');
// Route::get("/register",[RegisterController::class,"register"])->name('register');
Route::post("/register",[LoginController::class,"saveuser"])->name('saveuser');
Route::post("/login",[LoginController::class,"loginuser"])->name('loginuser');
Route::post("/forgot-password",[LoginController::class,"forgot_password_post"])->name('forgot_password_post');
Route::post("/reset-password",[LoginController::class,"reset_password_run"])->name('reset_password_run');



Route::get("/logout",[LoginController::class,"logout"])->name('logout');

Route::middleware([LoginCheck::class])->group(function () {

    Route::get("/register",[RegisterController::class,"register"])->name('register');
    Route::get("/login",[LoginController::class,"login"])->name('login');

});


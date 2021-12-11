<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Choice\IndexChoiceController;
use App\Http\Controllers\Column\IndexColumnController;
use App\Http\Controllers\Column\ShowColumnController;
use App\Http\Controllers\Exercise\IndexExerciseController;
use App\Http\Controllers\Choice\ShowChoiceController;
use App\Http\Controllers\Exercise\ShowExerciseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', RegisterController::class)->name('api.register');
Route::post('/login', LoginController::class)->name('api.login');

Route::group(['as' => 'api.', 'middleware' => 'auth:sanctum'], function () {
    Route::delete('/logout', LogoutController::class)->name('logout');

    Route::get('/exercises', IndexExerciseController::class)->name('exercises.index');
    Route::get('/exercises/{id}', ShowExerciseController::class)->name('exercises.show');

    Route::get('/columns', IndexColumnController::class)->name('columns.index');
    Route::get('/columns/{id}', ShowColumnController::class)->name('columns.show');

    Route::get('/choices', IndexChoiceController::class)->name('choices.index');
    Route::get('/choices/{id}', ShowChoiceController::class)->name('choices.show');

});

<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Choice\IndexChoiceController;
use App\Http\Controllers\Choice\ShowChoiceController;
use App\Http\Controllers\Column\IndexColumnController;
use App\Http\Controllers\Column\ShowColumnController;
use App\Http\Controllers\Exercise\IndexExerciseController;
use App\Http\Controllers\Exercise\ShowExerciseController;
use App\Http\Controllers\ExercisePassing\CreateExercisePassingController;
use App\Http\Controllers\ExercisePassing\DestoyExercisePassingController;
use App\Http\Controllers\ExercisePassing\EditExercisePassingController;
use App\Http\Controllers\ExercisePassing\IndexExercisePassingController;
use App\Http\Controllers\ExercisePassing\ShowExercisePassingController;
use App\Http\Controllers\User\UserController;
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

    Route::get('/profile', [UserController::class, 'show'])->name('profile.show');
    Route::patch('/profile', [UserController::class, 'edit'])->name('profile.edit');

    Route::get('/exercises', IndexExerciseController::class)->name('exercises.index');
    Route::get('/exercises/{id}', ShowExerciseController::class)->name('exercises.show');

    Route::get('/columns', IndexColumnController::class)->name('columns.index');
    Route::get('/columns/{id}', ShowColumnController::class)->name('columns.show');

    Route::get('/choices', IndexChoiceController::class)->name('choices.index');
    Route::get('/choices/{id}', ShowChoiceController::class)->name('choices.show');

    Route::get('/exercise-passings', IndexExercisePassingController::class)->name('exercise-passings.index');
    Route::get('/exercise-passings/{id}', ShowExercisePassingController::class)->name('exercise-passings.show');
    Route::post('/exercise-passings', CreateExercisePassingController::class)->name('exercise-passings.create');
    Route::put('/exercise-passings/{id}', EditExercisePassingController::class)->name('exercise-passings.edit');
    Route::delete('/exercise-passings/{id}', DestoyExercisePassingController::class)->name('exercise-passings.destoy');

    Route::get('/exercise-column-passings', IndexExercisePassingController::class)->name('exercise-column-passings.index');
    Route::get('/exercise-column-passings/{id}', ShowExercisePassingController::class)->name('exercise-column-passings.show');
});



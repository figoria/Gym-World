<?php

use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::resource('exercises',ExerciseController::class);

route::get('exercise',function () {
    return view('exercise');
});

route::get('create',function () {
    return view('create');
});

route::get('edit',function () {
    return view('edit');
});

Route::get('login', function (){
    return view('auth.login');
});

Auth::routes();


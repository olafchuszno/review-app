<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TopicController;
use App\Models\Contribution;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/airports/{airport:code}/basic_info', [AirportController::class, 'show']);

Route::post('/search', [SearchController::class, 'show']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::delete('/session', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/airports/{airport:code}/main_topics', [TopicController::class, 'index']);

Route::get('/airports/{airport:code}/topics/{topic:name}', [Contribution::class, 'index']);
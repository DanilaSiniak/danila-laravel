<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/plans', function () {
    return view('plans');
});

Route::middleware("auth")->group(function (){
    Route::get('plans', [PlanController::class, 'index'])->name('plans.home');
    Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");

    Route::get('/chat',[ChatController::class, 'index'])->name('chat.home');
    Route::get('/messages',[ChatController::class, 'messages'])->name('chat.messages');
    Route::post('/send',[ChatController::class, 'send'])->name('chat.send');
});

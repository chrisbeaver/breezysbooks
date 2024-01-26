<?php

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

Route::get('/', function () {
    $topics = config('app.topics');
    return view('landing', compact('topics'));
});

Route::post('subscribe', App\Http\Controllers\JoinMailingListController::class)->name('join-mailing-list');

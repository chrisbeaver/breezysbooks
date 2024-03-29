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

Route::get('mail', function () {
    $subscriber = App\Models\Subscriber::find(1);

    return new App\Mail\VisitorSubscribed($subscriber);
});

Route::post('subscribe', App\Http\Controllers\JoinMailingListController::class)->name('join-mailing-list');
Route::get('confirm/{subscriber}/{hash}', \App\Http\Controllers\ConfirmSubscriptionController::class)->name('confirm-email');

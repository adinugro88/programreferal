<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});



Route::group([ "middleware" => ['auth:sanctum', config('jetstream.auth_session'), 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');
    Route::get('/customers',  [ CustomersController::class, "index" ])->name('customers');
    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
});


Route::get('/regiscust',  [ CustomersController::class, "registercustomer" ])->name('regiscust');
Route::get('/thanks/{kodereferal}',  [ CustomersController::class, "thankyou" ])->name('thankyou');
Route::post('/daftarcustomer',  [ CustomersController::class, "daftarcustomer" ])->name('daftarcustomer');
Route::get('/download/{kodereferal}',  [ CustomersController::class, "downloadpage" ])->name('downloadpage');
Route::get('/downloadhal/{kodereferal}',  [ CustomersController::class, "downloadhal" ])->name('downloadhal');
Route::get('/{kodereferal}',  [ CustomersController::class, "claimreferal" ])->name('claimreferal');
<?php

use App\Http\Controllers\ChatsController;
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

Auth::routes();

Route::get( '/',            [ChatsController::class, 'index']               );
Route::get( 'messages',     [ChatsController::class, 'fetchMessages']       );
Route::post('messages',     [ChatsController::class, 'sendMessage']         );

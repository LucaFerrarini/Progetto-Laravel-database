<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\PublicController;
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

// HOMEPAGE
Route::get('/', [PublicController::class, "homepage"])->name('home');

// PERSONAGGI
Route::get('/personaggi', [CharacterController::class , "characters"])->name('char');
Route::get('/aggiungi', [CharacterController::class , "add_element"])->name('add');
Route::post('/aggiungi/post',[CharacterController::class , "add_element_post"])->name('add_post');


// CONTATTACI
Route::get('/contattaci', [PublicController::class , "contact_us"])->name('contact');
Route::post('/contattaci/send', [PublicController::class , "send"])->name('contact_send');
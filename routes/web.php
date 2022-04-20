<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

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


Route::get('/',[FoodController::class,"index"])->name("accueil");

Route::get('/detail/{id}',[FoodController::class,"detail"])->name("detail");

/**Mon formulaire */

Route::get('/contactez-nous',[ContactController::class,"index"])->name("contact");

/*Réception des données de mon formulaire*/

Route::post('/contactez-nous',[ContactController::class,"save"])->name("contact");






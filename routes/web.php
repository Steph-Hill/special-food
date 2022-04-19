<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ContactController;

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


Route::get('/Bienvenue',[FoodController::class,"index"])->name("accueil");

Route::get('/detail/{id}',[FoodController::class,"detail"])->name("detail");

//affichage de mon formulaire
Route::get('/contactez-nous',[ContactController::class,"index"])->name("contact");

//reception des données du formulaire de contact en post
Route::post('/contactez-nous',[ContactController::class,"save"])->name("contact");



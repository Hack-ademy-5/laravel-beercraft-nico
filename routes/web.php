<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\BreweryController;

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

Route::get('/', [PublicController::class,'home'])->name('home');

Route::get("/contact",[PublicController::class,'contact'])->name('contact');
Route::post("/contact",[PublicController::class,'contactStore'])->name('contact.store');
Route::get("/contacts",[PublicController::class,'contacts'])->name('contact.all');

Route::post('/breweries',[BreweryController::class,'store'])->name('breweries.store');
Route::get('/breweries',[BreweryController::class,'index'])->name('breweries.index');
<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MotivationController;

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
    return view('welcome');
});

Route ::get("/form_update_motivation/{id}",[MotivationController::class,"edit"]);
Route ::get("/motivation_delete/{id}",[MotivationController::class,"destroy"]);
Route ::get("/motivation_create",[MotivationController::class,"index"]);
Route ::get("/motivation_liste",[MotivationController::class,"create"]);
Route ::post("/motivation_insert",[MotivationController::class,"store"]);
Route ::post("/motivation_update",[MotivationController::class,"update"]);
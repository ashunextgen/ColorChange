<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ColorController;

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


Route::get('index',[ColorController::class,'index']);
Route::get('change-color',[ColorController::class,'change_color']);
Route::post('change-color',[ColorController::class,'post_change_color']);
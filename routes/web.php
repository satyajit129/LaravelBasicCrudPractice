<?php

use App\Http\Controllers\StudentController;
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
Route::get('/showdata',[StudentController::class,'showdata']);
Route::get('/adddata',[StudentController::class,'adddata']);
Route::post('/storedata',[StudentController::class,'storedata']);
Route::get('/editdata/{id}',[StudentController::class,'editdata']);
Route::post('/updatedata/{id}',[StudentController::class,'updatedata']);
Route::get('/deletedata/{id}',[StudentController::class,'deletedata']);

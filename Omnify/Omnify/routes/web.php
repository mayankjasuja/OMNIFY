<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Front;
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

// login page route                // login page route                      // login page route


Route::get('/', [Login::class,'Index']);
Route::get('/Login', [Login::class,'Login']);
Route::post('/home', [Login::class,'home']);
Route::post('/user_store',[Login::class,'store']);

//HOME PAGE ROUTS                   //HOME PAGE ROUTS                     //HOME PAGE ROUTS

Route::get('/Scheduled_Events',[Front::class,'index']);
Route::post('/event_store',[Front::class,'store']);
Route::get('/Events_list',[Front::class,'event_list']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPage;
use App\Http\Middleware\CheckLanguage;
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
// TODO: uncommitted for step 2
Route::get('/{locale?}', MainPage::class) /*->middleware(CheckLanguage::class)*/;

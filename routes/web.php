<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Quran_app;

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


Route::get('/reader-list',[Quran_app::class,'get_reader_list']);
Route::get('/reader/details/{reader_id}',[Quran_app::class,'get_reader_details']);
Route::get('/sorah-list',[Quran_app::class,'get_sorah_list']);
Route::get('/sorah/details/{sorah_id}',[Quran_app::class,'get_sorah_details']);

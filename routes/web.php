<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ctrl;
use App\Models\Vico;
use App\Models\FeiFei;

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

Route::get('/home1', function () {
    return view('index1');
});

Route::get('/home2', function () {
    return view('index2');
});

Route::get('/history1',[ctrl::class,'VicoC']);

Route::get('/history2',[ctrl::class,'FeiFeiC']);

Route::get('/menu1', function () {
    return view('menu1');
});

Route::get('/menu2', function () {
    return view('menu2');
});

Route::get('/', function () {
    return view('login');
});


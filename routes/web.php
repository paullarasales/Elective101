<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentControllerJps;
use App\Http\Controllers\PagesControllerJps;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|hbn
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', [PagesControllerJps::class, 'main']);
Route::get('/dashboard', [PagesControllerJps::class, 'dashboard']);
Route::get('/contactus', [PagesControllerJps::class,'contactus']);
Route::get('/aboutus', [PagesControllerJps::class, 'aboutus']);
Route::get('controlstructure', [PagesControllerJps::class, 'control']);
Route::get('/client/{ClientID?}', [PagesControllerJps::class, 'client']);


Route::resource('/student', StudentControllerJps::class);

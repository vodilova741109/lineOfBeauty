<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\CosmetologController;
use App\Http\Controllers\HaircutterController;
use App\Http\Controllers\ManicureController;
use App\Http\Controllers\VizajeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\SeminarCardController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/cosmetolog',[CosmetologController::class, 'index']);
Route::get('/haircutter',[HaircutterController::class, 'index']);
Route::get('/manicure', [ManicureController::class, 'index']);
Route::get('/vizaje', [VizajeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contacts', [ContactsController::class, 'index']);
Route::get('/{courses}/{id}', [CardController::class, 'getCourseCard']);
Route::get('/{seminars}/{id}', [SeminarCardController::class, 'index']);


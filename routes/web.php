<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ServicesCatController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ContactController;

use App\Http\Controllers\MastersController;

use App\Http\Controllers\ServicesDogController;
use App\Http\Controllers\BookingController;

use App\Http\Controllers\admin\RecController;
use App\Http\Controllers\admin\StockController;
use App\Http\Controllers\admin\galleryController;
use App\Models\rec;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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


Route::get('/', [MainController::class,'index','gallery','selectKind'])->name('index');

Route::get('/about', [MainController::class,'about']);
Route::get('/contact', [MainController::class,'contact']);
Route::get('/gallery', [MainController::class,'gallery']);
Route::get('/stock', [MainController::class,'stock']);
Route::get('/services', [MainController::class,'services']);
Route::get('/rec', [MainController::class,'rec']);
//гостиница
Route::get('/hotel', [MainController::class,'hotel']);
Route::get('/booking', [MainController::class,'booking'])->name('booking');
//запись
Route::get('/selectKind', [MainController::class,'selectKind'])->name('selectKind');
Route::get('/selectServices', [MainController::class,'selectServices','rec'])->name('selectServices');
Route::get('/select', [MainController::class,'rec'])->name('rec');
Route::get('/admin/home', [HomeController::class,'index2'])->name('index2');

Route::get('/loginAdmin',[MainController:: class,'login'])->name('login');

// Route::get('/register',[MainController:: class,'register'])->name('register');
// Route::post('/register',[RegisterController::class,'store'])->name('register');


Route::post('/login',[LoginController::class,'login'])->name('login');

Route::prefix('admin_panel')->group(function(){
    Route::get('/',[HomeController::class,'index2'])->name('index2');
    Route::resource('servicesCat',ServicesCatController::class);
    Route::resource('about',AboutController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('servicesDog',ServicesDogController::class);
   
    Route::resource('rec',RecController::class);
    Route::resource('stock',StockController::class);
    Route::resource('gallery',galleryController::class);
    Route::resource('booking',BookingController::class);
    Route::resource('masters',MastersController::class);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/logout',function()
{
    Session::forget('user');
    return redirect ('/');
});

Route::get('/login',[HelloController::class,'index']);
Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'index']);
Route::get('/details/{id}',[ProductController::class,'details']);
Route::get('/search',[ProductController::class,'search']);
Route::post('/add_to_cart',[ProductController::class,'add_to_cart']);
Route::get('/catrtlist',[ProductController::class,'catrtlist']);
Route::get('/removecart/{id}',[ProductController::class,'removecart']);
Route::get('/ordernow',[ProductController::class,'ordernow']);
Route::post('/orderplace',[ProductController::class,'orderplace']);
Route::get('/myorders',[ProductController::class,'myorders']);
Route::get('/about',[ProductController::class,'about']);





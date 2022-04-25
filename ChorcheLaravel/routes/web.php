<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ElectionController;

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

Route::post('/auth/save',[MainController::class,'save'])->name('save_data');
Route::post('/auth/check',[MainController::class,'check'])->name('check_data');
Route::get('/auth/logout',[MainController::class,'logout'])->name('logout_route');
Route::get('/auth/login',[MainController::class,'login'])->name('login_route');
Route::get('/auth/register',[MainController::class,'register'])->name('register_route');

Route::group(['middleware' => ['AuthCheck']], function(){
    Route::get('/admin/dashboard',[MainController::class,'dashboard'])->name('dashboard');
    Route::post('/election/save',[ElectionController::class,'save'])->name('createElection');

});

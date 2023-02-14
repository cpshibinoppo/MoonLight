<?php

use App\Http\Controllers\AdminController;
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
    return 'not found';
});
Route::prefix('admin')->group(function(){
Route::get('',[AdminController::class,'index']);
Route::post('/login',[AdminController::class,'store'])->name('admin.login');
Route::post('/logout',[AdminController::class,'destroy'])->name('admin.logout');
Route::get('/dashboard', [AdminController::class,'show'])->name('admin.dashboard');
});

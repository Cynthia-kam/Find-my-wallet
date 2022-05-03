<?php
use App\Http\Controllers\MainController;

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
    return view('welcome');
});
Route::get('/lnf/login',[MainController::class,'login'])->name('lnf.login');
Route::get('/lnf/register',[MainController::class,'register'])->name('lnf.register');
Route::post('/lnf/save',[MainController::class,'save'])->name('save');
Route::post('/lnf/check',[MainController::class,'check'])->name('check');
Route::get('/lnf/lost',[MainController::class,'lost'])->name('lnf.lost');
Route::get('/lnf/found',[MainController::class,'found'])->name('lnf.found');
Route::post('/lnf/savelost',[MainController::class,'savelost'])->name('savelost');
Route::post('/lnf/savefound',[MainController::class,'savefound'])->name('savefound');
Route::get('/lnf/index',[MainController::class,'index'])->name('lnf.index');
Route::get('/lnf/details/{id}',[MainController::class,'details'])->name('lnf.details');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;

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
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/login', [MainController::class, 'login'])->name('login');
Route::post('/loginpost', [MainController::class, 'loginpost']);
Route::get('/logout',[MainController::class,'logout']);

Route::get('/employee-list',[MainController::class,'employeelist'])->name('employee-list');
Route::get('/deleteEmployee/{id}',[MainController::class,'deleteEmployee'])->name('deleteEmployee');
Route::get('/update/{id}',[MainController::class,'update'])->name('update')->name('update');
Route::post('/updateemployee/{id}',[MainController::class,'updateemployee'])->name('updateemployee');
Route::get('/employee',[MainController::class,'showEmployee'])->name('employee');
Route::post('/uploademployee',[MainController::class,'uploademployee'])->name('uploademployee');


Route::get('/company-list',[HomeController::class,'companylist'])->name('company-list');
Route::get('/deletecompany/{id}',[HomeController::class,'deletecompany'])->name('deletecompany');
Route::get('/updateview/{id}',[HomeController::class,'updateview'])->name('updateview');
Route::post('/updatecompany/{id}',[HomeController::class,'updatecompany']);
Route::get('/company',[HomeController::class,'showcompany'])->name('company');
Route::post('/uploadcompany',[HomeController::class,'uploadcompany'])->name('uploadcompany');

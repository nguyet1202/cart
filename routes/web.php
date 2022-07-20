<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;

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

Route::get('/', [PageController::class , 'getIndex']);
Route::get('/type/{id}', [PageController::class , 'getLoaiSp']);
Route::get('/contact', [PageController::class , 'getContact']);
Route::get('/about', [PageController::class , 'getAbout']);
Route::get('/showadmin',[PageController::class, 'getIndexAdmin']);
//Add
Route::get('/admin-add-form',[PageController::class, 'getAdminpage']);
Route::post('/admin-add-form',[PageController::class,'postAdminAdd'])->name('add-product');
//Edit
// Route::get('/admin-edit-form/{id}',[PageController::class,'getAdminEdit']);
// Route::post('/admin-edit',[PageController::class,'postAdminEdit']);
// Route::post('/admin-delete/{id}',[PageController::class,'postAdminDelete']);
Route::get('/admin-edit-form/{id}',[PageController::class,'getAdminEdit']);
Route::post('/admin-edit',[PageController::class,'postAdminEdit']);
//delete
Route::post('/admin-delete/{id}',[PageController::class,'postAdminDelete']);

Route::get('/detail/{id}',[PageController::class,'getDetail']);

Route::get('add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('themgiohang');												
Route::get('del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('xoagiohang');	
//register and login

Route::get('/register', function () {return view('users.register');
    });
Route::post('/register',[UserController::class,'Register']);
//login 
Route::get('/login', function () {return view('users.login');                       
    });     
Route::post('/login',[UserController::class,'Login']);
Route::get('/logout',[UserController::class,'Logout']);
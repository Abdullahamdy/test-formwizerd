<?php

use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\NewProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestColumnController;
use Illuminate\Support\Facades\DB;

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

Route::view('/', 'TrackMap/track');



Route::get('testproduct',[NewProductController::class,'index'])->name('testproduct');
Route::post('createtestproduct',[NewProductController::class,'store'])->name('createtestproduct');


Route::get('products', [ProductController::class,'index'])->name('products.index');

Route::get('products/create-step-one', [ProductController::class,'createStepOne'])->name('products.create.step.one');
Route::post('products/create-step-one', [ProductController::class,'postCreateStepOne'])->name('products.create.step.one.post');

Route::get('products/create-step-two', [ProductController::class,'createStepTwo'])->name('products.create.step.two');
Route::post('products/create-step-two', [ProductController::class,'postCreateStepTwo'])->name('products.create.step.two.post');

Route::get('products/create-step-three', [ProductController::class,'createStepThree'])->name('products.create.step.three');
Route::post('products/create-step-three', [ProductController::class,'postCreateStepThree'])->name('products.create.step.three.post');






Route::get('payment',[PaymentController::class,'payment'])->name('payment');
Route::get('get/classification', [ClassificationController::class, 'index'])->name('/classification');
Route::view('testselect', 'testselect2')->name('/testselect');;
Route::post( 'classification', [ClassificationController::class, 'store'])->name('saveclassification');
Route::get('classification/{id}', [ClassificationController::class, 'edit'])->name('editclassification');
Route::get('getindex', [ClassificationController::class, 'getview'])->name('indexview');
Route::post('updateinfluencer/{id}', [ClassificationController::class, 'update'])->name('updateinfluencer');
Route::get('testcoloumn', [TestColumnController::class, 'countColoumn'])->name('testcoloumn');
Route::get('complexity', [TestColumnController::class, 'complexityTime'])->name('complexity');
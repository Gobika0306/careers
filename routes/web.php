<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobopeningController;
use App\Models\departments;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     $sourceData = departments::find($sourceId);
// });


Route::get('/',[JobOpeningController::class,'index'])->name('job.name');
Route::get('/dept',[DepartmentController::class,'department'])->name('job.department');
Route::get('/jobopening/create',[JobOpeningController::class,'create']);
Route::post('/jobopening/store',[JobOpeningController::class,'store']);

Route::get('jobopening/{id}/edit',[JobOpeningController::class,'edit']);
Route::put('jobopening/{id}/update',[JobOpeningController::class,'update']);
Route::delete('jobopening/delete/{id}',[JobOpeningController::class,'destroy']);

Route::get('/departments/create',[DepartmentController::class,'create']);
Route::post('/departments/store',[DepartmentController::class,'store']);
Route::get('departments/{id}/edit',[DepartmentController::class,'edit']);
Route::put('departments/{id}/update',[DepartmentController::class,'update']);
Route::delete('departments/delete/{id}',[DepartmentController::class,'destroy']);

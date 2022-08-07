<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiCrudController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('api', [ApiCrudController::class, 'index'])->name('index');
Route::POST('api-store', [ApiCrudController::class, 'store'])->name('store');
Route::get('api-edit/{id}', [ApiCrudController::class, 'edit'])->name('edit');
Route::put('api-update/{id}', [ApiCrudController::class, 'update'])->name('update');
Route::get('api-show/{id}', [ApiCrudController::class, 'show'])->name('show');
Route::get('api-destroy/{id}', [ApiCrudController::class, 'delete'])->name('delete');


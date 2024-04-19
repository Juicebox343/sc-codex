<?php

use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CollectionController;


Route::get('/', CollectionController::class .'@index')->name('collections.index');
Route::get('/collections/{collection_name}', CollectionController::class .'@show')->name('collections.show');

Route::get('/modal', function () {
    return view('/modal');
});

// Route::get('/collection', function () {
//     return view('collection', ['collection_name']);
// });

// Route::get('/collection/{collection_name}', function () {
//     return view('single-collection', ['collection_name']);
// });




Route::resource('vehicles', VehicleController::class);
Route::resource('collections', CollectionController::class);


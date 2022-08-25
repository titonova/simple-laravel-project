<?php

use App\Http\Controllers\XLivewire;
use App\Http\Controllers\XLivewireController;
use App\Http\Controllers\ShockComponentsController;
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

Route::get('x-livewire',[XLivewireController::class, 'index']);
Route::get('shock-components',[ShockComponentsController::class, 'index']);

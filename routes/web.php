<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UcapanController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Undangan5Controller;
use App\Http\Controllers\Undangan6Controller;
use App\Http\Controllers\Undangan7Controller;
use App\Http\Controllers\Undangan8Controller;

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


Route::resource('/undangan-5', Undangan5Controller::class);
Route::resource('/undangan-6', Undangan6Controller::class);
Route::resource('/undangan-7', Undangan7Controller::class);
Route::resource('/undangan-8', Undangan8Controller::class);
Route::get('/', function () {
    return view('welcome');
});

Route::post('ucapan', [UcapanController::class, 'store'])->name('ucapanstore');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

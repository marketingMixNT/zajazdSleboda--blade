<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/',[MainController::class,'home'])->name('home');
Route::get('/pokoje',[MainController::class,'apartments'])->name('apartments');
Route::get('/galeria',[MainController::class,'gallery'])->name('gallery');
Route::get('/restauracja',[MainController::class,'restaurant'])->name('restaurant');
Route::get('/menu',[MainController::class,'menu'])->name('menu');
Route::get('/pokój',[MainController::class,'singleApartament'])->name('apartment');
Route::get('/kontakt',[MainController::class,'contact'])->name('contact');



// Route::get('/export',[ExportController::class,'export']);

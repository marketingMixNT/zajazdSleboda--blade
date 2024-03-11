<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::get('/', [MainController::class, 'home'])->name('home');
    Route::get('/pokoje', [MainController::class, 'apartments'])->name('apartments');
    Route::get('/galeria', [MainController::class, 'gallery'])->name('gallery');
    Route::get('/restauracja', [MainController::class, 'restaurant'])->name('restaurant');
    Route::get('/menu', [MainController::class, 'menu'])->name('menu');
    Route::get('/pokój', [MainController::class, 'singleApartament'])->name('apartment');
    Route::get('/kontakt', [MainController::class, 'contact'])->name('contact');
    Route::get('/polityka_prywatnosci', [MainController::class, 'privacy_policy'])->name('privacy_policy');
});


// Route::get('/export',[ExportController::class,'export']);
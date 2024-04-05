<?php

use App\Http\Controllers\FormController;
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
    Route::get('/pokój-z-2-łóżkami-typu-king-size', [MainController::class, 'apartment_one'])->name('apartment_one');
    Route::get('/pokój-czteroosobowy-z-balkonem', [MainController::class, 'apartment_two'])->name('apartment_two');
    Route::get('/pokój-dwuosobowy', [MainController::class, 'apartment_three'])->name('apartment_three');
    Route::get('/kontakt', [MainController::class, 'contact'])->name('contact');
    Route::post('/kontakt', [FormController::class, 'contact_form'])->name('contact_form');
    Route::get('/polityka-prywatnosci', [MainController::class, 'privacy_policy'])->name('privacy_policy');
});


// Route::get('/export',[ExportController::class,'export']);
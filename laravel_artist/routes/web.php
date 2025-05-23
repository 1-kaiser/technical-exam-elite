<?php

use App\Http\Controllers\Api\AlbumController;
use App\Http\Controllers\Api\ArtistController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('/', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    
    Route::controller(ArtistController::class)->group(function () {
    Route::get('dashboard', 'index')->name('dashboard');    
    Route::get('artist/{artist}', 'show')->name('artists.show');
    Route::get('artist/{artist}/edit', 'edit')->name('artists.edit');
    Route::patch('artist/{artist}', 'update')->name('artists.update');
    Route::delete('artist/{artist}', 'destroy')->name('artists.destroy');
    });

    Route::controller(AlbumController::class)->group(function () {
        Route::get('album/{artist}/albums', 'show')->name('albums.show');
        Route::get('album/{album}/edit', 'edit')->name('albums.edit');
        Route::patch('album/{album}', 'update')->name('albums.update');
        Route::delete('album/{album}', 'destroy')->name('albums.destroy');
    });

});
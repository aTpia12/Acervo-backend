<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\EnclosureController;

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::post('/login', [RegisterController::class, 'login'])->name('register.login');

//Authors
Route::apiResource('authors', AuthorController::class)->names('api.v1.authors');

//Artworks
Route::apiResource('artworks', ArtworkController::class)->names('api.v1.artworks');

//Enclosures
Route::apiResource('enclosures', EnclosureController::class)->names('api.v1.enclosures');

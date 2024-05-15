<?php

use App\models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
//all listings
Route::get('/', [ListingController::class,'index']);


 //create listing

 Route::get('/listings/create', [ListingController::class,'create'])->middleware('auth');

  //store listing

  Route::post('/listings', [ListingController::class,'store'])->middleware('auth');
  //show edit form
Route::get('/listings/{listing}/edit', [ListingController::class,'edit'])->middleware('auth');
  //Update listing
  Route::put('/listings/{listing}', [ListingController::class,'update'])->middleware('auth');
  //Update listing
  Route::delete('/listings/{listing}', [ListingController::class,'destroy'])->middleware('auth');
  Route::get('/listings/manage', [ListingController::class,'manage'])->middleware('auth');
 //single  listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);
//show register/create  from
Route::get('/register',[UserController::class,'create'])->middleware('guest');
Route::post('/users',[UserController::class,'store']);
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate',[UserController::class,'authenticate']);


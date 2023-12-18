<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|   
// Common Resource Routes:
//listing = resource
//index - show all  listings
//show - Show single listing
//create - Show form to create new listing
//store - Store new listing (POST)
//edit - Show form to edit listing
//update - Update listing
//destroy - Delete

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ListingController::class, 'index']);


// Show Create Form
Route::get('/listings/create',
[ListingController::class, 'create'])->middleware('auth');


//Store Listing Data 

Route::post('/listings/', 
[ListingController::class, 'store'])->middleware('auth');


// Show Edit Form

Route::get('/listings/{listing}/edit',[ListingController::class, 'edit'])->middleware('auth');


//Edit submit to Update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');



//single listing

Route::get('/listings/{listing}', 
[ListingController::class, 'show']);

//Show Register/Create
Route::get('/register', [UserController::class, 'create'])->middleware(('guest'));

//Create User
Route::post('/users', [UserController::class, 'store']);

//Logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//show Login
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware(('guest'));

//Login Useree
Route::post('/users/login', [UserController::class, 'loginUser']);
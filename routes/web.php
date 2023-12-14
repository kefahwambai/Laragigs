<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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
[ListingController::class, 'create']);


//Store Listing Data 

Route::post('/listings/', 
[ListingController::class, 'store']);






//single listing

Route::get('/listings/{listing}', 
[ListingController::class, 'show']);



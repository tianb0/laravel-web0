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
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// common resource routes
// index - show all listings
// show - show single listing
// create - show form to create new listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destroy - delete listing

Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create']);

Route::post('/listings', [ListingController::class, 'store']);

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

Route::put('/listings/{listing}', [ListingController::class, 'update']);

Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// should below /create
Route::get('/listings/{listing}', [ListingController::class, 'show']);

/* Route::get('/', function () { */
/*   return view('listings', [ */
/*     'heading' => 'Latest Listings', */
/*     'listings' => Listing::all(), */
/*   ]); */
/* }); */

/* Route::get('/listings/{id}', function($id){ */
/*     return view('listing', [ */
/*       'listing' => Listing::find($id) */
/*     ]); */
/*   }); */

/* Route::get('/listings/{id}', function ($id) { */
/*   $listing = Listing::find($id); */

/*   if ($listing) { */
/*     return view('listing', [ */
/*       'listing' => $listing */
/*     ]); */
/*   } else { */
/*     abort('404'); */
/*   } */
/* }); */

/* Route::get('/listings/{listing}', function (Listing $listing) { */
/*   return view('listing', [ */
/*     'listing' => $listing */
/*   ]); */
/* }); */

/* Route::get('/check', function () { */
/*   return 'good'; */
/* }); */

/* Route::get('/', function () { */
/*     return view('welcome'); */
/* }); */

/* Route::get('/hello', function() { */
/*   return response('<h1>Hello World</h1>') */
/*       -> header('Content-Type', 'text/plain') */
/*       -> header('foo', 'bar'); */
/* }); */

/* Route::get('/posts/{id}', function($id) { */
/*   return response('Post ' . $id); */
/* }) -> where('id', '[0-9]+'); */

/* Route::get('/search', function(Request $request) { */
/*   return $request->name . ' ' . $request->city; */
/* }); */

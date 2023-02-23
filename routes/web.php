<?php

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

Route::get('/', function () {
  return view('listings', [
    'heading' => 'Latest Listings',
    'listings' => Listing::all(),
  ]);
});

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

Route::get('/listings/{listing}', function (Listing $listing) {
  return view('listing', [
    'listing' => $listing
  ]);
});

Route::get('/check', function () {
  return 'good';
});

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

<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

// All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all(),
    ]);
});

// Single Listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'heading' => 'Listing Details',
        'listing' => Listing::find($id),
    ]);
});

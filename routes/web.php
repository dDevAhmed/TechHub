<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\JobListingController;

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

// resource routes
// index    all listings
// show     single listing
// create   new listing form
// store    add new listing to db
// edit     update listing form
// update   save new listing update
// destroy  danger zone (delete listing)


// admin controls
// Route::domain('{account}.techhub.com')->group(function () {
//     Route::get('user/{id}', function (string $account, string $id) {
//         // ...
//     });
// });
// Route::domain('{admin}/', return view('welcome'));
// Route::domain('admin.' . env('APP_URL'))->group(function () {
//     Route::get('login', function () {
//         return 'Admin Login Page';
//     });
//     Route::get('/dashboard', function () {
//         return view('admin');
//     });
// });


// app domains
Route::get('/', [AppController::class, 'home'])->name('home');
Route::get('/results', [AppController::class, 'results'])->name('results');


// job listing routes
Route::controller(JobListingController::class)->group(function () {
    Route::get('/jobs', 'index')->name('job.index');
    Route::get('/job/create', 'createJobListing')->name('job.create');
    Route::post('/job/create', 'storeJobListing')->name('job.store');
    Route::get('/job/{job}', 'showJobListing')->name('job.listing');
});


// testing page
Route::get('/testpage', function () {
    return view('testpage');
});

// Route::redirect('/test', '/testpage');  //check multiple parameters for redirect()

// Route::get('/testpage/{name?}', function (string $name = null) {
//     return $name;
// });

// Route::get('/{pagename}', function (string $name = 'Ali') {
//     return view('testpage');
// })->where('name', '[A-Za-z]+')
// ->whereIn('pagename', ['test', 'testing', 'tested']);

// Route::get('/testpage/{id}/{name}', function (string $id, string $name) {
//     return ('ID: ' . $id . ',' . 'Name: ' . $name);
// })->whereNumber('id')->whereAlpha('name');

// Route::get('/testpage/{name}', function (string $name) {
//     return $name;
// })->whereAlphaNumeric('name');

// Route::get('/testpage/{id}', function (string $id) {
//     return $id;
// })->whereUuid('id');

// Route::get('/testpage/{id}', function (string $id) {
//     return $id;
// })->whereUlid('id');

// Route::get('/category/{category}', function (string $category) {
//     return $category;
// })->whereIn('category', ['movie', 'song', 'painting']);


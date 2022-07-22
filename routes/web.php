<?php

use Illuminate\Support\Facades\Route;

// front(landing)
use App\Http\Controllers\Landing\LandingController;


// Member (Dashboard)
use App\Http\Controllers\Dashboard\ProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// route::resource('/', LandingController::class);

// Route::group(['prefix' => 'member', 'as' => 'member.', 'middleware' => ['auth:sanctum', 'verified'],
// function()
// {
    
// }

// ]);

Route::get('/', function () {
    return view('layouts.landing');
});

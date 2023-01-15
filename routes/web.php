<?php

use App\Http\Controllers\Blog\BlogController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () { return view('front'); });

Route::get('/', function () { return view('index'); });
Route::get('/contact', function () { return view('pages.contact'); });
Route::get('/about', function () { return view('pages.about'); });

Route::get('/property', function () { return view('pages.property'); });
Route::get('/property-single', function () { return view('pages.property-single'); });

Route::get('/blog', [BlogController::class,'index']);
Route::get('/blog-single/{id}', [BlogController::class,'singlePost']);




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
require __DIR__ . '/dashboard.php';

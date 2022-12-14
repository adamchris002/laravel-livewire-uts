<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DetailPage;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', function () {
    return view('page.login');
})->name('page.login');




Route::get('/toa', function () {
    return view('toa');
});

Route::get('/register', function () {
    return view('page.register');
})->name('register');


Route::get('/home', function () {
    return view('page.home');
})->name('getAllData');


Route::get('/history', function () {
    return view('page.history');
})->name('history');





//Route::get('detail', [\App\Http\Livewire\DetailPage::class, 'data'])->name('detail');

// Route::get('/home', function () {
//     return view('home');
// });

//Route::get("home", [HomeController::class, 'list'])->name("getAllData");
Route::get("detail/{id}", [HomeController::class, 'detail'])->name("detail");

Route::get("cart", [HomeController::class, 'cart'])->name("cart");




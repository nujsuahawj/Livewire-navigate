<?php

use App\Livewire\PageFore;
use App\Livewire\PageOne;
use App\Livewire\PageThree;
use App\Livewire\PageTwo;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('page1');
// })->name('page1');
Route::get('/', PageOne::class)->name('page1');

// Route::get('/page2', function () {
//     return view('page2');
// })->name('page2');
Route::get('/page2', PageTwo::class)->name('page2');

// Route::get('/page3', function () {
//     return view('page3');
// })->name('page3');
Route::get('/page3', PageThree::class)->name('page3');

// Route::get('/page4', function () {
//     return view('page4');
// })->name('page4');
Route::get('/page4', PageFore::class)->name('page4');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\PageController;

use App\Http\Controllers\ComicsController;
use App\Models\Comic;

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

Route::get('home', [PageController::class, 'index'])->name('home');

Route::get('comics', [PageController::class, 'comics'])->name('comics');

Route::resource('/admin/comics', ComicsController::class, ['as' => 'admin']);

Route::get('comic_details/{id}', function(string $id){
    $comic = Comic::find($id);
    // dd($comic);
    return view('comic_details', compact('comic'));
})->name('comic_details');
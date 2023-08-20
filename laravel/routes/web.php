<?php



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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Models\SongModel;


Route::get('/', function () {
    return view('spot');})->name('spot');

Route::get('/spotify', function () {
    return view('spotify');})->name('spotify');

Route::get('/spotify', [SongController::class, 'spotify']);



//Route::get('/spotify', [SongController::class, 'spotify'])->name('spotify');
//Route::get('/spotify', [SongController::class, 'spotify'])->name('spotify');


//Route::resource('songs', SongController::class);

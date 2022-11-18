<?php

use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResepController;
use App\Models\Like;
use App\Models\Resep;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Li;

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
    return view('user.index',[
        'reseps' => Resep::latest()->paginate(6)->withQueryString(),
        'likes' => Like::all()
    ]);
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('/reseps', ResepController::class)->middleware('auth');
Route::post('/like/add',[LikeController::class, 'addlike'])->middleware('auth');


// Route::get('/show', [ResepController::class, 'show'])->middleware('auth');
// Route::get('/create', [ResepController::class, 'create'])->middleware('auth');

require __DIR__.'/auth.php';

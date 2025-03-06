<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ReservationController;
use App\Http\Model\Category;
use App\Model\User;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/test', function() {
    return view('test');
});
Route::get('/ownerHome', [HouseController::class, 'ownerController']);
Route::post('/houses/create', [HouseController::class, 'store'])->name('houses.create');
Route::get('/test/{page?}/{per_page?}', [HouseController::class, 'index']);
Route::get('/houses/homeUser', [HouseController::class, 'base']);
Route::post('/houses/search', [HouseController::class, 'search']);
Route::get('/house/{id}' , [HouseController::class, 'find']);
Route::get('housesAll',[HouseController::class, 'ownerController']);
Route::post('house/edit',[HouseController::class, 'editHouse']);
Route::post('test/favorite/add/{id}',[HouseController::class, 'addToFavorits']);
Route::get('/admine' , [HouseController::class, 'dashboardAdmine']);
Route::post('house/checkAvailability/{id}',[ReservationController::class, 'checkAvailability']);
Route::post('house/reserve/{id}',[ReservationController::class, 'takeReservations']);



Route::get('/te', function() {
    return view('houseBoocking');
});






require __DIR__.'/auth.php';

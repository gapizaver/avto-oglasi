<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\FavouritesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Ad;
use App\Models\User;
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

Route::get('/', function () {
    return view('landing');
});

Route::get('/search', function () {
    return view("ads.index");
});

Route::get('/results', [AdController::class, "search"])->name("results");


Route::get("/ad/{ad}", function (Ad $ad) {
    return view("ads.ad", [
        "ad" => $ad,
    ]);
});

Route::get('user/{user}', function (User $user) {
    return view("user.user", [
        "user" => $user,
        "ads" => $user->ads,
    ]);
});


// guest
Route::middleware('guest')->group(function () {
    Route::get("/register", [RegisterController::class, "create"]);
    Route::post("/register", [RegisterController::class, "store"]);

    Route::get("/login", [SessionController::class, "create"])->name("login");
    Route::post("/session", [SessionController::class, "store"]);
});



// logged in
Route::middleware('auth')->group(function () {
    Route::get("/createad", [AdController::class, "create"]);
    Route::post("/createad", [AdController::class, "store"]);
    Route::put("/ad/{ad}", [AdController::class, "update"]);
    Route::delete("/ad/{ad}", [AdController::class, "delete"])->middleware("owner");

    Route::get("/my-ads", [AdController::class, "myAds"]);

    Route::get('/edit/{ad}', [AdController::class, "updateView"])->middleware("owner");

    Route::post("/logout", [SessionController::class, "destroy"]);

    Route::get("/fav", [FavouritesController::class, "show"]);
    Route::post("/fav/{ad}", [FavouritesController::class, "store"]);
    Route::delete("/fav/{ad}", [FavouritesController::class, "delete"]);
});

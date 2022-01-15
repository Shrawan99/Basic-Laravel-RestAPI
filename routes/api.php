<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CryptoTrackerController;
use App\Http\Controllers\PetitionCOntroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/petitions', PetitionCOntroller::class);
Route::apiResource('/Authors', AuthorController::class)->only([
    'index', 'show'
]);
Route::apiResource('/cryptotracker', CryptoTrackerController::class);

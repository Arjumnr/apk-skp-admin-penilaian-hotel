<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiResponden;
use App\Http\Controllers\API\ApiPertanyaan;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/get-all-responden', [ApiResponden::class, 'getAllResponden']);
Route::get('/get-all-pertanyaan', [ApiPertanyaan::class, 'getAllPertanyaan']);
Route::post('/add-responden', [ApiResponden::class, 'addResponden']);
// Route::post('/store-bio', [BioController::class, 'storeBio']);

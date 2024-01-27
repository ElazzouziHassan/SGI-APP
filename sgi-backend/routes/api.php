<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EtudiantController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'api'], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});


Route::group(['middleware' => 'jwt.verify'], function () {
    // Get all students
    Route::get('etudiants',[EtudiantController::class, 'index']);
    
    // Get a single student by ID
    Route::get('etudiants/{id}',[EtudiantController::class, 'show']);
    
    // Create a new student
    Route::get('etudiants',[EtudiantController::class, 'store']);
    
    // Update a student by ID
    Route::get('etudiants/{id}',[EtudiantController::class, 'update']);
    
    // Delete a student by ID
    Route::get('etudiants{id}',[EtudiantController::class, 'destroy']);
});

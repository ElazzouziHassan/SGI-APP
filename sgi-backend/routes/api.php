<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BaccalaureatController;
use App\Http\Controllers\DiplomeController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::resource('users', 'UserController');
// Route::resource('feedback', 'FeedbackController');
// Route::resource('documents', 'DocumentController');
// Route::resource('formations', 'FormationController');
// Route::resource('inscriptions', 'InscriptionController');
// Route::resource('baccalaureats', 'BaccalaureatController');
// Route::resource('diplomes', 'DiplomeController');

// Route::group(['middleware' => 'api'], function ($router) {

//     Route::post('login', [AuthController::class, 'login']);
//     Route::post('logout', [AuthController::class, 'logout']);
//     Route::post('refresh', [AuthController::class, 'refresh']);
//     Route::post('me', [AuthController::class, 'me']);

// });


Route::apiResource('users', UserController::class);
Route::apiResource('documents', DocumentController::class);
Route::apiResource('feedbacks', FeedbackController::class);
Route::apiResource('formations', FormationController::class);
Route::apiResource('inscriptions', InscriptionController::class);
Route::apiResource('diplomes', DiplomeController::class);
Route::apiResource('baccalaureats', BaccalaureatController::class);

<?php

use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\BaccalaureatsController;
use App\Http\Controllers\DiplomesController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\InscriptionsController;
use App\Http\Controllers\ServicesEtudiantController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('utilisateurs', UserController::class);
Route::resource('administrateurs', AdministrateurController::class);
Route::resource('etudiants', EtudiantController::class);
Route::resource('services_etudiants', ServicesEtudiantController::class);
Route::resource('feedbacks', FeedbackController::class);
Route::resource('documents', DocumentsController::class);
Route::resource('formations', FormationController::class);
Route::resource('diplomes', DiplomesController::class);
Route::resource('baccalaureats', BaccalaureatsController::class);
Route::resource('inscriptions', InscriptionsController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\GroupController;


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
    return view('vues.index');
});
Route::get('/TableauDeBord', function () {
    return view('vues.pages.samples.Dashboard');
});
Route::get('/Documentation', function () {
    return view('vues.pages.samples.Documentation');
});
Route::get('/Index_Compteur', function () {
    return view('vues.pages.samples.IndexCompteur');
});
Route::get('/Statistiques', function () {
    return view('vues.pages.samples.Statistiques');
});
Route::get('/Suivi_Temps_Reel', function () {
    return view('vues.pages.samples.Suivie');
});

Route::resource('users', UserController::class);

Route::resource('permissions', PermissionController::class);

Route::resource('groups', GroupController::class);

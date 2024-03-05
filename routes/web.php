<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StatController;


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
    if (Auth::check()) {
        return redirect('/TableauDeBord');
    }
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

Route::get('/Suivi_Temps_Reel', function () {
    return view('vues.pages.samples.Suivie');
});





Route::resource('Users', UserController::class);
Route::post('login',[UserController::class,'login']);
Route::get('logout',[UserController::class,'logout']);

Route::resource('Statistiques', StatController::class);


Route::resource('Permissions', PermissionController::class);

Route::resource('Groups', GroupController::class);

Route::get('/login', function () {
    return redirect('/');
});
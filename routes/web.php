<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\userController;
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
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']);
Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']);
Route::post('/update/traitement', [EtudiantController::class,'update_etudiant_traitement']);
Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']);
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class,'ajouter_etudiant_traitement']);
  
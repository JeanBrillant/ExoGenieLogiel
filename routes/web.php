<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EtudiantController;

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
    return view('welcome');
});

Route::get('/acceuil', [EtudiantController::class, 'showAccueil']);

Route::get('/insertion', [EtudiantController::class, 'insertion'])->name('insert');
Route::post('/insertion', [EtudiantController::class, 'insert'])->name('insert');

Route::prefix('/liste')->group(function(){
    Route::get('/', [EtudiantController::class, 'list'])->name('liste_etudiant');
    Route::get('/{e}', [EtudiantController::class, 'modify']);
    Route::put('/{e}/upd', [EtudiantController::class, 'update']);
    Route::delete('/{e}/del', [EtudiantController::class, 'delete']);
});

Route::get('/test', function (){
    return view('test');
});

<?php

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
    return view('padrao.padrao');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix'=>'admin','as'=>'admin.'], function() {
    Route::resource('planos',\App\Http\Controllers\PlanosController::class);
    Route::get('plano/cadnivel/{id}',[\App\Http\Controllers\PlanosController::class,'cadnivel']);
});


Route::get('indicacao/{id}', function ($id) {
    $user = \App\Models\User::where('link', $id)->first();
    $clique = $user->clique + 1;
    $user->fill(['clique' => $clique]);
    $user->save();

    $patrocinador = $user;

    return view('auth.indicacao', compact('patrocinador'));
});

require __DIR__.'/auth.php';

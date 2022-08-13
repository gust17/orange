<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
    return redirect(url('dashboard'));
})->middleware('auth');

Route::get('/dashboard', function () {
    $nome_pagina = 'Dashboard';
    $planos = \App\Models\Planos::all();
    return view('padrao.novopadrao',compact('nome_pagina','planos'));
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

Route::post('indicacao', function (\Illuminate\Http\Request $request) {

    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'telefone' => ['required']
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'telefone' => $request['telefone'],
        'link' => md5($request['email']),
        'quem'=> $request['quem']

    ]);

    event(new Registered($user));

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);

})->name('indicacao');

require __DIR__.'/auth.php';

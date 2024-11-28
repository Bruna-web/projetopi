<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('home');
});

// Rota para exibir o formulário de login
Route::get('/login', function () {
    return view('login'); // Certifique-se de que a view é login.blade.php
})->name('login');

// Rota para processar o login
Route::post('/login', function (Request $request) {
    // Validação dos campos
    $request->validate([
        'userName' => 'required',
        'password' => 'required|min:6',
    ]);

    // Tente autenticar o usuário
    if (Auth::attempt(['cpf' => $request->userName, 'password' => $request->password])) {
        // Se autenticado, redireciona para a página inicial ou outra
        return redirect()->intended('/');
    } else {
        // Se falhar, redireciona de volta para o login com um erro
        return redirect()->route('login')->withErrors(['login_error' => 'Credenciais inválidas.']);
    }
});

Route::get('/registro', function () {
    return view (('registro'));
}) -> name('registro');

Route::get('/home', function () {
    return view (('home'));
}) -> name('home');

Route::get('/login', function () {
    return view (('login'));
}) -> name('login');
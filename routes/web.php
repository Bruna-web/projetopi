<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentoController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/agendamento', [AgendamentoController::class, 'create'])->name('agendamento.create');

Route::post('/agendamento', [AgendamentoController::class, 'store'])->name('agendamento.store');

Route::get('/agendamentoconfirmacao', [AgendamentoController::class, 'confirmacao'])->name('agendamento.confirmacao');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentoController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/agendamento', [AgendamentoController::class, 'create'])->name('agendamento');
Route::get('/confirmacao', [AgendamentoController::class, 'confirmacao'])->name('confirmacao');
Route::post('/agendamento', [AgendamentoController::class, 'store'])->name('agendamento.store');

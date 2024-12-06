<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('home');
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

Route::post('/agendamento/processar', function (\Illuminate\Http\Request $request) {
    return 'Processamento do agendamento realizado com sucesso!';
})->name('agendamento.processar');


Route::get('/agendamento', function () {
    return view('agendamento');
})->name('agendamento');

use Illuminate\Support\Facades\Mail;
use App\Mail\AgendamentoConfirmacao;

Route::get('/agendamento', function () {
    return view('agendamento');
})->name('agendamento');

// Rota para processar o agendamento via POST
Route::post('/agendamento', function (Request $request) {
    try {
        // Validação dos dados recebidos
        $request->validate([
            'nome' => 'required|string',
            'cpf' => 'required|string',
            'telefone' => 'required|string',
            'especialidade' => 'required|string',
            'medico' => 'required|string',
            'data' => 'required|date',
            'hora' => 'required|string',
        ]);

        // Obtenção dos dados do formulário
        $nome = $request->input('nome');
        $email = $request->input('email'); // Adicionamos o email aqui, para enviar a confirmação
        $especialidade = $request->input('especialidade');
        $medico = $request->input('medico');
        $data = $request->input('data');
        $hora = $request->input('hora');
        $telefone = $request->input('telefone');
        $local = "Posto de Saúde Local"; // Pode ser alterado conforme a necessidade

        // Envio de e-mail de confirmação
        // Use o Laravel Mail Facade para enviar um e-mail com base em uma Mailable

        $mailData = [
            'nome' => $nome,
            'especialidade' => $especialidade,
            'medico' => $medico,
            'data' => $data,
            'hora' => $hora,
            'local' => $local
        ];


        // Resposta de sucesso
        return response()->json([
            'message' => 'Agendamento realizado com sucesso! Você receberá um e-mail de confirmação.',
        ]);
    } catch (\Exception $e) {
        // Captura qualquer erro e retorna uma mensagem de erro genérica
        return response()->json([
            'error' => 'Ocorreu um erro ao realizar o agendamento. Tente novamente mais tarde.',
            'details' => $e->getMessage(), // Adiciona o erro real para depuração
        ], 500);
    }
});

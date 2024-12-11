<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function create()
    {
        return view('agendamento');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'especialidade' => 'required|string',
            'medico' => 'required|string',
            'data' => 'required|date',
            'hora' => 'required|string',
            'nome' => 'required|string',
            'cpf' => 'required|string',
            'telefone' => 'required|string',
        ]);
        $request->session()->put('especialidade', $request->especialidade);
        $request->session()->put('medico', $request->medico);
        $request->session()->put('data', $request->data);
        $request->session()->put('hora', $request->hora);
        $request->session()->put('nome', $request->nome);
        $request->session()->put('cpf', $request->cpf);
        $request->session()->put('telefone', $request->telefone);
        $request->session()->put('posto', $request->posto);
        return redirect()->route('confirmacao');
    }
    public function confirmacao(Request $request)
    {
        if (!$request->session()->has('especialidade')) {
            return redirect()->route('agendamento'); 
        }

        return view('confirmacao'); 
    }
}

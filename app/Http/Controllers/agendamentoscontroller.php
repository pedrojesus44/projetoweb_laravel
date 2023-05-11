<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agendamentos;

class agendamentoscontroller extends Controller
{
    //
    public function index() {
        $agendamentos = agendamentos::all();
        return view('consulta', ['agendamentos' => $agendamentos]);
    }

    public function store(Request $request) {
        $agendamentos = new agendamentos();
        $agendamentos->nome = $request->nome;
        $agendamentos->telefone = $request->telefone;
        $agendamentos->origem = $request->origem;
        $agendamentos->data_contato = $request->data_contato;
        $agendamentos->observacao = $request->observacao;
        $agendamentos->save();

        return redirect('/consulta');
    }

    public function delete($id) {
        $agendamentos = agendamentos::findOrFail($id);
        $agendamentos->delete();

        return redirect('/consulta');

    }
}

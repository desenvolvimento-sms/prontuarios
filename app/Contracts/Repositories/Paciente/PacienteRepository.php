<?php

namespace App\Contracts\Repositories\Paciente;

use App\Interfaces\PacienteRepositoryInterface;
use App\Models\Paciente;

class PacienteRepository implements PacienteRepositoryInterface
{
        //salvar
    public function store(Request $request) {
        $paciente = new Paciente;

        $paciente->nome_completo = $request->nome_completo;
        $paciente->nome_mae = $request->nome_mae;
        $paciente->nome_pai = $request->nome_pai;
        $paciente->cns = $request->cns;
        $paciente->genero = $request->genero;
        $paciente->data_nasc = $request->data_nasc;
        $paciente->cpf = $request->cpf;
        $paciente->contato = $request->contato;

        $paciente->save();
    }

        //atualizar
    public function update($id, array $dado)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->update($dado);
        return $paciente;
    }

        //porld
    public function porld($id)
    {
        return Paciente::findOrFail($id);
    }
} 

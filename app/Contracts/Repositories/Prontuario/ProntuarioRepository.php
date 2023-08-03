<?php

namespace App\Contracts\Repositories\Prontuario;

use App\Interfaces\ProntuarioRepositoryInterface;
use App\Models\Prontuario;

class ProntuarioRepository implements ProntuarioRepositoryInterface
{
        //salvar
    public function store(Request $request) {
        $prontuario = new Prontuario;

        $prontuario->num_prontuario = $request->num_prontuario;
        $prontuario->observacoes = $request->observacoes;
        $prontuario->dt_criacao = $request->dt_criacao;
        $prontuario->dt_atualizacao = $request->dt_atualizacao;
        $prontuario->dt_exclusao = $request->dt_exclusao;
        $prontuario->id_paciente = $request->id_paciente;

        $prontuario->save();
    }

        //atualizar
    public function update($id, array $dado)
    {
        $prontuario = Prontuario::findOrFail($id);
        $prontuario->update($dado);
        return $prontuario;
    }

        //porld
    public function porld($id)
    {
        return Prontuario::findOrFail($id);
    }

        //remover
    public function softDelete($id)
    {
        $prontuario = Prontuario::find($id);
        $prontuario->delete();}
} 
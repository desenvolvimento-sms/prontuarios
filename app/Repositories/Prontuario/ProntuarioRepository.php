<?php

namespace App\Repositories\Prontuario;

use App\Contracts\Repositories\Prontuario\ProntuarioRepositoryInterface;
use App\Models\Prontuario;

class ProntuarioRepository implements ProntuarioRepositoryInterface
{
    public function getAllProntuarios()
    {
        return Prontuario::all();
    }

    public function getProntuarioById($id)
    {
        return Prontuario::findOrFail($id);
    }

    public function softDelete($id)
    {
        $prontuario = Prontuario::find($id);
        return $prontuario->delete($id);}

    public function createProntuario(string $num_prontuario, string $observacoes, int $criado_por, int $id_paciente)
    {
        return Prontuario::create([
            'num_prontuario' => $num_prontuario,
            'observacoes' => $observacoes,
            'criado_por' => $criado_por,
            'id_paciente' => $id_paciente,
            ]);
    }

    public function updateProntuario($id, string $num_prontuario, string $observacoes, int $criado_por, int $id_paciente)
    {
        $prontuario = Prontuario::find($id);
        return $prontuario->update([
            'num_prontuario' => $num_prontuario,
            'observacoes' => $observacoes,
            'criado_por' => $criado_por,
            'id_paciente' => $id_paciente,
            ]);
    }
} 
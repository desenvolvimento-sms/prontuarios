<?php

namespace App\Repositories\Prontuario;

use App\Contracts\Repositories\ProntuarioRepositoryInterface;
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
        $prontuario->delete();}

    public function createProntuario(array $dados_pront)
    {
        return Prontuario::create($dados_pront);
    }

    public function updateProntuario($id, array $dados_novos)
    {
        return Prontuario::whereId($id)->update($dados_novos);
    }
} 
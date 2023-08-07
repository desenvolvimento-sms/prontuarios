<?php

namespace App\Repositories\Paciente;

use App\Contracts\Repositories\Paciente\PacienteRepositoryInterface;
use App\Models\Paciente;
use PhpParser\Node\Stmt\Return_;

class PacienteRepository implements PacienteRepositoryInterface
{
    public function getAllPacientes()
    {
        return Paciente::all();
    }
    public function getPacienteById($id)
    {
        return Paciente::findOrFail($id);
    }
    public function deletePaciente($id)
    {
        $paciente = Paciente::find($id);
        return $paciente->delete($id);
    }
    public function createPaciente(array $dados)
    {
        return Paciente::create($dados);
    }
    public function updatePaciente($id, array $dados_novos)
    {
        $paciente =  Paciente::find($id);
        return $paciente->update($dados_novos);
    }
} 
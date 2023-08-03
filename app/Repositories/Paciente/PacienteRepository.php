<?php

namespace App\Repositories\Paciente;

use App\Contracts\Repositories\PacienteRepositoryInterface;
use App\Models\Paciente;

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
        Paciente::destroy($id);
    }
    public function createPaciente(array $dados)
    {
        return Paciente::create($dados);
    }
    public function updatePaciente($id, array $dados_novos)
    {
        return Paciente::whereId($id)->update($dados_novos);
    }
} 
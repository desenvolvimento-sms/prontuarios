<?php

namespace App\Repositories\Paciente;

use App\Contracts\Repositories\Paciente\PacienteRepositoryInterface;
use App\Models\Paciente;
use DateTime;
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
    public function createPaciente(string $nome_completo, string $nome_mae, string $nome_pai, string $cns, string $genero, DateTime $data_nasc, string $cpf)
    {
        return Paciente::create([
        'nome_completo' => $nome_completo,
        'nome_mae' => $nome_mae,
        'nome_pai' => $nome_pai,
        'cns' => $cns,
        'genero' => $genero,
        'data_nasc' => $data_nasc,
        'cpf' => $cpf,
        ]);
    }
    public function updatePaciente($id, string $nome_completo, string $nome_mae, string $nome_pai, string $cns, string $genero, DateTime $data_nasc, string $cpf)
    {
        $paciente =  Paciente::find($id);
        return $paciente->update(['
        nome_completo' => $nome_completo,
        'nome_mae' => $nome_mae,
        'nome_pai' => $nome_pai,
        'cns' => $cns,
        'genero' => $genero,
        'data_nasc' => $data_nasc,
        'cpf' => $cpf,
        ]);
    }
} 
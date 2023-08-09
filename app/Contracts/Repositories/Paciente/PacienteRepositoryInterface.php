<?php

namespace App\Contracts\Repositories\Paciente;

use DateTime;

interface PacienteRepositoryInterface
{
    public function getAllPacientes();
    public function getPacienteById($id);
    public function deletePaciente($id);
    public function createPaciente(string $nome_completo, string $nome_mae, string $nome_pai, string $cns, string $genero, DateTime $data_nasc, string $cpf);
    public function updatePaciente($id, string $nome_completo, string $nome_mae, string $nome_pai, string $cns, string $genero, DateTime $data_nasc, string $cpf);
}
<?php

namespace App\Contracts\Repositories;

interface PacienteRepositoryInterface
{
    public function getAllPacientes();
    public function getPacienteById($id);
    public function deletePaciente($id);
    public function createPaciente(array $dados);
    public function updatePaciente($id, array $dados_novos);
}
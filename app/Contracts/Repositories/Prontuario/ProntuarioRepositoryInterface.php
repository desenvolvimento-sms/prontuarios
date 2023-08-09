<?php

namespace App\Contracts\Repositories\Prontuario;

interface ProntuarioRepositoryInterface
{
    public function getAllProntuarios();
    public function getProntuarioById($id);
    public function createProntuario(string $num_prontuario, string $observacoes, int $criado_por, int $id_paciente);
    public function updateProntuario(int $id, string $num_prontuario, string $observacoes, int $criado_por, int $id_paciente);
    public function softDelete(int $id);
}
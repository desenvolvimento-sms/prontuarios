<?php

namespace App\Contracts\Repositories;

interface ProntuarioRepositoryInterface
{
    public function getAllProntuarios();
    public function getProntuarioById($id);
    public function createProntuario(array $dados_pront);
    public function updateProntuario(int $id, array $dados_novos);
    public function softDelete(int $id);
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Repositories\Prontuario\ProntuarioRepository;
use app\Services\ProntuarioService;


class ProntuarioController extends Controller 
{
    private $service;
    private $repository;

    public function __construct(ProntuarioService $construtorService, ProntuarioRepository $construtorRepositorio)
    {
        $this->service = $construtorService;
        $this->repository = $construtorRepositorio;
    }

    public function salvar(Request $request)
    {
        $this->service->store($request);
    }

    public function atualizar($id, Request $request){
        $this->service->update($id, $request);
    }
    public function remover($id){
        $this->repository->softDelete($id);
    }
}
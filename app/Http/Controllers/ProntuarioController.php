<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Prontuario\ProntuarioRepository;
use App\Services\ProntuarioService;


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
       return $this->service->store($request);
    }

    public function atualizar($id, Request $request){
        return $this->service->update($id, $request);
    }
    public function remover($id){
        return $this->repository->softDelete($id);
    }
}
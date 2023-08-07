<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use App\Repositories\Paciente\PacienteRepository;
use App\Repositories\Prontuario\ProntuarioRepository;

class ProntuarioService extends ServiceProvider
{

    private $paciente;

    private $prontuario;

    //constutor

    public function __construct(PacienteRepository $construtorPaciente, ProntuarioRepository $constutorProntuario)
    {
        $this->paciente = $construtorPaciente;
        $this->prontuario = $constutorProntuario;
    }


    //salvar

    public function store(Request $request){


        $criacaoPaciente = $this->paciente->createPaciente($request->all());

        return $this->prontuario->createProntuario($request->all(), $criacaoPaciente->id);

        
    }

    //realizar alteração

    public function update($id, Request $request) {

        $this->paciente->updatePaciente($id, $request->all());

        return $this->prontuario->updateProntuario($id, $request->all());
        
    }
}

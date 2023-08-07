<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use App\Repositories\Paciente\PacienteRepository;
use app\Repositories\Prontuario\ProntuarioRepository;

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

        $this->prontuario->createProntuario($request->all(), $criacaoPaciente->id);

        
    }

    //realizar alteração

    public function update($id, Request $request) {

        $atualizacaoPaciente = $this->paciente->updatePaciente($id, $request->all());

        $this->prontuario->updateProntuario($id, $atualizacaoPaciente->id, $request->all());
        
    }
}

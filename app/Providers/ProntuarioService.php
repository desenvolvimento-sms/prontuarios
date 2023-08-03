<?php

namespace App\Providers;

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
        $this->prontuario->createProntuario($request);

        $this->paciente->createPaciente($request);
    }

    //realizar alteração

    public function update($id, Request $dados) {
        $this->prontuario->updateProntuario($id, $dados);

        $this->paciente->updatePaciente($id, $dados);
    }
}

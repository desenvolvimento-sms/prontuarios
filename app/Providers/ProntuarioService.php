<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use app\Contracts\Repositories\Paciente\PacienteRepository;
use app\Contracts\Repositories\Prontuario\ProntuarioRepository;

class ProntuarioService extends ServiceProvider
{

    protected $paciente;

    protected $prontuario;

    //constutor

    public function __construct(PacienteRepository $construtorPaciente, ProntuarioRepository $constutorProntuario)
    {
        $this->paciente = $construtorPaciente;
        $this->prontuario = $constutorProntuario;
    }


    //salvar

    public function store(Request $request){
        $this->prontuario->store($request);

        $this->paciente->store($request);
    }

    //realizar alteração

    public function update($id, Request $dados) {
        $this->prontuario->update($id, $dados);

        $this->paciente->update($id, $dados);
    }
}

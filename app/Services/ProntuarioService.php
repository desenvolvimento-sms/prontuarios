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

        $nome_completo = $request->input('nome_completo');
        $nome_mae = $request->input('nome_mae');
        $nome_pai = $request->input('nome_pai');
        $cns = $request->input('cns');
        $genero = $request->input('genero');
        $data_nasc = $request->input('data_nasc');
        $cpf = $request->input('cpf');
        
        $num_prontuario = $request->input('num_prontuario');
        $observacoes = $request->input('observacoes');
        $criado_por = $request->input('criado_por');
        $id_paciente = $request->input('id_paciente');


        $criacaoPaciente = $this->paciente->createPaciente($nome_completo, $nome_mae, $nome_pai, $cns, $genero, $data_nasc, $cpf);

        return $this->prontuario->createProntuario($criacaoPaciente->id, $num_prontuario, $observacoes, $criado_por, $id_paciente);

        
    }

    //realizar alteração

    public function update($id, Request $request) {

        $nome_completo = $request->input('nome_completo');
        $nome_mae = $request->input('nome_mae');
        $nome_pai = $request->input('nome_pai');
        $cns = $request->input('cns');
        $genero = $request->input('genero');
        $data_nasc = $request->input('data_nasc');
        $cpf = $request->input('cpf');

        $num_prontuario = $request->input('num_prontuario');
        $observacoes = $request->input('observacoes');
        $criado_por = $request->input('criado_por');
        $id_paciente = $request->input('id_paciente');

        $this->paciente->updatePaciente($id, $nome_completo, $nome_mae, $nome_pai, $cns, $genero, $data_nasc, $cpf);

        return $this->prontuario->updateProntuario($id, $num_prontuario, $observacoes, $criado_por, $id_paciente);
        
    }
}

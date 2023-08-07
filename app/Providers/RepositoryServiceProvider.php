<?php

namespace App\Providers;

use App\Contracts\Repositories\PacienteRepositoryInterface;
use App\Repositories\Paciente\PacienteRepository;
use App\Repositories\Prontuario\ProntuarioRepository;
use Illuminate\Support\ServiceProvider;


 class RepositoryServiceProvider extends ServiceProvider
 {
    public function register(): void
    {
        $this->app->bind(PacienteRepository::class, PacienteRepositoryInterface::class);
    }
 }
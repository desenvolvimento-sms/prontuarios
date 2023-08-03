<?php

use App\Http\Controllers\ProntuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::delete('/prontuarios/{id}', [ProntuarioController::class, 'remover'])->name('prontuarios.remover');
Route::put('/prontuarios/{id}', [ProntuarioController::class, 'atualizar'])->name('prontuarios.atualizar');
Route::post('/prontuarios', [ProntuarioController::class, 'salvar'])->name('prontuarios.salvar');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

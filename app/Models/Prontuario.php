<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prontuario extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'num_prontuario',
        'observacoes',
        'dt_criacao',
        'dt_atualizacao',
        'dt_exclusao',
        'id_paciente'
    ];

    public function paciente(): BelongsTo
    {
        return $this->belongsTo(Paciente::class, 'paciente_id', 'id');
    }
}

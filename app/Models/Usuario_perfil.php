<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usuario_perfil extends Model
{
    use HasFactory;

    protected $table = 'usuario_perfis';

    protected $fillable = [
        'id_perfil',
        'id_usuario',
    ];

    public function perfil(): BelongsTo
    {
        return $this->belongsTo(Perfil::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfis';

    protected $fillable = [
        'nome'
    ];

    public function usuario_perfil(): HasMany
    {
        return $this->hasMany(Ususario_perfil::class, 'id_perfil', 'id');
    }
}

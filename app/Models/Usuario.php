<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    use HasFactory;
    protected $fillable =[
        'nome',
        'email',
        'perfil_usuario',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function perfil()
    {
        return $this->hasOne(Perfil::class, 'perfil_usuario', 'id');
    }

    public function publicacao()
    {
        return $this->hasMany(Publicacao::class, 'usuario_id', 'id');
    }
}

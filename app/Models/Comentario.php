<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;



    public function usuario()
    {
        return $this->hasOne(Usuario::class,'comentario_usuario_id', 'id');
    }

    public function publicacao()
    {
        return $this->hasOne(Publicacao::class,'publicacao_id', 'id');
    }


}

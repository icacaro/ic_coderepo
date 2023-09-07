<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    protected $table = 'publicacao';
    use HasFactory;
    protected $fillable = [
      'postagem',
      'data',
      'tipo_publicacao',
      'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
    }

    public static function getPublicacoes(string|null $search = '')
    {
        return Publicacao::where(function ($query) use ($search){
            if($search){
                $query->where('id', $search);
//                $query->orWhere('data', 'LIKE', "%{$search}%");
            }
        })->get();
    }
}

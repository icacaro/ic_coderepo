<?php

namespace Database\Seeders;

use App\Models\Publicacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publicacao::create([
            'postagem' => 'OSAKPDAOPDcapjmcpoaskjdaPOSDKPOkcsacpoakdapoKApocks SOPKACPOASKPO',
            'tipo_publicacao' => 'postagem inicial do seeder',
            'usuario_id' => '1'
        ]);
    }
}

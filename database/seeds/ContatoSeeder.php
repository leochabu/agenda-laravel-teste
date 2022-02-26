<?php

use App\Contato;
use Illuminate\Database\Seeder;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contato::create([
            'name'      => 'Leandro',
            'email'     => 'leochabu@gmail.com',
            'telefone'  => '2244',
            'usuario_gh'=> 'leochabu',
            'user_id'=> 1
        ]);
    }
}

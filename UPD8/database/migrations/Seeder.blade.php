<?php 

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PessoasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pessoas')->insert([
            'cpf' => Str::random(11),
            'nome' => Str::random(11),
            'data_nascimento' =>  Str::random(10),
            'sexo' =>  Str::random(10),,
            'endereco' =>  Str::random(30),
            'estado' =>  Str::random(20),
            'cidade' =>  Str::random(20),
        ]);

        // Adicione mais dados de exemplo aqui, se necessário.
    }
}










?>
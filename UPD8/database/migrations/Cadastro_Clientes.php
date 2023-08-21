<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


 function up()
{
    Schema::create('clientes', function (Blueprint $table) {
        $table->id();
        $table->string('cpf')->unique();
        $table->string('nome');
        $table->date('data_nascimento');
        $table->string('sexo');
        $table->string('endereco');
        $table->string('estado');
        $table->string('cidade');
        $table->timestamps();
    });
}

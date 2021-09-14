<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaEmpresas extends Migration{
    
    public function up(){
        Schema::create('empresas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('site');
        });
    }
             
    public function down(){
        Schema::drop('empresas');

    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCurriculos extends Migration{
    
    public function up(){
        Schema::create('curriculos', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('empresa_id');
            $table->date('data');
            $table->string('status');
            

            $table->foreign('empresa_id')
                ->references('id')
                ->on('empresas')
                ->onDelete('cascade');
            });
    }

    public function down(){
        Schema::drop('curriculos');
        
    }
}

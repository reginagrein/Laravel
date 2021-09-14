<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model{
    protected $fillable = [
        'data',
        'status'
      
    ];
   public $timestamps = false;

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }
}


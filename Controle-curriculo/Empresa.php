<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model{
    protected $fillable = ['nome', 'site'];
    public $timestamps = false;

    public function curriculos(){
        return $this->hasMany(Curriculo::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    public function moradores() {
        
       return $this->hasMany('App\Moradore');
            
        }
     public function condominio() {
        return $this->belongsTo('App\Condominio');
    }    
    public function visitantes() {
        
       return $this->hasMany('App\Visitante');
            
        }
    public function moradore() {
        return $this->belongsTo('App\Moradore');
    }        
}

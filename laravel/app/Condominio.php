<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    public function moradores() {
        
       return $this->hasMany('App\Moradore');
            
        }
    public function areas() {
        
       return $this->hasMany('App\Area');
            
        } 
    public function visitantes() {
        
       return $this->hasMany('App\Visitante');
            
        } 
    public function unidades() {
        
       return $this->hasMany('App\Unidade');
            
        }      
   
}



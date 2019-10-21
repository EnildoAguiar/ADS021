<?php

namespace App\Http\Controllers;
use App\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
     public function listar(){
        return \App\Reserva::all();
    }
   
    public function criar(){
        
    }
   
    public function editar($id){
        return Reserva::find($id);
    }     
   
    public function remover($id){
        $reserva = Reserva::find($id);
        $reserva->delete();
        return redirect('reserva/listar');
    }
   
    public function salvar(Request $request){
        $reserva = new Reserva();
        
        if ($request->has('id')) {
            $reserva = Reserva::find($id);
        }
        $reserva->status = $request->status;
        $reserva->save();
        
        return redirect('reserva/listar');
        
        }
}

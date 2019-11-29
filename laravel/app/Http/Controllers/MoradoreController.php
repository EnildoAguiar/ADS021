<?php

namespace App\Http\Controllers;
use App\Moradore;
use Illuminate\Http\Request;

class MoradoreController extends Controller
{
     public function listar(){
         return view ('moradore.listar' , ['moradores' => Moradore::paginate(5)]);
    }
   
    public function criar(){
        return view ('moradore.criar');
    }
   
    public function editar($id){
        return Moradore::find($id);
    }     
   
    public function remover($id){
        $moradore = Moradore::find($id);
        $moradore->delete();
        return redirect('moradore/listar');
    }
   
    public function salvar(Request $request){
        $moradore = new Moradore();
        
        if ($request->has('id')) {
            $moradore = Moradore::find($id);
        }
        $moradore->nome = $request->nome;
        $moradore->cpf = $request->cpf;
        $moradore->email = $request->email;
        $moradore->telefone = $request->telefone;
        $moradore->veiculo = $request->veiculo;
        $moradore->placa = $request->placa;
        $moradore->save();
        
        return redirect('moradore/listar');
        
        }
}

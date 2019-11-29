<?php

namespace App\Http\Controllers;
use App\Unidade;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
     public function listar(){
        return view ('unidade.listar' , ['unidades' => Unidade::paginate(5)]);
    }
   
    public function criar(){
        return view ('unidade.criar');
    }
   
    public function editar($id){
        return Unidade::find($id);
    }     
   
    public function remover($id){
        $unidade = Unidade::find($id);
        $unidade->delete();
        return redirect('unidade/listar');
    }
   
    public function salvar(Request $request){
        $unidade = new Unidade();
        
        if ($request->has('id')) {
            $unidade = Unidade::find($id);
        }
        $unidade->numero = $request->numero;
        $unidade->propietario = $request->propietario;
        $unidade->cpf = $request->cpf;
        $unidade->email = $request->email;
        $unidade->telefone = $request->telefone;
        $unidade->save();
        
        return redirect('unidade/listar');
        
        }
}

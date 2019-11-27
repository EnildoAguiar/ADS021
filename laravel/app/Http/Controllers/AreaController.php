<?php

namespace App\Http\Controllers;

use App\Area;
use App\Http\Requests\AreaRequest;
use Illuminate\Http\Request;

class AreaController extends Controller{
    
    public function __construct() {
        //$this->middleware ('auth');
    }
    
    public function listar(){
        return view ('area.listar' , ['areas' => Area::paginate(5)]);
        
    }
   
    public function criar(){
        return view ('area.criar');
    }
   
    public function editar($id){
        return Area::find($id);
    }     
   
    public function remover($id){
        $area = Area::find($id);
        $area->delete();
        return redirect('area/listar');
    }
   
    public function salvar(Request $request){
        $area = new Area();
        
        if ($request->has('id')) {
            $area = Area::find($id);
        }
        $area->area = $request->area;
        $area->situação = $request->situação;
        $area->save();
        
        return redirect('area/listar');
        
        }
}

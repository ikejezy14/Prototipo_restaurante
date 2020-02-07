<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Categoria;

class CategoriasController extends Controller
{
    public function index(){
        
      $categorias = Categoria::all();
      return view('categorias.index', ['categorias' =>$categorias]);
    }

    public  function create(){
        return view('categorias.create');
    }

    public function store(Request $request){

      Categoria::create($request->all());
      return redirect()->route('categoria.index');

    }

    public function edit($id){

      $categoria = Categoria::find($id);
      return view('categorias.edit')->with('categoria',$categoria);

    }

    public function update(Request $request, $id){

      $categoria = Categoria::find($id);
      $datos = array();
      $datos['nom_categoria']=$request->input('nom_categoria');
      $datos['abrev_categoria']=$request->input('abrev_categoria');
      $datos['est_categoria']=$request->input('est_categoria');
      $datos['desc_categoria']=$request->input('desc_categoria');
      $categoria->update($datos);
      return redirect()->route('categoria.index');

    }

    public function delete($id){

      $categoria = Categoria::find($id);
      $categoria->delete();
      return redirect()->route('categoria.index');

    }
}

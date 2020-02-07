<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Proveedor;

class ProveedoresController extends Controller
{
    public function index(){
        
      $proveedores = Proveedor::all();
      return view('proveedores.index', ['proveedores' =>$proveedores]);
    }

    public  function create(){
        return view('proveedores.create');
    }

    public function store(Request $request){

      Proveedor::create($request->all());
      return redirect()->route('proveedor.index');

    }

    public function edit($id){

      $proveedor = Proveedor::find($id);
      return view('proveedores.edit')->with('proveedor',$proveedor);

    }

    public function update(Request $request, $id){

      $proveedor = Proveedor::find($id);
      $datos = array();
      $datos['nom_proveedor']=$request->input('nom_proveedor');
      $datos['tel_proveedor']=$request->input('tel_proveedor');
      $datos['est_proveedor']=$request->input('est_proveedor');
      $proveedor->update($datos);
      return redirect()->route('proveedor.index');

    }

    public function delete($id){

      $proveedor = Proveedor::find($id);
      $proveedor->delete();
      return redirect()->route('proveedor.index');

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Cliente;

class ClientesController extends Controller
{
     public function index(){
        
      $clientes = Cliente::all();
      return view('clientes.index', ['clientes' =>$clientes]);
    }

    public  function create(){
        return view('clientes.create');
    }

    public function store(Request $request){

      Cliente::create($request->all());
      return redirect()->route('cliente.index');

    }

    public function edit($id){

      $cliente = Cliente::find($id);
      return view('clientes.edit')->with('cliente',$cliente);

    }

    public function update(Request $request, $id){

      $cliente = Cliente::find($id);
      $datos = array();
      $datos['nombre']=$request->input('nombre');
      $datos['ape_paterno']=$request->input('ape_paterno');
      $datos['ape_materno']=$request->input('ape_materno');
      $datos['direccion']=$request->input('direccion');
      $datos['telefono']=$request->input('telefono');
      $cliente->update($datos);
      return redirect()->route('cliente.index');

    }

    public function delete($id){

      $cliente = Cliente::find($id);
      $cliente->delete();
      return redirect()->route('cliente.index');

    }

}

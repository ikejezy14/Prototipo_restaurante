<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Empleado;
use App\Modelos\Local;
use Illuminate\Support\Facades\DB;

class EmpleadosController extends Controller
{
    public function index(){
        
      $empleados = DB::table('empleados')
      ->join('locales','locales.id','=','empleados.cod_local')
      ->select('locales.nom_local','empleados.id','empleados.nom_empleado','empleados.cargo_empleado','empleados.est_empleado')
      ->get();
      return view('empleados.index', ['empleados' =>$empleados]);
    }

    public  function create(){

      $locales = Local::all();
      $empleados=  Empleado::all();
      return view('empleados.create')->with('locales', $locales);
    }

    public function store(Request $request){

      Empleado::create($request->all());
      return redirect()->route('empleado.index');

    }

    public function edit($id){
      
      $locales = Local::all();
      $empleado = Empleado::find($id);
      return view('empleados.edit')->with('empleado',$empleado)->with('locales', $locales);

    }

    public function update(Request $request, $id){

      $empleados = Empleado::find($id);
      $datos = array();
      $datos['id_local']=$request->input('id_local');
      $datos['nom_empleado']=$request->input('nom_empleado');
      $datos['cargo_empleado']=$request->input('cargo_empleado');
      $datos['est_empleado']=$request->input('est_empleado');
      $empleados->update($datos);
      return redirect()->route('empleado.index');

    }

    public function delete($id){

      $empleado = Empleado::find($id);
      $empleado->delete();
      return redirect()->route('empleado.index');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Local;

class LocalesController extends Controller
{
     public function index(){
        
      $locales = Local::all();
      return view('locales.index', ['locales' =>$locales]);
    }

    public  function create(){
        return view('locales.create');
    }

    public function store(Request $request){

      Local::create($request->all());
      return redirect()->route('local.index');

    }

    public function edit($id){

      $local = Local::find($id);
      return view('locales.edit')->with('local',$local);

    }

    public function update(Request $request, $id){

      $local = Local::find($id);
      $datos = array();
      $datos['nom_local']=$request->input('nom_local');
      $datos['dir_local']=$request->input('dir_local');
      $local->update($datos);
      return redirect()->route('local.index');

    }

    public function delete($id){

      $local = Local::find($id);
      $local->delete();
      return redirect()->route('local.index');

    }

}

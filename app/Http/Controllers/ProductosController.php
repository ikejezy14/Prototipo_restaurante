<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Producto;
use App\Modelos\Proveedor;
use App\Modelos\Categoria;
use Illuminate\Support\Facades\DB;
use App;

class ProductosController extends Controller
{
     public function index(){
        
      $productoos = DB::table('productoos')
      ->select('productoos.nombre_producto','productoos.id','productoos.precio')
      ->get();
      return view('productos.index', ['productoos' =>$productoos]);
    }

    public  function create(){

      $productoos = App\Productoo::all();

      return view('productos.create')->with('productoos', $productoos);
    }

    public function store(Request $request){

      App\Productoo::create($request->all());
      return redirect()->route('producto.index');

    }

    public function edit($id){
      
      $productoo = App\Productoo::find($id);
      return view('productos.edit')->with('productoo',$productoo);

    }

    public function update(Request $request, $id){

      $productoos = App\Productoo::find($id);
      $datos = array();
      $datos['id']=$request->input('id');
      $datos['nombre_producto']=$request->input('nombre_producto');
      $datos['precio']=$request->input('precio');
      $productoos->update($datos);
      return redirect()->route('producto.index');

    }

    public function delete($id){

      $productoo = App\Productoo::find($id);
      $productoo->delete();
      return redirect()->route('producto.index');

    }
}

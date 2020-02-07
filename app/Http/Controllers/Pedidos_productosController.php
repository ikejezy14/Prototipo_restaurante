<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Pedido;
use App\Modelos\Producto;
use App\Modelos\Pedido_producto;
use Illuminate\Support\Facades\DB;

class Pedidos_productosController extends Controller
{
    public function index(){
        
      $pedidos_productos = DB::table('pedidos_productos')
      ->join('productos','productos.id','=','pedidos_productos.cod_producto')
      ->join('pedidos','pedidos.id','=','pedidos_productos.cod_pedido')
      ->select('productos.nom_producto','pedidos_productos.id','pedidos.monto_pedido')
      ->get();
      return view('pedidos_productos.index', ['pedidos_productos' =>$pedidos_productos]);
    }

    public  function create(){

      $pedidos = Pedido::all();
      $productos = Producto::all();
      $pedidos_productos=  Pedido::all();
      return view('pedidos_productos.create')->with('pedidos', $pedidos)->with('productos', $productos);
    }

    public function store(Request $request){

      Pedido_producto::create($request->all());
      return redirect()->route('pedido_producto.index');

    }

    public function edit($id){
      
      $pedidos = Pedido::all();
      $productos = Producto::all();
      $pedido_producto = Pedido_producto::find($id);
      return view('pedidos_productos.edit')->with('pedido_producto',$pedido_producto)->with('pedidos', $pedidos)->with('productos', $productos);

    }

    public function update(Request $request, $id){

      $pedidos_productos = Pedido::find($id);
      $datos = array();
      $datos['id_pedido']=$request->input('id_pedido');
      $datos['id_producto']=$request->input('id_producto');
      $pedidos_productos->update($datos);
      return redirect()->route('pedido_producto.index');

    }

    public function delete($id){

      $pedido_producto = Pedido_producto::find($id);
      $pedido_producto->delete();
      return redirect()->route('pedido_producto.index');

    }
}

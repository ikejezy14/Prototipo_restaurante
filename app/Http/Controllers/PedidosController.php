<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Empleado;
use App\Modelos\Cliente;
use App\Modelos\Pedido;
use App;
use Illuminate\Support\Facades\DB;

class PedidosController extends Controller
{
    public function index(){
        
      $pedidoos = DB::table('pedidoos')
      ->join('productoos','productoos.id','=','pedidoos.id_producto')
      ->select('productoos.nombre_producto','productoos.precio','pedidoos.id','pedidoos.nom_apellido','pedidoos.direccion','pedidoos.telefono','pedidoos.cantidad')
      ->get();
      return view('pedidos.index', ['pedidoos' =>$pedidoos]);
    }

    public  function create(){
      $Pedidoos = App\Pedidoo::all();
      $Productoos = App\Productoo::all();
      return view('pedidos.create')->with('Pedidoos', $Pedidoos)->with('Productoos', $Productoos);
    }

    public function store(Request $request){

      App\Pedidoo::create($request->all());


      return redirect()->route('pedido.index');

    }

    /*public function edit($id){
      
      $empleados = Empleado::all();
      $clientes = Cliente::all();
      $pedido = Pedido::find($id);
      return view('pedidos.edit')->with('pedido',$pedido)->with('empleados', $empleados)->with('clientes', $clientes);

    }

    public function update(Request $request, $id){

      $pedidos = Pedido::find($id);
      $datos = array();
      $datos['id_empleado']=$request->input('id_empleado');
      $datos['id_cliente']=$request->input('id_cliente');
      $datos['fecha_pedido']=$request->input('fecha_pedido');
      $datos['monto_pedido']=$request->input('monto_pedido');
      $datos['desc_pedido']=$request->input('desc_pedido');
      $pedidos->update($datos);
      return redirect()->route('pedido.index');

    }*/

    public function delete($id){

      $pedidoo = App\Pedidoo::find($id);
      $pedidoo->delete();
      return redirect()->route('pedido.index');

    }
}

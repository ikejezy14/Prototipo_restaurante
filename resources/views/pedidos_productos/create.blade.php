@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading" style="text-align: center;">Registro de Pedidos-Productos</div>
              <div class="panel-body">
   <form class="form-horizontal" role="form" method="POST" action="{{ route('pedido_producto.store') }}">
    <div class="box-body">
      <input type="hidden" name="_token" value="{{ csrf_token()}}">
      <div class="form-group">
        <label for="cod_pedido" class="col-sm-2 control-label">Precio</label>
        <div class="col-sm-10">
          <select id="cod_pedido" name="cod_pedido" class="form-control">
           @foreach($pedidos as $pedido)
            <option value="{{ $pedido->id }}"> {{ $pedido->monto_pedido }} </option>
           @endforeach
         </select>
        </div>
      </div> 
      <div class="form-group">
        <label for="cod_producto" class="col-sm-2 control-label">Nom_producto</label>
        <div class="col-sm-10">
          <select id="cod_producto" name="cod_producto" class="form-control">
           @foreach($productos as $producto)
            <option value="{{ $producto->id }}"> {{ $producto->nom_producto }} </option>
           @endforeach
         </select>
        </div>
      </div> 
    <div class="panel-footer">
      <a href="{{ route('pedido_producto.index') }}" class="btn btn-default btn-sm btn-addon"><i class=""></i>cancelar</a>
      <button type="submit" class="btn btn-info pull-right">guardar</button>
    </div>
   </form>
  </div>
  </div>
  </div>
  </div>
  </div>
            
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading" style="text-align: center">Registro de Pedidos</div>
              <div class="panel-body">
   <form class="form-horizontal" role="form" method="POST" action="{{ route('pedido.update',['id' =>$pedido->id]) }}">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token()}}">
    <div class="box-body">
      <div class="form-group">
        <label for="cod_empleado" class="col-sm-2 control-label">Cod_empleado</label>
        <div class="col-sm-10">
          <select id="cod_empleado" name="cod_empleado" class="form-control">
           @foreach($empleados as $empleado)
           @if($empleado->id==$pedido->cod_empleado)
            <option value="{{ $empleado->id }}" selected> {{ $empleado->nom_empleado }} </option>
            @endif
           @endforeach
         </select>
        </div>
      </div>  
      <div class="form-group">
        <label for="cod_cliente" class="col-sm-2 control-label">Cod_cliente</label>
        <div class="col-sm-10">
          <select id="cod_cliente" name="cod_cliente" class="form-control">
           @foreach($clientes as $cliente)
           @if($cliente->id==$pedido->cod_cliente)
            <option value="{{ $cliente->id }}" selected> {{ $cliente->nombre }} </option>
            @endif
           @endforeach
         </select>
        </div>
      </div>  
      <div class="form-group">
        <label for="fecha_pedido" class="col-sm-2 control-label">Fecha_pedido</label>
        <div class="col-sm-10">
          <input type="date" name="fecha_pedido" class="form-control" id="fecha_pedido" value="{{ $pedido->fecha_pedido}}" placeholder="Fecha_pedido">
        </div>
      </div> 
      <div class="form-group">
        <label for="monto_pedido" class="col-sm-2 control-label">Monto_pedido</label>
        <div class="col-sm-10">
          <input type="double" name="monto_pedido" class="form-control" id="monto_pedido" value="{{ $pedido->monto_pedido}}" placeholder="Monto_pedido">
        </div>
      </div> 
         <div class="form-group">
        <label for="desc_pedido" class="col-sm-2 control-label">Desc_pedido</label>
        <div class="col-sm-10">
          <input type="text" name="desc_pedido" class="form-control" id="desc_pedido" value="{{ $pedido->desc_pedido}}" placeholder="Marca">
        </div>
      </div>
    <div class="panel-footer">
      <a href="{{ route('pedido.index') }}" class="btn btn-default btn-sm btn-addon"><i class=""></i>cancelar</a>
      <button type="submit" class="btn btn-info pull-right">actualizar</button>
    </div>
   </form>
  </div>
            
@endsection

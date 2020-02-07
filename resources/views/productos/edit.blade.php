@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading" style="text-align: center">Registro de Productos</div>
              <div class="panel-body">
   <form class="form-horizontal" role="form" method="POST" action="{{ route('producto.update',['id' =>$productoo->id]) }}">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token()}}">
    <div class="box-body">

       
<div class="form-group">
        <label for="nombre_producto" class="col-sm-2 control-label">Producto</label>
        <div class="col-sm-10">
          <input type="text" name="nombre_producto" class="form-control" id="nombre_producto" placeholder="Nombre del Producto" required>
        </div>
      </div> 


      <div class="form-group">
        <label for="precio" class="col-sm-2 control-label">Precio</label>
        <div class="col-sm-10">
          <input type="integer" name="precio" class="form-control" id="precio" placeholder="Precio" required>
        </div>
      </div> 
      </div> 

    <div class="panel-footer">
      <a href="{{ route('producto.index') }}" class="btn btn-warning btn-sm btn-addon"><i class=""></i>cancelar</a>
      <button type="submit" class="btn btn-info pull-right">Actualizar Producto</button>
    </div>
   </form>
  </div>
            
@endsection

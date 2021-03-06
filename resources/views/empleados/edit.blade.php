@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading" style="text-align: center">Registro de Empleados</div>
              <div class="panel-body">
   <form class="form-horizontal" role="form" method="POST" action="{{ route('empleado.update',['id' =>$empleado->id]) }}">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token()}}">
    <div class="box-body">
      <div class="form-group">
        <label for="cod_local" class="col-sm-2 control-label">Cod_local</label>
        <div class="col-sm-10">
          <select id="cod_local" name="cod_local" class="form-control">
           @foreach($locales as $local)
           @if($local->id==$empleado->cod_local)
            <option value="{{ $local->id }}" selected> {{ $local->nom_local }} </option>
            @endif
           @endforeach
         </select>
        </div>
      </div>  
      <div class="form-group">
        <label for="nom_empleado" class="col-sm-2 control-label">Nom_empleado</label>
        <div class="col-sm-10">
          <input type="text" name="nom_empleado" class="form-control" id="nom_empleado" value="{{ $empleado->nom_empleado}}" placeholder="Nom_empleado">
        </div>
      </div> 
      <div class="form-group">
        <label for="cargo_empleado" class="col-sm-2 control-label">Cargo_empleado</label>
        <div class="col-sm-10">
          <input type="text" name="cargo_empleado" class="form-control" id="cargo_empleado" value="{{ $empleado->cargo_empleado}}" placeholder="Abrev_producto">
        </div>
      </div> 
      <div class="form-group">
       <label for="est_empleado" class="col-lg-2 control-label">Estado</label>
       <div class="col-lg-10">
        <label class="radio-inline">
          @if($empleado->est_empleado=="activo")
         <input type="radio" name="est_empleado" id="est_empleado" value="activo" checked> Activo
         @else
         <input type="radio" name="est_empleado" id="est_empleado" value="activo"> Activo
         @endif
        </label>
        <label class="radio-inline">
           @if($empleado->est_empleado=="inactivo")
         <input type="radio" name="est_empleado" id="est_empleado" value="inactivo" checked> Inactivo
         @else
         <input type="radio" name="est_empleado" id="est_empleado" value="inactivo"> Inactivo
          @endif
        </label>
       </div>
      </div> 
    <div class="panel-footer">
      <a href="{{ route('empleado.index') }}" class="btn btn-default btn-sm btn-addon"><i class=""></i>cancelar</a>
      <button type="submit" class="btn btn-info pull-right">actualizar</button>
    </div>
   </form>
  </div>
            
@endsection

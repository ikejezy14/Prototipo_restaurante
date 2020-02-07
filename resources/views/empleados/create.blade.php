@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading" style="text-align: center;">Registro de Empleado</div>
              <div class="panel-body">
   <form class="form-horizontal" role="form" method="POST" action="{{ route('empleado.store') }}">
    <div class="box-body">
      <input type="hidden" name="_token" value="{{ csrf_token()}}">
      <div class="form-group">
        <label for="cod_local" class="col-sm-2 control-label">Cod_local</label>
        <div class="col-sm-10">
          <select id="cod_local" name="cod_local" class="form-control">
           @foreach($locales as $local)
            <option value="{{ $local->id }}"> {{ $local->nom_local }} </option>
           @endforeach
         </select>
        </div>
      </div> 
      <div class="form-group">
        <label for="nom_empleado" class="col-sm-2 control-label">Nom_empleado</label>
        <div class="col-sm-10">
          <input type="text" name="nom_empleado" class="form-control" id="nom_empleado" placeholder="Nom_empleado">
        </div>
      </div> 
       <div class="form-group">
        <label for="cargo_empleado" class="col-sm-2 control-label">Cargo_empleado</label>
        <div class="col-sm-10">
          <input type="text" name="cargo_empleado" class="form-control" id="cargo_empleado" placeholder="Cargo_empleado">
        </div>
      </div> 
      <div class="form-group">
                       <label for="est_empleado" class="col-lg-2 control-label">Estado</label>
                       <div class="col-lg-10">
                        <label class="radio-inline">
                         <input type="radio" name="est_empleado" id="est_empleado" value="activo"> Activo
                        </label>
                        <label class="radio-inline">
                         <input type="radio" name="est_empleado" id="est_empleado" value="inactivo"> Inactivo
                        </label>
                       </div>
                      </div>
    <div class="panel-footer">
      <a href="{{ route('empleado.index') }}" class="btn btn-default btn-sm btn-addon"><i class=""></i>cancelar</a>
      <button type="submit" class="btn btn-info pull-right">guardar</button>
    </div>
   </form>
  </div>
  </div>
  </div>
  </div>
  </div>
            
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading" style="text-align: center">Registro de Clientes</div>
              <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('cliente.store') }}">
                  <div class="box-body">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    <div class="form-group">
                      <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                      <div class="col-sm-10">
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required="">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label for="ape_paterno" class="col-sm-2 control-label">Ape_paterno</label>
                      <div class="col-sm-10">
                        <input type="text" name="ape_paterno" class="form-control" id="ape_paterno" placeholder="Ape_paterno" required="">
                      </div>
                    </div> 
                      <div class="form-group">
                      <label for="ape_materno" class="col-sm-2 control-label">Ape_materno</label>
                      <div class="col-sm-10">
                        <input type="text" name="ape_materno" class="form-control" id="ape_materno" placeholder="Ape_materno" required="">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label for="direccion" class="col-sm-2 control-label">Direccion</label>
                      <div class="col-sm-10">
                        <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Direccion" required="">
                      </div>
                    </div> 
                     <div class="form-group">
                      <label for="telefono" class="col-sm-2 control-label">Telefono</label>
                      <div class="col-sm-10">
                        <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Telefono">
                      </div>
                    </div>   
                  </div> 
                    <div class="panel-footer">
                      <a href="{{ route('cliente.index') }}" class="btn btn-default btn-sm btn-addon"><i class=""></i>cancelar</a>
                      <button type="submit" class="btn btn-info pull-right">guardar</button>
                    </div>
                   </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
   
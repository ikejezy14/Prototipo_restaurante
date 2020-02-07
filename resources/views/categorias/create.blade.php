@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading" style="text-align: center;">Registro de Categoria</div>
              <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('categoria.store') }}">
                  <div class="box-body">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    <div class="form-group">
                      <label for="nom_categoria" class="col-sm-2 control-label">Nom_categoria</label>
                      <div class="col-sm-10">
                        <input type="text" name="nom_categoria" class="form-control" id="nom_categoria" placeholder="Nom_categoria">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label for="abrev_categoria" class="col-sm-2 control-label">Abrev_categoria</label>
                      <div class="col-sm-10">
                        <input type="text" name="abrev_categoria" class="form-control" id="abrev_categoria" placeholder="Abrev_categoria">
                      </div>
                    </div> 
                      <div class="form-group">
                       <label for="est_categoria" class="col-lg-2 control-label">Estado</label>
                       <div class="col-lg-10">
                        <label class="radio-inline">
                         <input type="radio" name="est_categoria" id="est_categoria" value="activo"> Activo
                        </label>
                        <label class="radio-inline">
                         <input type="radio" name="est_categoria" id="est_categoria" value="inactivo"> Inactivo
                        </label>
                       </div>
                      </div>
                      <div class="form-group">
                      <label for="desc_categoria" class="col-sm-2 control-label">Desc_categoria</label>
                      <div class="col-sm-10">
                        <input type="text" name="desc_categoria" class="form-control" id="desc_categoria" placeholder="Desc_categoria">
                      </div>
                    </div> 
                    <div class="panel-footer">
                      <a href="{{ route('categoria.index') }}" class="btn btn-default btn-sm btn-addon"><i class=""></i>cancelar</a>
                      <button type="submit" class="btn btn-info pull-right">guardar</button>
                    </div>
                   </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
   
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading" style="text-align: center;">Registro de Locales</div>
              <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('local.store') }}">
                  <div class="box-body">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    <div class="form-group">
                      <label for="nom_local" class="col-sm-2 control-label">Nom_local</label>
                      <div class="col-sm-10">
                        <input type="text" name="nom_local" class="form-control" id="nom_local" placeholder="Nom_local">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label for="dir_local" class="col-sm-2 control-label">Dir_local</label>
                      <div class="col-sm-10">
                        <input type="text" name="dir_local" class="form-control" id="dir_local" placeholder="Dir_local" required="">
                      </div>
                    </div> 
                    <div class="panel-footer">
                      <a href="{{ route('local.index') }}" class="btn btn-default btn-sm btn-addon"><i class=""></i>cancelar</a>
                      <button type="submit" class="btn btn-info pull-right">guardar</button>
                    </div>
                   </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
   
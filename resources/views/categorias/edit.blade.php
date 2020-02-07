@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading" style="text-align: center">Registro de Categoria</div>
              <div class="panel-body">
   <form class="form-horizontal" role="form" method="POST" action="{{ route('categoria.update',['id' =>$categoria->id]) }}">
    <input type="hidden" name="_token" value="{{ csrf_token()}}">
    <input type="hidden" name="_method" value="PATCH">
    <div class="box-body">
      <div class="form-group">
        <label for="nom_categoria" class="col-sm-2 control-label">Nom_categoria</label>
        <div class="col-sm-10">
          <input type="text" name="nom_categoria" class="form-control" id="nom_categoria" value="{{ $categoria->nom_categoria}}" placeholder="Nom_categoria">
        </div>
      </div>  
      <div class="form-group">
        <label for="abrev_categoria" class="col-sm-2 control-label">Abrev_categoria</label>
        <div class="col-sm-10">
          <input type="text" name="abrev_categoria" class="form-control" id="abrev_categoria" value="{{ $categoria->abrev_categoria}}" placeholder="  Abrev_categoria">
        </div>
      </div>  
      <div class="form-group">
       <label for="est_categoria" class="col-lg-2 control-label">Est_categoria</label>
       <div class="col-lg-10">
        <label class="radio-inline">
          @if($categoria->est_categoria=="activo")
         <input type="radio" name="est_categoria" id="est_categoria" value="activo" checked> Activo
         @else
         <input type="radio" name="est_categoria" id="est_categoria" value="activo"> Activo
         @endif
        </label>
        <label class="radio-inline">
           @if($categoria->est_categoria=="inactivo")
         <input type="radio" name="est_categoria" id="est_categoria" value="inactivo" checked> Inactivo
         @else
         <input type="radio" name="est_categoria" id="est_categoria" value="inactivo"> Inactivo
          @endif
        </label>
       </div>
      </div>
      <div class="form-group">
        <label for="desc_categoria" class="col-sm-2 control-label">Desc_categoria</label>
        <div class="col-sm-10">
          <input type="text" name="desc_categoria" class="form-control" id="desc_categoria" value="{{ $categoria->desc_categoria}}" placeholder="  Desc_categoria">
        </div>
      </div>  
    <div class="panel-footer">
      <a href="{{ route('categoria.index') }}" class="btn btn-default btn-sm btn-addon"><i class=""></i>cancelar</a>
      <button type="submit" class="btn btn-info pull-right">actualizar</button>
    </div>
   </form>
  </div>
            
@endsection

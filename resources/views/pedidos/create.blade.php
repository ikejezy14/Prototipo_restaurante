@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading" style="text-align: center;">Registro de Pedidos</div>
              <div class="panel-body">
   <form class="form-horizontal" role="form" method="POST" action="{{ route('pedido.store') }}">
    <div class="box-body">
      <input type="hidden" name="_token" value="{{ csrf_token()}}">

      <div class="form-group">
                      <label for="nom_apellido" class="col-sm-2 control-label">Nombre del Cliente</label>
                      <div class="col-sm-10">
                        <input type="text" name="nom_apellido" class="form-control" id="nom_apellido" placeholder="Nombre del Cliente" required>
                      </div>
      </div> 
      <div class="form-group">
                      <label for="direccion" class="col-sm-2 control-label">Direccion del Cliente</label>
                      <div class="col-sm-10">
                        <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Direccion del Cliente" required>
                      </div>
      </div> 


      <div class="form-group">
        <label for="id_producto" class="col-sm-2 control-label">Producto</label>
        <div class="col-sm-10">
          <select id="id_producto" name="id_producto" class="form-control" onchange="setPrecio(event)">
           @foreach($Productoos as $productoo)
            <option id="{{ $productoo->precio}}" value="{{ $productoo->id }}"> {{ $productoo->nombre_producto }} </option>
            
           @endforeach
         </select>
        </div>
      </div> 

       <div class="form-group">
                      <label for="precio" class="col-sm-2 control-label">Precio del Producto</label>
                      <div class="col-sm-10">
                        <input type="integer" name="precio" class="form-control" id="precio"  placeholder="Precio del Producto" disabled> 
                      </div>         
      </div> 
      <div class="form-group">
                      <label for="telefono" class="col-sm-2 control-label">Telefono del Cliente</label>
                      <div class="col-sm-10">
                        <input type="integer" name="telefono" class="form-control" id="telefono" placeholder="Telefono del Cliente" required>
                      </div>
      </div> 

       
      <div class="form-group">
        <label for="cantidad" class="col-sm-2 control-label">Cantidad</label>
        <div class="col-sm-10">
          <select id="cantidad" name="cantidad" class="form-control">
           
            <option value="1"> 1</option>
            <option value="2"> 2</option>
            <option value="3"> 3</option>
            <option value="4"> 4</option>
            <option value="5"> 5</option>
            <option value="6"> 6</option>
            <option value="7"> 7</option>
            <option value="8"> 8</option>
            <option value="9"> 9</option>
            <option value="10"> 10</option>
          
         </select>
        </div>
      </div>  

     

       <div class="panel-footer">
                      <a href="{{ route('pedido.index') }}" class="btn btn-warning btn-sm btn-addon"><i class=""></i>cancelar</a>
                      <button type="submit" class="btn btn-info pull-right">¡Ordenar!</button>
                    </div>
   </form>
  </div>
    </div>
      </div>
        </div>
          </div>
   <script type="text/javascript">
         $(window).on("load",function() {
           
          });
function setPrecio(event) {
  let val=event.target.value;
  for (var i = 0; i<= event.target.length-1; i++) {
      if(val==event.target[i].value){
        $("#precio").val(event.target[i].id);
        break;
      }
    
  }
 
 
}
       </script>         
@endsection
@section('script')

@endsection

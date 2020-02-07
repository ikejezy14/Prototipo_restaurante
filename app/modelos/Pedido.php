<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
   protected $table = 'pedidos';

   protected $fillable = ['cod_empleado','cod_cliente','fecha_pedido','monto_pedido','desc_pedido'];

   protected $hidden = ['create_at', 'updated_up'];
}

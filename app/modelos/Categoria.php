<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
   protected $table = 'categorias';

   protected $fillable = ['nom_categoria','abrev_categoria','est_categoria','desc_categoria'];

   protected $hidden = ['create_at', 'updated_up'];
}

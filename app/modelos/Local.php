<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
   protected $table = 'locales';

   protected $fillable = ['nom_local','dir_local'];

   protected $hidden = ['create_at', 'updated_up'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
  
  // protected $table = 'table_name';

  protected $casts = [
    'toppings' => 'array',
  ];

}

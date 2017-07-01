<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

  protected $table = 'producto';

  protected $fillable = [
      'user_id','title', 'description', 'pricing',
  ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

  protected $table = 'producto';

  protected $fillable = [
      'user_id','title', 'description', 'pricing',
  ];

  public function paypalItem()
  {
    return \Paypalpayment::item()->setName($this->title)
      ->setDescription($this->description)
      ->setCurrency('USD')
      ->setQuantity(1)
      ->setPrice($this->pricing / 100);
  }
  public function scopeLatest($query)
  {
    return $query->orderBy('id','desc');
  }
}

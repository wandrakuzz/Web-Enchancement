<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  protected $table = 'payments';
  protected $primaryKey = 'id';
  public $timestamps = true;

  protected $fillable = [
      'order_id', 'total', 'customer_id','card_number','bank_name'
  ];

  public function order(){
    return $this->belongsTo(Order::class,'order_id');
  }

  public function customer(){
    return $this->belongsTo(User::class,'customer_id');
  }
}

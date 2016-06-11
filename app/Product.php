<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_num', 'product_name', 'price','brand','type','warranty','quantity','image'
    ];

    public function OrderDetail()
    {
      return $this->hasMany(OrderDetail::class, 'product_id');
    }
}

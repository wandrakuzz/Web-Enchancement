<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_num','customer_id', 'staff_id', 'status'
    ];

    public function customer()
    {
      return $this->belongsTo(User::class, 'customer_id');
    }

    public function staff()
    {
      return $this->belongsTo(User::class, 'staff_id');
    }

    public function OrderDetail()
    {
      return $this->hasMany(OrderDetail::class, 'order_id');
    }
}

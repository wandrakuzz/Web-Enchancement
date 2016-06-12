<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customers';
    protected $primaryKey = null;
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','customer_num', 'name', 'gender','phone','email'
    ];

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}

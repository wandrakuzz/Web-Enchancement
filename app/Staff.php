<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = 'staffs';
    protected $primaryKey = null;
    protected $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','staff_num', 'name', 'phone','gender','email'
    ];

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}

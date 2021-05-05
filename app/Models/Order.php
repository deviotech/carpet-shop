<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Areadetail()
    {
        return $this->hasMany('App\Models\AreaDetail','order_id');
    }

    public function products()
    {
        return $this->hasMany('App\Models\MaterialDetail','order_id');
    }


    public function underlay()
    {
        return $this->hasMany('App\Models\Underlay','order_id');
    }

    public function trim()
    {
        return $this->hasMany('App\Models\Trim','order_id');
    }

}

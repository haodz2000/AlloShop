<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_details"; 
    // protected $fillable = [];
    protected $guarded = [];

    public function orders(){
        return $this->belongsTo('App\Model\Order', 'order_id', 'order_id');
    }
    public function products(){
        return $this->belongsTo('App\Model\Product', 'product_id', 'product_id');
    }
}

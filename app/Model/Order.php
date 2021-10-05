<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders"; 
    protected $primaryKey = "order_id";
    // protected $fillable = [];
    protected $guarded = [];

    public function order_details(){
        return  $this->hasMany('App\Model\OrderDetail', 'order_id', 'order_id');
    }
}

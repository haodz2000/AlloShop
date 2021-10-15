<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";
    protected $primaryKey = "customer_id";
    // protected $fillable = []; // chỉ định trường được sử dụng
    protected $guarded = []; //sử dụng tất cả các trường

    //Khởi tạo quan hệ
    public function rating_products(){
        return  $this->hasMany('App\Model\RatingProduct', 'customer_id', 'customer_id');
    }
    public function orders(){
        return  $this->hasMany('App\Model\Order', 'customer_id', 'customer_id');
    }
}

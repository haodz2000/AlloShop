<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = "sizes";
    protected $primaryKey = "size_id";
    protected $fillable = ['size'];
    protected $guarded = [];
    public function product_details(){
        return  $this->hasMany('App\Model\ProductDetail', 'size_id', 'size_id');
    }

    public function rating_products(){
        return  $this->hasMany('App\Model\RatingProduct', 'user_id', 'user_id');
    }
}

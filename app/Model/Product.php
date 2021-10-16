<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $primaryKey = "product_id";
<<<<<<< .merge_file_a12880
=======
    // protected $fillable = ['product_name','slug','category_id','description','url_image','quantity_orderd','price','discount']; //chỉ định các trường sử dụng
    protected $guarded = []; // sử dụng tất cả các trường
>>>>>>> .merge_file_a10968

    protected $fillable = ['product_name','slug','category_id','description',
    'url_image','quantity_orderd','gender','price','discount','status'];
    protected $guarded = [];
    public function rating_products(){
        return  $this->hasMany('App\Model\RatingProduct', 'product_id', 'product_id');
    }
    public function order_details(){
        return  $this->hasMany('App\Model\OrderDetail', 'product_id', 'product_id');
    }
    public function product_details(){
        return  $this->hasMany('App\Model\ProductDetail', 'product_id', 'product_id');
    }
    public function categories(){
        return $this->belongsTo('App\Model\Category', 'category_id', 'category_id');
    }

}

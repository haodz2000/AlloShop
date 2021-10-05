<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = "product_detail"; 
    protected $primaryKey = "product_id";
    // protected $fillable = [];
    protected $guarded = [];

    public function products(){
        return $this->belongsTo('App\Model\Product', 'product_id', 'product_id');
    }
    public function sizes(){
        return $this->belongsTo('App\Model\Size', 'size_id', 'size_id');
    }
    public function colors(){
        return $this->belongsTo('App\Model\Color', 'color_id', 'color_id');
    }
}

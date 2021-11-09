<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingProduct extends Model
{
    protected $table = "rating_products";
    protected $primaryKey = "id";
    // protected $fillable = [];
    protected $guarded = [];

    public function users(){
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }
    public function products(){
        return $this->belongsTo('App\Model\Product', 'product_id', 'product_id');
    }
}

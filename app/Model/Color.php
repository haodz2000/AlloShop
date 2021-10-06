<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = "colors";
    protected $primaryKey = "color_id";
    // protected $fillable = [];
    protected $guarded = [];

    public function product_details(){
        return  $this->hasMany('App\Model\ProductDetail', 'color_id', 'color_id');
    }
}

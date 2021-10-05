<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = "sizes";
    protected $primaryKey = "size_id";
    // protected $fillable = [];
    protected $guarded = [];    

    public function product_details(){
        return  $this->hasMany('App\Model\ProductDetail', 'size_id', 'size_id');
    }
}

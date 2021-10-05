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
}

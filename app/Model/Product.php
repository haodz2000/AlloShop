<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products"; 
    protected $primaryKey = "product_id";
    // protected $fillable = [];
    protected $guarded = [];
}

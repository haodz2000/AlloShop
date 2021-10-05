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
}

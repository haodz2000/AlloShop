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
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "category_id";
    // protected $fillable = ["category_id", "category_name", "description"];
    protected $guarded = [];

    public function products(){
        return  $this->hasMany('App\Model\Product', 'category_id', 'category_id');
    }
}

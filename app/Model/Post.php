<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts"; 
    protected $primaryKey = "post_id";
    protected $fillable = ['title','content','url_image','status','slug'];
    protected $guarded = [];

    public function Users(){
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }
}

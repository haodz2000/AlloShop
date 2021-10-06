<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $primaryKey = "user_id";
    // protected $fillable = [];
    protected $guarded = [];

    public function posts(){
        return  $this->hasMany('App\Model\Post', 'user_id', 'user_id');
    }
}

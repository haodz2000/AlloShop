<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    protected $table = "shippers"; 
    protected $primaryKey = "shipper_id";
    // protected $fillable = [];
    protected $guarded = [];

    public function orders(){
        return  $this->hasMany('App\Model\Order', 'shipper_id', 'shipper_id');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $tabale = 'password_resets';
    protected $fillable = [
        'email',
        'token',
    ];
}

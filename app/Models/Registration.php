<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //
    protected  $table = 'register';
    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password'];
}

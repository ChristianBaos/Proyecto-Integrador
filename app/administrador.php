<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre', 'documento', 'password'];
}

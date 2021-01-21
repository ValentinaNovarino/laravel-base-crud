<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    protected $table = 'dresses';
    protected $fillable = ['type', 'brand', 'price', 'size', 'color', 'description'];
}

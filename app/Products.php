<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
    'id',
    'name',
    'description',
    'content',
    'm_info',
    'recomend',
    'warning',
    'image'.
    'status',
    'created_at',
    'updated_at'];
}


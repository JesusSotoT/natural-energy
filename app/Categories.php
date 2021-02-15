<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    protected $fillable = [
    'id',
    'category_name',
    'slug',
    'created_at',
    'updated_at'];
}

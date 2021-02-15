<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'articles';

    protected $fillable = [
    'id',
    'category_id',
    'title',
    'subheading',
    'content',
    'cover_image',
    'status',
    'created_at',
    'updated_at'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $table = 'books';

    protected $fillable = [

        'title',

        'author',

        'cover_image',

        'price',

        'published_date',

        '_deleted'

    ];

}
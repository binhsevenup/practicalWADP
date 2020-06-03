<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";

    public $fillable = [
        "author_id",
        "title",
        "ISBN",
        "pub_year",
        "available",

    ];

}

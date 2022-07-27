<?php

namespace App\Models;

use Faker\Provider\HtmlLorem;
use Faker\Provider\Lorem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

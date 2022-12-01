<?php

namespace App\Models;

use App\Models\Blog as ModelsBlog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriblog extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function blog()
    {
        return $this->hasMany(blog::class);
    }
}

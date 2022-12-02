<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $guarded = [];


    public function idblog()
    {
        return $this->belongsTo(kategoriblog::class, 'kategori', 'id');
    }
}

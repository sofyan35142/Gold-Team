<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kewirausahaansketsu extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "kewirausahaansketsu";
    protected $guarded = [];
}

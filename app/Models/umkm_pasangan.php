<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class umkm_pasangan extends Model
{
    use HasFactory;
    protected $table = "umkm_pasangan";
    protected $primaryKey = "id";
    protected $guarded = [];
}

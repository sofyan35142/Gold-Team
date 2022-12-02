<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sidestruktur extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "sidestrukturorganisasi";
    protected $guarded = [];
}

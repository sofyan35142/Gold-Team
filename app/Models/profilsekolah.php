<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profilsekolah extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'profilsekolah';
    protected $guarded = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lowongankerja extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $guarded = [];
    protected $table = "lowongankerja";
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modultkr extends Model
{
    use HasFactory;
    protected $table = 'modul_tkrs';
    protected $primaryKey = "id";
    protected $guarded = [];
}

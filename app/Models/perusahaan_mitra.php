<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahaan_mitra extends Model
{
    use HasFactory;
    protected $table = 'perusahaan_mitra';
    protected $primaryKey = "id";
    protected $guarded = [];
}

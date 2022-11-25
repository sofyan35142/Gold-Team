<?php

namespace App\Models;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kakomli extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $guarded = [];
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }
}

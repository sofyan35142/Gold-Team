<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multiple extends Model
{
    use HasFactory;

    protected $table = 'multiuploads';
    protected $primaryKey = 'id';
    protected $fillable = array('filename', 'created_at', 'updated_at');
}

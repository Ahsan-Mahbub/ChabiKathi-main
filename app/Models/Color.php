<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'colors';
    protected $fillable = [
        'color_name',
        'color_code',
    ];
}

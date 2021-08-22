<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'sliders';
    protected $fillable = [
        'slider_name',
        'slider_link',
        'slider_img',
        'slider_name_2',
        'slider_link_2',
        'slider_img_2',
        'slider_name_3',
        'slider_link_3',
        'slider_img_3',
    ];
}

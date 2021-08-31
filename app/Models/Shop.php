<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'shops';
    protected $fillable = [
        'shop_name',
        'brand_id',
        'slug',
    ];
    public function parent(){
        return $this->belongsTo(Brand::class,'brand_id');
    }
}

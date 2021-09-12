<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'brands';
    protected $fillable = [
        'brand_name',
        'slug',
        'shop_id',
        'seller_id',
    ];
    public function parent(){
        return $this->belongsTo(Shop::class,'shop_id');
    }
}

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
        'seller_id',
        'slug',
        'image'
    ];
    public function parent(){
        return $this->belongsTo(Seller::class,'seller_id');
    }
}

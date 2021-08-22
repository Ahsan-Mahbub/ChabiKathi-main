<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable =[
        'product_name',
        'product_slug',
        'product_desc',
        'cat_id',
        'sub_cat_id',
        'price',
        'discount',
        'quantity',
        'brand_id',
        'shop',
        'size_id',
        'weight_id',
        'color_id',
        'product_img',
        'product_img_2',
        'product_img_3'
    ];
    public function parent(){
        return $this->belongsTo(Category::class,'cat_id');
    }
}

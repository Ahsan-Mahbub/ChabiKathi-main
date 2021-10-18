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
        'product_desc',
        'category_id',
        'subcategory_id',
        'subsubcategory_id',
        'price',
        'percentage',
        'discount',
        'discounted_price',
        'brand_id',
        'shop_id',
        'seller_id',
        'product_img',
        'product_img_2',
        'product_img_3',
        'is_veriation'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }
    public function subsubcategory()
    {
        return $this->belongsTo(SubSubCategory::class, 'subsubcategory_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }
    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
    public function stockVariation()
    {
        return $this->hasMany(StockVariation::class);
    }
}

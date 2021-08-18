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
        'cat_id',
        'sub_cat_id',
        'price',
        'discount',
        'quantity',
        'band',
        'shop'
    ];
    public function setMultiProductsAttribute($value)
    {
        $this->attributes['cat_id'] = json_encode($value);
        $this->attributes['sub_cat_id'] = json_encode($value);
    }
}

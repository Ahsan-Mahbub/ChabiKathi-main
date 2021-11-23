<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'stocks';
    protected $fillable = [
        'quantity',
        'seller_id',
        'product_id',
        'perches_code',
        'perches_price',
        'sell_price'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function stockVariation()
    {
        return $this->hasOne(StockVariation::class);
    }
}

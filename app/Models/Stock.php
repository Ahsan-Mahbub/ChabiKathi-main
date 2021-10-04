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
        'product_id',
        'quantity',
        'color_id',
        'size_id',
        'weight_id',
        'seller_id',
        'perches_code',
        'perches_price',
        'sell_price'
    ];

    // public function product()
    // {
    //     return $this->belongsTo(Product::class, 'product_id');
    // }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function size()
    {
        return $this->belongsTo(Size::class);
    }
    public function weight()
    {
        return $this->belongsTo(Weight::class);
    }
}

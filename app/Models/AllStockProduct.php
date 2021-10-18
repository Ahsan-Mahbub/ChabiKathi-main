<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllStockProduct extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'all_stock_products';
    protected $fillable = [
        'stock_id',
        'size_id',
        'color_id',
        'weight_id',
        'perches_price',
        'sell_price',
        'barcode'
    ];
    public function allStock()
    {
        return $this->belongsTo(Stock::class);
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

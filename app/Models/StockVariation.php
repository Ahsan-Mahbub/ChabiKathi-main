<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockVariation extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'stock_variations';
    protected $fillable = [
        'seller_id',
        'stock_id',
        'color_id',
        'size_id',
        'weight_id',
    ];
    public function stock()
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
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

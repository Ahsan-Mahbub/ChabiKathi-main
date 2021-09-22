<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'commissions';
    protected $fillable = [
        'category_id',
        'commission',
    ];
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}

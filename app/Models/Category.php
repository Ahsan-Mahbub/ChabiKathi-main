<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'categories';
    protected $fillable = [
        'category_name',
        'category_priority',
        'slug',
    ];

    // public function category()
    // {
    //     return $this->belongsTo(Category::class, 'category_id');
    // }
    
    public function subcategory(){
        return $this->hasMany(SubCategory::class,'category_id')->where('status',1);
    }

    // HomePage Category Product
    public function product(){
        return $this->hasMany(Product::class);
    }
}

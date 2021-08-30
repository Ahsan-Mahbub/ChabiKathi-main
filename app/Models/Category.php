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

    public function parent(){
        return $this->hasMany(SubCategory::class,'category_id');
    }

    // public function products(){
    //     return $this->hasMany(Product::class);
    // }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // HomePage Category Product
    public function product(){
        return $this->hasMany(Product::class);
    }
}

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
    ];

    public function parent(){
        return $this->hasMany(SubCategory::class,'cat_id');
    }
}

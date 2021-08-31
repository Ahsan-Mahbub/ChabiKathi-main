<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'sub_categories';
    protected $fillable = [
        'sub_category_name',
        'category_id',
        'slug',
    ];
    public function parent(){
        return $this->belongsTo(Category::class,'category_id');
    }
}

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
        'cat_id',
    ];
    public function parent(){
        return $this->belongsTo(Category::class,'cat_id');
    }
}

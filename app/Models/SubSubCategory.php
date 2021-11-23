<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'sub_sub_categories';
    protected $fillable = [
        'sub_sub_category_name',
        'sub_category_id',
        'slug',
    ];

    public function subcategory(){
        return $this->belongsTo(SubCategory::class,'sub_category_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'child_categories';
    protected $fillable = [
        'child_category_name',
        'sub_sub_category_id',
        'slug',
    ];
    public function subsubcategory(){
        return $this->belongsTo(SubSubCategory::class,'sub_sub_category_id');
    }
}

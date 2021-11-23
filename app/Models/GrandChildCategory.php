<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrandChildCategory extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'grand_child_categories';
    protected $fillable = [
        'grand_child_category_name',
        'child_category_id',
        'slug',
    ];
    public function childcategory(){
        return $this->belongsTo(ChildCategory::class,'child_category_id');
    }
}

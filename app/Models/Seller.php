<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $table = 'sellers';
    protected $primaryKey = 'id';
    protected $fillable =[
        'first_name',
        'email',
        'last_name',
        'shop_name',
        'shop_address',
        'contact',
        
     
      
    ];
}

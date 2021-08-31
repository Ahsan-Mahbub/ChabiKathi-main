<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Authenticatable
{
    use HasFactory;
    use Notifiable;
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

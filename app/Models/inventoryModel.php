<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventoryModel extends Model
{


    
    public $table = 'inventory';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [

        'name', 
        'category' ,
        'brand' ,
        'quantity' ,
        'description',
        'tax' ,
        'discount',
        'price' ,
        'status' ,
		'image',
     
    ];
}
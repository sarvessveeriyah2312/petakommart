<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class announcementModel extends Model
{
    public $table = 'announcement';
    use HasFactory;

    protected $fillable = [
        'Title',
        'Content',
     
    ];
}

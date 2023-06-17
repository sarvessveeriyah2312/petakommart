<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rosterModel extends Model
{
    public $table = 'tblroster';
    use HasFactory;

    protected $fillable = [
        'student_id',
        'name',
        'date',
        'time',
     
    ];
    public function user()
{
    return $this->belongsTo(User::class, 'student_id');
}
}

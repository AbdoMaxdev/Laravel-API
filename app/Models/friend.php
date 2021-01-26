<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class friend extends Model
{
    use HasFactory;
    protected $fillable = [
        'namefriend', 'first_name', 'last_name','email','groups'
    ];
}

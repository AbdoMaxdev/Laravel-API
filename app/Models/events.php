<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameevent', 'type','participants','participant', 'group','descrption','leaderuser', 'dateevent', 'hourevenbegin', 'hourevenfinish', 'localisation',
    ];
}

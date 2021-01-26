<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class useractivities extends Model
{
    use HasFactory;
    protected $fillable = [
        'listevent', 'listeventinvitation', 'localisation','friends','friendsinvitation', 'groups', 'groupsinvitation',
    ];
}

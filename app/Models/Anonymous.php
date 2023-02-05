<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anonymous extends Model
{
    use HasFactory;

    protected $fillable = [

        'date',
        'city',
        'type',
        'status',
        'model',
        'location',
        'message'

        
    ];
}

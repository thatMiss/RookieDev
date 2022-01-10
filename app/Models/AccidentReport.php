<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentReport extends Model
{
    use HasFactory;

    protected $fillable = [

        'first_name',
        'last_name',
        'email',
        'phone',
        'date',
        'city',
        'status',
        //'type',
        //'model',
        'location',
        'message',
        'attachment',
    
    ];

}

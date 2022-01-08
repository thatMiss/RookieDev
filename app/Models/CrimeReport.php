<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrimeReport extends Model
{
    use HasFactory;

    protected $fillable = [

        'first_name',
        'last_name',
        'email',
        'phone',
        'date',
        'city',
        'type',
        'status',
        'location',
        'message',


    ];
}

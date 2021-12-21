<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MostWantedPerson extends Model
{
    use HasFactory;

    protected $fillable = [

        'first_name',
        'last_name',
        'gender',
        'age',
        'marital_status',
        'occupation',
        'crime',
        'message',
         

    ];
}

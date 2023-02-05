<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criminal extends Model
{
    use HasFactory;

    protected $fillable = [

        'firstName',
        'lastName',
        'address',
        'gender',
        'date_of_birth',
        'marital_status',
        'occupation',
        'crime',
        'criminal_status',
        'image'

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [

    'firstName',
    'lastName',
    'email',
    'phone',
    'address',
    'date_of_birth',
    'gender',
    'marital_status',
    'rank',
    'station_number',
];


}

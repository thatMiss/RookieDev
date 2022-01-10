<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissingPerson extends Model
{
    use HasFactory;
    protected $table="missing_persons";
    protected $fillable = [
        
        'complainant_first_name',
        'complainant_last_name',
        'email',
        'phone',
        'missing_first_name',
        'missing_last_name',
        'gender',
        'age',
        'last_seen',
        'city',
        'status',
        'address',
        'description',
        'attachment',
        'confirmed',
    
    ];
}

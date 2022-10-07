<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_domicilio extends Model
{
    use HasFactory;

    protected $fillable = [
        'domicilio',
        'numero_exterior',
        'colonia',
        'cp',
        'ciudad',
        'user_id'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [

        'license',
        'company_Name',
        'region',
        'block',
        'address',
        'telephone',
        'email'

    ];


}

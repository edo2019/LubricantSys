<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_detail extends Model
{
    use HasFactory;

    protected $primaryKey = 'License';
    public $incrementing = false;

    protected $fillable = [
        'License', 
        'CompanyName', 
        'Region', 
        'Block', 
        'P_O_Box', 
        'Email'
    ];
}

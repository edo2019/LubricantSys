<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lubricant_detail extends Model
{
    use HasFactory;

    protected $primaryKey = 'SerialNumber';
    public $incrementing = false;

    protected $fillable = [
        'SerialNumber',
        'CompanyLicense',
        'LubricantName',
        'LubricantType',
        'LubricantPerformanceLevel',
        'LubricantBrand',
        'Number_Certification',
    ];
}

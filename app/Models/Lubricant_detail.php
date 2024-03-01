<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lubricant_detail extends Model
{
    use HasFactory;

    protected $primaryKey = 'SerialNumber';
    public $incrementing = false;

    protected $fillable = [
      
        'lubricantName',
        'lubricantType',
        'lubricantPerformanceLevel',
        'lubricantBrand',
        'number_Certification',
    ];

    public function company_detail(): BelongsTo
    {
        return $this->belongsTo(Company_detail::class, 'license');
    }
}

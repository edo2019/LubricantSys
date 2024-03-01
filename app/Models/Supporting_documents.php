<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Supporting_documents extends Model
{
    use HasFactory;

    protected $primaryKey = 'DocumentID';

    protected $fillable = [
      
        'number_NameOfCertification',
        'Attachment1',
        'Attachment2',
        'Attachment3',
        'Attachment4',
    ];

    public function company_detail(): BelongsTo
    {
        return $this->belongsTo(Company_detail::class, 'license');
    }

}

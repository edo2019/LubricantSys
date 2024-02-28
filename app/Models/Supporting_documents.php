<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supporting_documents extends Model
{
    use HasFactory;

    protected $primaryKey = 'DocumentID';

    protected $fillable = [
        'DocumentID',
        'LubricantSerialNumber',
        'CertificationNumber',
        'NameOfCertification',
        'Attachments',
    ];
}

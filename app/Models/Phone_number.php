<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phone_number extends Model
{
    use HasFactory;

    protected $primaryKey = 'PhoneNumberID';

    protected $fillable = [
        
        'phone_number',
        'altern_phone_Number',
    ];

    public function contact_person(): BelongsTo
    {
        return $this->belongsTo(Contact_person::class, 'email');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Contact_person extends Model
{
    use HasFactory;


    protected $primaryKey = 'ContactPersonID';

    protected $fillable = [
      
        'name',
        'title',
        'address',
        'email',
    ];

    public function company_detail(): BelongsTo
    {
        return $this->belongsTo(Company_detail::class, 'license');
    }

    public function phone_number(): HasMany
    {
        return $this->hasMany(Phone_number::class);
    }
}

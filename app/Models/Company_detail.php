<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company_detail extends Model
{
    use HasFactory;

    protected $primaryKey = 'License';
    public $incrementing = false;

    protected $fillable = [
        'license', 
        'company_Name', 
        'region', 
        'rlock',
        'telephone', 
        'address', 
        'email'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function contact_person(): Hasone
    {
        return $this->hasOne(Contact_person::class);

    }

    public function lubricant_detail(): HasMany
    {
        return $this->hasMany(Lubricant_detail::class);
    }

    public function Supporting_documents(): HasMany
    {
        return $this->hasMany(Supporting_documents::class);
    }
}

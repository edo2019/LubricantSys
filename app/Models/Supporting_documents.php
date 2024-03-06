<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supporting_documents extends Model
{
    use HasFactory;


    protected $fillable = [
        'certification',
        'name',
        'file_path',
    ];
}
